#include <bits/stdc++.h>
#include "Barang.cpp"
#include <iomanip>

using namespace std;

vector<Barang> daftarBarang;

void tambahBarang() {
    int id, stok;
    string nama, kategori;
    double harga;

    cout << "ID: "; cin >> id;
    cout << "Nama: "; cin.ignore(); getline(cin, nama);
    cout << "Kategori: "; getline(cin, kategori);
    cout << "Harga: "; cin >> harga;
    cout << "Stok: "; cin >> stok;

    daftarBarang.push_back(Barang(id, nama, kategori, harga, stok));
}

void tampilkanBarang() {
    for (auto &b : daftarBarang) {
        cout << fixed << setprecision(0);
        cout << "ID: " << b.getId()
             << ", Nama: " << b.getNama()
             << ", Kategori: " << b.getKategori()
             << ", Harga: " << b.getHarga()
             << ", Stok: " << b.getStok() << endl;
    }
}

void updateBarang() {
    int id; cout << "Masukkan ID barang yang ingin diupdate: "; cin >> id;
    for (auto &b : daftarBarang) {
        if (b.getId() == id) {
            string nama, kategori;
            double harga; int stok;
            cout << "Nama baru: "; cin.ignore(); getline(cin, nama);
            cout << "Kategori baru: "; getline(cin, kategori);
            cout << "Harga baru: "; cin >> harga;
            cout << "Stok baru: "; cin >> stok;
            b.setNama(nama); b.setKategori(kategori); b.setHarga(harga); b.setStok(stok);
            return;
        }
    }
    cout << "Barang tidak ditemukan!\n";
}

void hapusBarang() {
    int id; cout << "Masukkan ID barang yang ingin dihapus: "; cin >> id;
    for (auto it = daftarBarang.begin(); it != daftarBarang.end(); it++) {
        if (it->getId() == id) {
            daftarBarang.erase(it);
            return;
        }
    }
    cout << "Barang tidak ditemukan!\n";
}

void cariBarang() {
    int id; cout << "Masukkan ID barang: "; cin >> id;
    for (auto &b : daftarBarang) {
        if (b.getId() == id) {
            cout << "Ditemukan: " << b.getNama() << ", Harga: " << b.getHarga() << endl;
            return;
        }
    }
    cout << "Barang tidak ditemukan!\n";
}

int main() {
    int pilihan;
    do {
        cout << "\n=== MENU TOKO ELEKTRONIK ===\n";
        cout << "1. Tambah Barang\n2. Tampilkan Barang\n3. Update Barang\n4. Hapus Barang\n5. Cari Barang\n0. Keluar\nPilih: ";
        cin >> pilihan;
        switch(pilihan) {
            case 1: tambahBarang(); break;
            case 2: tampilkanBarang(); break;
            case 3: updateBarang(); break;
            case 4: hapusBarang(); break;
            case 5: cariBarang(); break;
        }
    } while(pilihan != 0);
}