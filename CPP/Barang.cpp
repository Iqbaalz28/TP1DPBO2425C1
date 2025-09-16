#include <string>           // Library untuk menggunakan tipe data string
using namespace std;        // Agar bisa memakai std::string, std::cout, dll. tanpa menuliskan 'std::'

// Definisi class Barang
class Barang {
private:                    // Bagian private: hanya bisa diakses dari dalam class
    int id;                 // Atribut unik untuk identifikasi barang
    string nama;            // Nama barang
    string kategori;        // Kategori barang (misalnya: Laptop, TV, dll.)
    double harga;           // Harga barang
    int stok;               // Jumlah stok barang yang tersedia

public:                     // Bagian public: bisa diakses dari luar class

    // Constructor: method khusus yang otomatis dipanggil saat objek dibuat
    // Digunakan untuk mengisi nilai awal ke atribut class
    Barang(int id, string nama, string kategori, double harga, int stok) {
        this->id = id;              // 'this->id' menunjuk ke atribut class, '=' mengisi dari parameter
        this->nama = nama;          // Isi atribut nama dengan nilai parameter
        this->kategori = kategori;  // Isi atribut kategori
        this->harga = harga;        // Isi atribut harga
        this->stok = stok;          // Isi atribut stok
    }

    // Bagian Getter: fungsi untuk mengambil nilai atribut (read only)
    int getId() { return id; }              // Mengembalikan nilai id
    string getNama() { return nama; }       // Mengembalikan nama barang
    string getKategori() { return kategori; } // Mengembalikan kategori
    double getHarga() { return harga; }     // Mengembalikan harga
    int getStok() { return stok; }          // Mengembalikan stok

    // Bagian Setter: fungsi untuk mengubah nilai atribut (write)
    void setNama(string nama) { this->nama = nama; }           // Ubah nilai atribut nama
    void setKategori(string kategori) { this->kategori = kategori; } // Ubah kategori
    void setHarga(double harga) { this->harga = harga; }       // Ubah harga
    void setStok(int stok) { this->stok = stok; }              // Ubah stok
};
