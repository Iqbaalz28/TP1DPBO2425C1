// Definisi class Barang
public class Barang {
    // ===================== ATRIBUT =====================
    private int id;             // Atribut unik untuk identifikasi barang
    private String nama;        // Nama barang
    private String kategori;    // Kategori barang (misalnya: Laptop, TV, dll.)
    private double harga;       // Harga barang
    private int stok;           // Jumlah stok barang yang tersedia

    // ===================== CONSTRUCTOR =====================
    // Konstruktor dipanggil saat objek dibuat untuk mengisi nilai awal atribut
    public Barang(int id, String nama, String kategori, double harga, int stok) {
        this.id = id;                  // Isi atribut id dengan parameter id
        this.nama = nama;              // Isi atribut nama dengan parameter nama
        this.kategori = kategori;      // Isi atribut kategori dengan parameter kategori
        this.harga = harga;            // Isi atribut harga dengan parameter harga
        this.stok = stok;              // Isi atribut stok dengan parameter stok
    }

    // ===================== GETTER =====================
    // Method untuk membaca nilai atribut (hanya mengembalikan nilai)
    public int getId() { return id; }                // Ambil nilai id
    public String getNama() { return nama; }         // Ambil nama
    public String getKategori() { return kategori; } // Ambil kategori
    public double getHarga() { return harga; }       // Ambil harga
    public int getStok() { return stok; }            // Ambil stok

    // ===================== SETTER =====================
    // Method untuk mengubah nilai atribut
    public void setNama(String nama) { this.nama = nama; }             // Ubah nama
    public void setKategori(String kategori) { this.kategori = kategori; } // Ubah kategori
    public void setHarga(double harga) { this.harga = harga; }         // Ubah harga
    public void setStok(int stok) { this.stok = stok; }                // Ubah stok
}
