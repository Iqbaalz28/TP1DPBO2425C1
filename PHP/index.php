<?php
require_once "Barang.php";
session_start();

if (!isset($_SESSION['daftarBarang'])) {
    $_SESSION['daftarBarang'] = [];
}

// ===================== TAMBAH BARANG =====================
if (isset($_POST['tambah'])) {
    $id = intval($_POST['id']);
    $nama = $_POST['nama'];
    $kategori = $_POST['kategori'];
    $harga = floatval($_POST['harga']);

    $uploadDir = "uploads/";
    if (!is_dir($uploadDir)) mkdir($uploadDir, 0777, true);

    $fileName = time() . "_" . basename($_FILES['gambar']['name']);
    $uploadFile = $uploadDir . $fileName;

    if (move_uploaded_file($_FILES['gambar']['tmp_name'], $uploadFile)) {
        $_SESSION['daftarBarang'][] = new Barang($id, $nama, $kategori, $harga, $uploadFile);
    }
}

// ===================== UPDATE BARANG =====================
if (isset($_POST['update'])) {
    $id = intval($_POST['id']); 
    $found = false; // flag penanda
    foreach ($_SESSION['daftarBarang'] as $b) {
        if (!$found && $b->getId() == $id) {
            $b->setNama($_POST['nama']);
            $b->setKategori($_POST['kategori']);
            $b->setHarga(floatval($_POST['harga']));

            // Jika user upload gambar baru
            if (!empty($_FILES['gambar']['name'])) {
                if (file_exists($b->getGambar())) {
                    unlink($b->getGambar());
                }
                $uploadDir = "uploads/";
                if (!is_dir($uploadDir)) mkdir($uploadDir, 0777, true);
                $fileName = time() . "_" . basename($_FILES['gambar']['name']);
                $uploadFile = $uploadDir . $fileName;
                if (move_uploaded_file($_FILES['gambar']['tmp_name'], $uploadFile)) {
                    $b->setGambar($uploadFile);
                }
            }

            $found = true;
        }
    }
}

// ===================== HAPUS BARANG =====================
if (isset($_GET['hapus'])) {
    $id = intval($_GET['hapus']);
    foreach ($_SESSION['daftarBarang'] as $i => $b) {
        if ($b->getId() == $id) {
            if (file_exists($b->getGambar())) unlink($b->getGambar());
            unset($_SESSION['daftarBarang'][$i]);
        }
    }
    $_SESSION['daftarBarang'] = array_values($_SESSION['daftarBarang']);
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Toko Elektronik</title>
</head>
<body>
<h1>Toko Elektronik</h1>

<?php if (isset($_GET['edit'])): 
    $idEdit = intval($_GET['edit']);
    foreach ($_SESSION['daftarBarang'] as $b) {
        if ($b->getId() == $idEdit) {
?>
<!-- ===================== FORM UPDATE ===================== -->
<h2>Edit Barang</h2>
<form method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?= $b->getId() ?>">
    <input type="text" name="nama" value="<?= $b->getNama() ?>" required>
    <input type="text" name="kategori" value="<?= $b->getKategori() ?>" required>
    <input type="number" step="0.01" name="harga" value="<?= $b->getHarga() ?>" required>
    <p>Gambar lama: <img src="<?= $b->getGambar() ?>" width="100"></p>
    <input type="file" name="gambar" accept="image/*">
    <button type="submit" name="update">Simpan Perubahan</button>
</form>
<?php
        }
    }
else:
?>
<!-- ===================== FORM TAMBAH BARANG ===================== -->
<h2>Tambah Barang</h2>
<form method="post" enctype="multipart/form-data">
    <input type="number" name="id" placeholder="ID" required>
    <input type="text" name="nama" placeholder="Nama" required>
    <input type="text" name="kategori" placeholder="Kategori" required>
    <input type="number" step="0.01" name="harga" placeholder="Harga" required>
    <input type="file" name="gambar" accept="image/*" required>
    <button type="submit" name="tambah">Tambah Barang</button>
</form>
<?php endif; ?>

<!-- ===================== TABEL DAFTAR BARANG ===================== -->
<h2>Daftar Barang</h2>
<table border="1" cellpadding="8" cellspacing="0">
<tr>
    <th>ID</th>
    <th>Nama</th>
    <th>Kategori</th>
    <th>Harga</th>
    <th>Gambar</th>
    <th>Aksi</th>
</tr>
<?php foreach ($_SESSION['daftarBarang'] as $b): ?>
<tr>
    <td><?= $b->getId() ?></td>
    <td><?= $b->getNama() ?></td>
    <td><?= $b->getKategori() ?></td>
    <td><?= number_format($b->getHarga(), 0, ',', '.') ?></td>
    <td><img src="<?= $b->getGambar() ?>" width="100"></td>
    <td>
        <a href="?edit=<?= $b->getId() ?>">Edit</a> | 
        <a href="?hapus=<?= $b->getId() ?>" onclick="return confirm('Yakin hapus?')">Hapus</a>
    </td>
</tr>
<?php endforeach; ?>
</table>
</body>
</html>

