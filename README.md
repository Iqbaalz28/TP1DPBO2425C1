# TP1DPBO2425C1

Saya **Iqbal Rizky Maulana** dengan NIM **2408622** mengerjakan **Tugas Praktikum 1** dalam mata kuliah **Desain Pemrograman Berorientasi Objek** untuk keberkahan-Nya maka saya tidak akan melakukan kecurangan seperti yang telah di spesifikasikan.

Adapun repository ini merupakan implementasi konsep OOP (Object-Oriented Programming) dalam 4 bahasa: C++, Java, Python, dan PHP dengan studi kasus Toko Elektronik. Program mendemonstrasikan class sederhana dengan atribut, constructor, getter/setter, serta fitur CRUD dan pencarian data.

## ✨ Fitur Utama
+ C++ / Java / Python (CLI / Terminal)
  - Tambah data barang
  - Tampilkan data barang
  - Update data barang berdasarkan ID
  - Hapus data barang berdasarkan ID
  - Cari data barang berdasarkan ID

+ PHP (Web)
  - Tambah data barang melalui form HTML
  - Tampilkan data barang dalam tabel
  - Update & hapus data
  - Simpan path gambar lokal untuk ditampilkan di tabel

## 🛠 Konsep OOP yang digunakan
- Class & Object
- Constructor & Destructor (khusus C++)
- Enkapsulasi (atribut private, akses via getter/setter)
- Array / List of Object sebagai penyimpanan data

## 📂 Struktur Project
```
├── CPP/       # Implementasi dengan C++ (CLI)
├── JAVA/      # Implementasi dengan Java (CLI)
├── PYTHON/    # Implementasi dengan Python (CLI)
├── PHP/       # Implementasi dengan PHP (Web)
└── README.md  # Penjelasan Program
```
## 📌1. C++ (CLI / Terminal)
+ **Desain Class**
  - Class: Barang
  - Atribut:
    - id id (int) → identifier unik
    - nama (string)
    - kategori (string)
    - harga (double)
    - stok (int)
  - Method: constructor, getter, setter.

 + **Struktur Program**
   - Barang.cpp → definisi class Barang.
   - Main.cpp → fungsi main dengan menu.
   - Penyimpanan data: vector(Barang) daftarBarang.
     
+ **Flow Kode**
  - Program menampilkan menu utama.
  - Input pilihan user (cin).
  - Switch-case menentukan aksi:
     - **Tambah** → buat objek Barang baru → simpan ke vector.
     - **Tampilkan** → iterasi vector → cetak atribut.
     - **Update** → cari ID → ubah atribut dengan setter.
     - **Hapus** → cari ID → hapus dari vector.
     - **Cari** → cari ID → tampilkan data barang.
  - Ulangi sampai user memilih 0 (keluar).

+ **Dokumentasi Program**
  - Menambah Barang Pertama di Bahasa C++
    <img width="940" height="255" alt="image" src="https://github.com/user-attachments/assets/c6e701d0-f300-430a-8421-7a068c68b4bb" />
  
  - Menambah Barang Kedua di Bahasa C++
    <img width="940" height="254" alt="image" src="https://github.com/user-attachments/assets/812e0382-2601-4569-a5c1-3a8d4fd7b068" />

  - Menampilkan Semua Barang di Bahasa C++
    <img width="940" height="204" alt="image" src="https://github.com/user-attachments/assets/079c1afa-fcca-45cc-ba3a-7a426df197c7" />

  - Update Barang Dengan ID 101 di Bahasa C++
    <img width="940" height="389" alt="image" src="https://github.com/user-attachments/assets/c1ee76fd-60e0-4b0a-b625-2dee324f4971" />

  - Mencari Barang Dengan ID 101 di Bahasa C++
    <img width="940" height="262" alt="image" src="https://github.com/user-attachments/assets/9f8f8163-7027-4703-813b-e30d8c2dd53a" />

  - Menghapus Barang Dengan ID 102 di Bahasa C++
    <img width="940" height="348" alt="image" src="https://github.com/user-attachments/assets/f8f35ff0-9b53-44d8-8d73-3b33a190725b" />

  - Mencari Barang Yang Sudah Dihapus di Bahasa C++
    <img width="940" height="246" alt="image" src="https://github.com/user-attachments/assets/d20b2a9f-2697-4b56-bc48-371bf33eaf80" />

## 📌 2. Java (CLI / Terminal)
+ **Desain Class**
  - Class: Barang
  - Atribut: id (int), nama (String), kategori (String), harga (double), stok (int).
  - Method: constructor, getter, setter.
    
+ **Struktur Program**
  - Barang.java → class model.
  - Main.java → program utama dengan menu.
  - Penyimpanan data: ArrayList(Barang) daftarBarang.
    
+ **Flow Code**
  - main() membuat loop menu dengan Scanner.
  - User memilih aksi (1–5 atau 0).
  - Switch-case eksekusi:
    - **Tambah** → input dari Scanner → buat objek → tambahkan ke ArrayList.
    - **Tampilkan** → for-each daftarBarang → cetak data.
    - **Update** → cari berdasarkan ID → setter ubah atribut.
    - **Hapus** → remove objek dengan removeIf.
    - **Cari** → cari ID → cetak jika ada.
  - Ulangi sampai pilihan == 0.
 
+ **Dokumentasi Program**
  - Menambah Barang Pertama di Bahasa Java
    <img width="940" height="269" alt="image" src="https://github.com/user-attachments/assets/0e1ff914-5e79-4e50-9f8c-639bc492c57c" />

  - Menambah Barang Kedua di Bahasa Java
    <img width="940" height="227" alt="image" src="https://github.com/user-attachments/assets/aea48176-12e6-47cc-abc2-b8e9cea596d7" />

  - Menampilkan Semua Barang di Bahasa Java
    <img width="940" height="207" alt="image" src="https://github.com/user-attachments/assets/7ce7cb1b-b0a9-4312-a856-1b681ea55c89" />

  - Update Barang Dengan ID 1 di Bahasa Java
    <img width="940" height="435" alt="image" src="https://github.com/user-attachments/assets/af7fa8de-bd6f-4915-a9df-ba925844115b" />

  - Menghapus Barang dengan ID 2, dan Mencari Barang Tersebut setelah Dihapus serta Menampilkan seluruh Barang setelah Penghapusan Barang
    <img width="940" height="449" alt="image" src="https://github.com/user-attachments/assets/ec9ec1f1-0a25-404f-a8a2-f7fb73ae8074" />

## 📌 3. Python (CLI / Terminal)
+ **Desain Class**
  - Class: Barang
  - Atribut: _id (int), _nama (str), _kategori (str), _harga (float), _stok (int).
  - Method: __init__, getter, setter.

+ **Struktur Program**
  - barang.py → class Barang.
  - main.py → menu + logic CRUD.
  - Penyimpanan data: list daftarBarang.

+ **Flow Kode**
  - Fungsi main() menjalankan loop while True.
  - User memilih menu (1–5 atau 0).
  - Panggil fungsi sesuai menu:
    - **tambahBarang()** → input data → buat objek → append ke list.
    - **tampilkanBarang()** → iterasi list → print data.
    - **updateBarang()** → cari ID → ubah data dengan setter.
    - **hapusBarang()** → filter list tanpa ID tsb.
    - **cariBarang()** → cari ID → tampilkan jika ada.
  - 0 → break loop → keluar.

 + **Dokumentasi Program**
   - Menambah Barang Baru di Bahasa Python
     <img width="940" height="474" alt="image" src="https://github.com/user-attachments/assets/0d82c885-a16b-4ec3-b19b-54695136f290" />

   - Menampilkan Semua Barang di Bahasa Python
     <img width="940" height="217" alt="image" src="https://github.com/user-attachments/assets/2e8305b6-9efb-40ed-8a08-946eec57bd15" />

   - Update Barang di Bahasa Python
     <img width="940" height="429" alt="image" src="https://github.com/user-attachments/assets/2824d299-56ba-435b-922b-468800ded74b" />

   - Mencari barang berdasarkan ID
     <img width="849" height="367" alt="image" src="https://github.com/user-attachments/assets/ee23e43e-6ec9-4b9f-9399-53d2529685e1" />
     
   - Menghapus Barang dan Mencari Barang Yang sudah dihapus
     <img width="940" height="557" alt="image" src="https://github.com/user-attachments/assets/22bb10c0-33b3-40a2-b31e-b569829b0262" />

## 📌 3. PHP (Web)
+ **Class Barang (Barang.php)**
  - **Atribut (private)**
    - id → integer, identifier unik barang.
    - nama → string, nama barang.
    - kategori → string, kategori barang.
    - harga → float, harga barang.
    - gambar → string, path file lokal hasil upload.
      
  - **Method**
    - __construct() → constructor untuk mengisi atribut saat object dibuat.
    - Getter: getId(), getNama(), getKategori(), getHarga(), getGambar().
    - Setter: setNama(), setKategori(), setHarga(), setGambar().

+ **File index.php**
  - Session ($_SESSION) digunakan sebagai penyimpanan array of object (daftarBarang).
  - Form HTML dipakai untuk input data barang baru (termasuk upload gambar).
  - Tabel HTML menampilkan daftar barang.
  - Link Hapus (?hapus=id) untuk menghapus barang berdasarkan ID.

+ **Flow Kode**
  - Load Class & Start Session
    - Memastikan definisi class Barang sudah tersedia sebelum unserialize dari session.
  - Inisialisasi Penyimpanan
    - Jika belum ada data, buat array kosong.
    - $_SESSION['daftarBarang'] akan menampung sekumpulan object Barang.
  - Tambah Data Barang (Create)
    - User isi form HTML, termasuk file gambar.
    - PHP proses form:
      - Upload file gambar → simpan di folder uploads/.
      - Path file (uploads/nama_file.jpg) dipakai sebagai atribut gambar.
      - Buat object Barang baru, lalu masukkan ke $_SESSION['daftarBarang'].
  - Tampilkan Data Barang (Read)
    - Iterasi seluruh object Barang dalam $_SESSION['daftarBarang'].
    - Tampilkan sebagai baris tabel: ID, Nama, Kategori, Harga (diformat), dan Gambar (<img>).
  - Update Data Barang
    - Tabel daftar barang ditambah link Edit di tiap baris.
      - Link membawa kita ke ?edit=ID.
    - Jika ada $_GET['edit'], tampilkan form edit barang dengan data lama terisi (prefilled).
    - Saat form disubmit ($_POST['update']), set nilai baru ke object Barang via setter.
      - Jika upload gambar baru, hapus gambar lama dan ganti path gambar.
  - Hapus Data Barang (Delete)
    - User klik link ?hapus=id.
    - PHP cari object dengan ID tersebut dalam $_SESSION['daftarBarang'].
    - Jika ketemu:
      - Hapus file gambar (unlink()).
      - Hapus object dari session array.
        
+ **Dokumentasi Program**
  - Tampilan Halaman Utama Program
    <img width="1366" height="768" alt="image" src="https://github.com/user-attachments/assets/ebe2caca-49c4-4012-b912-3102ff670b6c" />

  - Menambahkan Barang
    <img width="1111" height="412" alt="image" src="https://github.com/user-attachments/assets/69a33f9b-799b-4792-b73c-29eee42b7fe1" />
  
  - Menampilkan Barang
    <img width="1101" height="188" alt="image" src="https://github.com/user-attachments/assets/f1f3b5a3-8521-41f9-9bab-2081599ff976" />

  - Update Barang
    <img width="1105" height="544" alt="image" src="https://github.com/user-attachments/assets/2eeefa3e-e39f-48c4-94d6-f7b39b727ad8" />

    <img width="1110" height="540" alt="image" src="https://github.com/user-attachments/assets/32846bb1-daaa-4654-9748-051bc88268cc" />

    <img width="1105" height="578" alt="image" src="https://github.com/user-attachments/assets/2f16fd5b-7f12-4ed9-a1d9-9a39d9e515b6" />

    <img width="1106" height="231" alt="image" src="https://github.com/user-attachments/assets/cb51ba2d-f46b-4c1c-84c5-09e46c55e648" />

  - Menghapus Barang
    <img width="1365" height="672" alt="image" src="https://github.com/user-attachments/assets/63346e1c-7e9b-4ca5-aeaa-0549b12010a8" />

    <img width="1096" height="113" alt="image" src="https://github.com/user-attachments/assets/c09a84f5-37a8-4164-bbd2-8664e672fedc" />

  - Mencari Barang Yang Sudah Dihapus
    <img width="1112" height="203" alt="image" src="https://github.com/user-attachments/assets/77153ea0-8019-4bd0-a9c2-8a7d57a35799" />

  - Menambahkan Kembali Barang dan Mencarinya
    <img width="1112" height="341" alt="image" src="https://github.com/user-attachments/assets/c268e534-5f4f-48a7-af06-158a7407d6c6" />
    
    <img width="1103" height="564" alt="image" src="https://github.com/user-attachments/assets/a817e9cc-c2e1-4651-9100-c40cdc9ba33c" />


    


