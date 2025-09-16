from barang import Barang     # Import class Barang dari file barang.py

daftarBarang = []             # List kosong untuk menyimpan objek Barang (list of object)

# ===================== TAMBAH BARANG =====================
def tambahBarang():
    id = int(input("ID: "))                    # Input ID barang
    nama = input("Nama: ")                      # Input nama barang
    kategori = input("Kategori: ")              # Input kategori barang
    harga = float(input("Harga: "))             # Input harga barang (tipe float)
    stok = int(input("Stok: "))                 # Input stok barang (tipe int)

    # Buat objek Barang baru dan tambahkan ke list
    daftarBarang.append(Barang(id, nama, kategori, harga, stok))

# ===================== TAMPILKAN SEMUA BARANG =====================
def tampilkanBarang():
    for b in daftarBarang:   # Iterasi setiap objek Barang di list
        print(f"ID: {b.getId()}, Nama: {b.getNama()}, "
              f"Kategori: {b.getKategori()}, Harga: {b.getHarga()}, "
              f"Stok: {b.getStok()}")   # Tampilkan atribut dengan getter

# ===================== UPDATE BARANG =====================
def updateBarang():
    id = int(input("Masukkan ID: "))            # Input ID target
    for b in daftarBarang:                      # Cari barang di list
        if b.getId() == id:                     # Jika ditemukan
            b.setNama(input("Nama baru: "))     # Update nama
            b.setKategori(input("Kategori baru: ")) # Update kategori
            b.setHarga(float(input("Harga baru: "))) # Update harga
            b.setStok(int(input("Stok baru: ")))     # Update stok
            return                              # Keluar setelah update berhasil
    print("Barang tidak ditemukan!")            # Jika ID tidak ada

# ===================== HAPUS BARANG =====================
def hapusBarang():
    id = int(input("Masukkan ID: "))            # Input ID target
    global daftarBarang                         # Gunakan variabel global daftarBarang
    # Buat ulang list tanpa barang dengan ID yang dihapus
    daftarBarang = [b for b in daftarBarang if b.getId() != id]

# ===================== CARI BARANG =====================
def cariBarang():
    id = int(input("Masukkan ID: "))            # Input ID target
    for b in daftarBarang:                      # Iterasi list
        if b.getId() == id:                     # Jika ditemukan
            print(f"Ditemukan: {b.getNama()}, Harga: {b.getHarga()}") # Tampilkan data
            return
    print("Barang tidak ditemukan!")            # Jika tidak ada

# ===================== FUNGSI UTAMA =====================
def main():
    while True:                                 # Loop menu utama
        print("\n=== MENU TOKO ELEKTRONIK ===")
        print("1. Tambah Barang\n2. Tampilkan Barang\n3. Update Barang\n4. Hapus Barang\n5. Cari Barang\n0. Keluar")
        pilihan = int(input("Pilih: "))         # Input pilihan menu

        # Jalankan fungsi sesuai pilihan
        if pilihan == 1: 
            tambahBarang()
        elif pilihan == 2: 
            tampilkanBarang()
        elif pilihan == 3: 
            updateBarang()
        elif pilihan == 4: 
            hapusBarang()
        elif pilihan == 5: 
            cariBarang()
        elif pilihan == 0: 
            break                               # Keluar dari loop jika pilih 0

# ===================== ENTRY POINT =====================
if __name__ == "__main__":
    main()     # Jalankan fungsi main hanya jika file ini dijalankan langsung
