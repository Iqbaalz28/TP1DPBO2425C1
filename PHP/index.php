<?php

require_once "Barang.php";
session_start();

if (!isset($_SESSION['daftarBarang'])) {
    $_SESSION['daftarBarang'] = [];
}

// Tambah barang
if (isset($_POST['tambah'])) {
    $id = intval($_POST['id']);
    $nama = $_POST['nama'];
    $kategori = $_POST['kategori'];
    $harga = floatval($_POST['harga']);

    // Proses upload gambar
    $uploadDir = "uploads/";
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0777, true); // buat folder jika belum ada
    }

    $fileName = time() . "_" . basename($_FILES['gambar']['name']); // unik
    $uploadFile = $uploadDir . $fileName;

    if (move_uploaded_file($_FILES['gambar']['tmp_name'], $uploadFile)) {
        $_SESSION['daftarBarang'][] = new Barang($id, $nama, $kategori, $harga, $uploadFile);
    } else {
        echo "<p style='color:red'>Gagal upload gambar!</p>";
    }
}

// Hapus barang
if (isset($_GET['hapus'])) {
    $id = intval($_GET['hapus']);
    foreach ($_SESSION['daftarBarang'] as $i => $b) {
        if ($b->getId() == $id) {
            // hapus file gambar juga
            if (file_exists($b->getGambar())) {
                unlink($b->getGambar());
            }
            unset($_SESSION['daftarBarang'][$i]);
        }
    }
    $_SESSION['daftarBarang'] = array_values($_SESSION['daftarBarang']); // reset index
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Toko Elektronik</title>
</head>
<body>
<h1>Toko Elektronik</h1>

<h2>Tambah Barang</h2>
<form method="post" enctype="multipart/form-data">
    <input type="number" name="id" placeholder="ID" required>
    <input type="text" name="nama" placeholder="Nama" required>
    <input type="text" name="kategori" placeholder="Kategori" required>
    <input type="number" step="0.01" name="harga" placeholder="Harga" required>
    <input type="file" name="gambar" accept="image/*" required>
    <button type="submit" name="tambah">Tambah Barang</button>
</form>

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
    <td><a href="?hapus=<?= $b->getId() ?>" onclick="return confirm('Yakin hapus?')">Hapus</a></td>
</tr>
<?php endforeach; ?>
</table>
</body>
</html>
