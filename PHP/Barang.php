<?php

class Barang {
    private int $id;
    private string $nama;
    private string $kategori;
    private float $harga;
    private string $gambar;

    public function __construct(int $id, string $nama, string $kategori, float $harga, string $gambar) {
        $this->id = $id;
        $this->nama = $nama;
        $this->kategori = $kategori;
        $this->harga = $harga;
        $this->gambar = $gambar;
    }

    // Getter
    public function getId(): int { return $this->id; }
    public function getNama(): string { return $this->nama; }
    public function getKategori(): string { return $this->kategori; }
    public function getHarga(): float { return $this->harga; }
    public function getGambar(): string { return $this->gambar; }

    // Setter
    public function setNama(string $nama): void { $this->nama = $nama; }
    public function setKategori(string $kategori): void { $this->kategori = $kategori; }
    public function setHarga(float $harga): void { $this->harga = $harga; }
    public function setGambar(string $gambar): void { $this->gambar = $gambar; }
}
