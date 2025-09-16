from barang import Barang

daftarBarang = []

def tambahBarang():
    id = int(input("ID: "))
    nama = input("Nama: ")
    kategori = input("Kategori: ")
    harga = float(input("Harga: "))
    stok = int(input("Stok: "))
    daftarBarang.append(Barang(id, nama, kategori, harga, stok))

def tampilkanBarang():
    for b in daftarBarang:
        print(f"ID: {b.getId()}, Nama: {b.getNama()}, Kategori: {b.getKategori()}, Harga: {b.getHarga()}, Stok: {b.getStok()}")

def updateBarang():
    id = int(input("Masukkan ID: "))
    for b in daftarBarang:
        if b.getId() == id:
            b.setNama(input("Nama baru: "))
            b.setKategori(input("Kategori baru: "))
            b.setHarga(float(input("Harga baru: ")))
            b.setStok(int(input("Stok baru: ")))
            return
    print("Barang tidak ditemukan!")

def hapusBarang():
    id = int(input("Masukkan ID: "))
    global daftarBarang
    daftarBarang = [b for b in daftarBarang if b.getId() != id]

def cariBarang():
    id = int(input("Masukkan ID: "))
    for b in daftarBarang:
        if b.getId() == id:
            print(f"Ditemukan: {b.getNama()}, Harga: {b.getHarga()}")
            return
    print("Barang tidak ditemukan!")

def main():
    while True:
        print("\n=== MENU TOKO ELEKTRONIK ===")
        print("1. Tambah Barang\n2. Tampilkan Barang\n3. Update Barang\n4. Hapus Barang\n5. Cari Barang\n0. Keluar")
        pilihan = int(input("Pilih: "))
        if pilihan == 1: tambahBarang()
        elif pilihan == 2: tampilkanBarang()
        elif pilihan == 3: updateBarang()
        elif pilihan == 4: hapusBarang()
        elif pilihan == 5: cariBarang()
        elif pilihan == 0: break

if __name__ == "__main__":
    main()
