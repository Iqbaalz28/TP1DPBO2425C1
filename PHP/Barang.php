<?php

// Definisi class Barang
class Barang {
    // ===================== ATRIBUT =====================
    private int $id;          // ID unik untuk barang
    private string $nama;     // Nama barang
    private string $kategori; // Kategori barang (misalnya Laptop, TV, dll.)
    private float $harga;     // Harga barang
    private string $gambar;   // Path file gambar (lokal, hasil upload)

    // ===================== CONSTRUCTOR =====================
    // Dipanggil saat objek baru dibuat, untuk inisialisasi atribut
    public function __construct(int $id, string $nama, string $kategori, float $harga, string $gambar) {
        $this->id = $id;                // Isi atribut id
        $this->nama = $nama;            // Isi atribut nama
        $this->kategori = $kategori;    // Isi atribut kategori
        $this->harga = $harga;          // Isi atribut harga
        $this->gambar = $gambar;        // Isi atribut gambar (path file)
    }

    // ===================== GETTER =====================
    // Method untuk mengambil nilai atribut (read-only)
    public function getId(): int { return $this->id; }
    public function getNama(): string { return $this->nama; }
    public function getKategori(): string { return $this->kategori; }
    public function getHarga(): float { return $this->harga; }
    public function getGambar(): string { return $this->gambar; }

    // ===================== SETTER =====================
    // Method untuk mengubah nilai atribut (write)
    public function setNama(string $nama): void { $this->nama = $nama; }
    public function setKategori(string $kategori): void { $this->kategori = $kategori; }
    public function setHarga(float $harga): void { $this->harga = $harga; }
    public function setGambar(string $gambar): void { $this->gambar = $gambar; }
}
