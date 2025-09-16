<?php

require_once "Barang.php";         // Import class Barang agar bisa digunakan
session_start();                   // Mulai session untuk menyimpan data antar request

// Jika belum ada daftarBarang di session, inisialisasi array kosong
if (!isset($_SESSION['daftarBarang'])) {
    $_SESSION['daftarBarang'] = [];
}

// ===================== TAMBAH BARANG =====================
if (isset($_POST['tambah'])) {     // Cek apakah form tambah barang dikirim
    $id = intval($_POST['id']);            // Ambil input ID (konversi ke int)
    $nama = $_POST['nama'];                // Ambil input nama
    $kategori = $_POST['kategori'];        // Ambil input kategori
    $harga = floatval($_POST['harga']);    // Ambil input harga (konversi ke float)

    // ----- Proses Upload Gambar -----
    $uploadDir = "uploads/";               // Folder tujuan penyimpanan file
    if (!is_dir($uploadDir)) {             // Jika folder belum ada
        mkdir($uploadDir, 0777, true);     // Buat folder dengan permission penuh
    }

    // Buat nama file unik berdasarkan timestamp + nama file asli
    $fileName = time() . "_" . basename($_FILES['gambar']['name']);
    $uploadFile = $uploadDir . $fileName;  // Path lengkap file tujuan

    // Pindahkan file dari temporary ke folder upload
    if (move_uploaded_file($_FILES['gambar']['tmp_name'], $uploadFile)) {
        // Jika berhasil upload → buat object Barang baru, simpan di session
        $_SESSION['daftarBarang'][] = new Barang($id, $nama, $kategori, $harga, $uploadFile);
    } else {
        // Jika gagal upload
        echo "<p style='color:red'>Gagal upload gambar!</p>";
    }
}

// ===================== HAPUS BARANG =====================
if (isset($_GET['hapus'])) {       // Cek apakah ada request hapus (via link GET)
    $id = intval($_GET['hapus']);  // Ambil ID target
    foreach ($_SESSION['daftarBarang'] as $i => $b) {  // Iterasi semua barang
        if ($b->getId() == $id) {                      // Jika ID cocok
            // Hapus file gambar dari server juga
            if (file_exists($b->getGambar())) {
                unlink($b->getGambar());
            }
            unset($_SESSION['daftarBarang'][$i]);      // Hapus objek dari array session
        }
    }
    // Reset index array agar rapih kembali (0,1,2,...)
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

<!-- ===================== FORM TAMBAH BARANG ===================== -->
<h2>Tambah Barang</h2>
<form method="post" enctype="multipart/form-data">
    <!-- Input data barang -->
    <input type="number" name="id" placeholder="ID" required>
    <input type="text" name="nama" placeholder="Nama" required>
    <input type="text" name="kategori" placeholder="Kategori" required>
    <input type="number" step="0.01" name="harga" placeholder="Harga" required>
    <input type="file" name="gambar" accept="image/*" required> <!-- Upload gambar -->
    <button type="submit" name="tambah">Tambah Barang</button>
</form>

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

<!-- Loop daftarBarang di session untuk ditampilkan -->
<?php foreach ($_SESSION['daftarBarang'] as $b): ?>
<tr>
    <td><?= $b->getId() ?></td>                <!-- Tampilkan ID -->
    <td><?= $b->getNama() ?></td>              <!-- Tampilkan Nama -->
    <td><?= $b->getKategori() ?></td>          <!-- Tampilkan Kategori -->
    <td><?= number_format($b->getHarga(), 0, ',', '.') ?></td> <!-- Format harga -->
    <td><img src="<?= $b->getGambar() ?>" width="100"></td>    <!-- Tampilkan gambar -->
    <td>
        <!-- Link hapus barang berdasarkan ID -->
        <a href="?hapus=<?= $b->getId() ?>" onclick="return confirm('Yakin hapus?')">Hapus</a>
    </td>
</tr>
<?php endforeach; ?>
</table>
</body>
</html>
