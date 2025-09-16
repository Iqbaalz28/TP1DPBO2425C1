#include <bits/stdc++.h>        // Library "all-in-one" (berisi semua header standar C++: iostream, vector, string, dll.)
#include "Barang.cpp"           // Meng-include definisi class Barang dari file Barang.cpp
#include <iomanip>              // Digunakan untuk manipulasi format output (misalnya setprecision)

using namespace std;            // Supaya bisa pakai cout, cin, string, vector tanpa prefix std::

vector<Barang> daftarBarang;    // Vector (dynamic array) untuk menyimpan daftar objek Barang

// ===================== Fungsi Tambah Barang =====================
void tambahBarang() {
    int id, stok;               // Variabel lokal untuk input ID dan stok barang
    string nama, kategori;      // Variabel lokal untuk input nama dan kategori barang
    double harga;               // Variabel lokal untuk input harga barang

    // Input dari user
    cout << "ID: "; cin >> id;                                  // Input ID
    cout << "Nama: "; cin.ignore(); getline(cin, nama);         // Input nama (pakai getline agar bisa ada spasi)
    cout << "Kategori: "; getline(cin, kategori);               // Input kategori
    cout << "Harga: "; cin >> harga;                            // Input harga
    cout << "Stok: "; cin >> stok;                              // Input stok

    // Tambahkan object baru ke vector daftarBarang
    daftarBarang.push_back(Barang(id, nama, kategori, harga, stok));
}

// ===================== Fungsi Tampilkan Barang =====================
void tampilkanBarang() {
    for (auto &b : daftarBarang) {                              // Iterasi semua barang dalam vector
        cout << fixed << setprecision(0);                       // Format output: angka desimal tampil bulat (tanpa notasi ilmiah)
        cout << "ID: " << b.getId()                             // Ambil dan cetak ID
             << ", Nama: " << b.getNama()                       // Ambil dan cetak nama
             << ", Kategori: " << b.getKategori()               // Ambil dan cetak kategori
             << ", Harga: " << b.getHarga()                     // Ambil dan cetak harga
             << ", Stok: " << b.getStok() << endl;              // Ambil dan cetak stok
    }
}

// ===================== Fungsi Update Barang =====================
void updateBarang() {
    int id; 
    cout << "Masukkan ID barang yang ingin diupdate: "; cin >> id;   // Input ID target
    for (auto &b : daftarBarang) {                                  // Cari barang berdasarkan ID
        if (b.getId() == id) {                                      // Jika ditemukan
            string nama, kategori;
            double harga; int stok;

            // Input data baru untuk barang
            cout << "Nama baru: "; cin.ignore(); getline(cin, nama);
            cout << "Kategori baru: "; getline(cin, kategori);
            cout << "Harga baru: "; cin >> harga;
            cout << "Stok baru: "; cin >> stok;

            // Update nilai atribut dengan setter
            b.setNama(nama); 
            b.setKategori(kategori); 
            b.setHarga(harga); 
            b.setStok(stok);
            return;                                                 // Keluar setelah update berhasil
        }
    }
    cout << "Barang tidak ditemukan!\n";                            // Jika ID tidak ada
}

// ===================== Fungsi Hapus Barang =====================
void hapusBarang() {
    int id; 
    cout << "Masukkan ID barang yang ingin dihapus: "; cin >> id;   // Input ID target
    for (auto it = daftarBarang.begin(); it != daftarBarang.end(); it++) { // Iterasi dengan iterator
        if (it->getId() == id) {                                    // Jika ID cocok
            daftarBarang.erase(it);                                 // Hapus barang dari vector
            return;                                                 // Keluar setelah berhasil hapus
        }
    }
    cout << "Barang tidak ditemukan!\n";                            // Jika ID tidak ada
}

// ===================== Fungsi Cari Barang =====================
void cariBarang() {
    int id; 
    cout << "Masukkan ID barang: "; cin >> id;                      // Input ID target
    for (auto &b : daftarBarang) {                                  // Iterasi semua barang
        if (b.getId() == id) {                                      // Jika ditemukan
            cout << "Ditemukan: " << b.getNama()                    // Cetak nama
                 << ", Harga: " << b.getHarga() << endl;            // Cetak harga
            return;                                                 // Keluar setelah ketemu
        }
    }
    cout << "Barang tidak ditemukan!\n";                            // Jika tidak ada
}

// ===================== Fungsi Main =====================
int main() {
    int pilihan;                                                    // Variabel untuk input pilihan menu
    do {
        // Tampilkan menu utama
        cout << "\n=== MENU TOKO ELEKTRONIK ===\n";
        cout << "1. Tambah Barang\n2. Tampilkan Barang\n3. Update Barang\n4. Hapus Barang\n5. Cari Barang\n0. Keluar\nPilih: ";
        cin >> pilihan;                                             // Input pilihan user

        // Jalankan fungsi sesuai pilihan
        switch(pilihan) {
            case 1: tambahBarang(); break;                          // Tambah data
            case 2: tampilkanBarang(); break;                       // Tampilkan data
            case 3: updateBarang(); break;                          // Update data
            case 4: hapusBarang(); break;                           // Hapus data
            case 5: cariBarang(); break;                            // Cari data
        }
    } while(pilihan != 0);                                          // Ulangi sampai user pilih 0 (keluar)
}
