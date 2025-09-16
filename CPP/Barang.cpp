#include <string>
using namespace std;

class Barang {
private:
    int id;
    string nama;
    string kategori;
    double harga;
    int stok;

public:
    // Constructor
    Barang(int id, string nama, string kategori, double harga, int stok) {
        this->id = id;
        this->nama = nama;
        this->kategori = kategori;
        this->harga = harga;
        this->stok = stok;
    }

    // Getter
    int getId() { return id; }
    string getNama() { return nama; }
    string getKategori() { return kategori; }
    double getHarga() { return harga; }
    int getStok() { return stok; }

    // Setter
    void setNama(string nama) { this->nama = nama; }
    void setKategori(string kategori) { this->kategori = kategori; }
    void setHarga(double harga) { this->harga = harga; }
    void setStok(int stok) { this->stok = stok; }
};
