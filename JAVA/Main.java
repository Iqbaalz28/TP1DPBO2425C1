import java.util.*;   // Import library util (Scanner, ArrayList, dll.)

// Kelas utama untuk menjalankan program
public class Main {
    // ===================== DEKLARASI LIST BARANG =====================
    static ArrayList<Barang> daftarBarang = new ArrayList<>();  
    // ArrayList digunakan sebagai "list of object" untuk menyimpan banyak Barang

    // ===================== TAMBAH BARANG =====================
    static void tambahBarang(Scanner sc) {
        System.out.print("ID: "); 
        int id = sc.nextInt(); sc.nextLine();       // Input ID (nextLine() untuk buang newline agar input berikutnya aman)
        System.out.print("Nama: "); 
        String nama = sc.nextLine();                // Input nama (bisa ada spasi)
        System.out.print("Kategori: "); 
        String kategori = sc.nextLine();            // Input kategori
        System.out.print("Harga: "); 
        double harga = sc.nextDouble();             // Input harga
        System.out.print("Stok: "); 
        int stok = sc.nextInt();                    // Input stok

        // Tambahkan object Barang baru ke daftar
        daftarBarang.add(new Barang(id, nama, kategori, harga, stok));
    }

    // ===================== TAMPILKAN SEMUA BARANG =====================
    static void tampilkanBarang() {
        for (Barang b : daftarBarang) { // Iterasi setiap Barang dalam list
            System.out.println("ID: " + b.getId() 
                + ", Nama: " + b.getNama() 
                + ", Kategori: " + b.getKategori() 
                + ", Harga: " + b.getHarga() 
                + ", Stok: " + b.getStok());
        }
    }

    // ===================== UPDATE BARANG =====================
    static void updateBarang(Scanner sc) {
        System.out.print("Masukkan ID: "); 
        int id = sc.nextInt(); sc.nextLine();      // Input ID target
        for (Barang b : daftarBarang) {            // Cari barang di list
            if (b.getId() == id) {                 // Jika ditemukan
                System.out.print("Nama baru: "); 
                b.setNama(sc.nextLine());          // Update nama
                System.out.print("Kategori baru: "); 
                b.setKategori(sc.nextLine());      // Update kategori
                System.out.print("Harga baru: "); 
                b.setHarga(sc.nextDouble());       // Update harga
                System.out.print("Stok baru: "); 
                b.setStok(sc.nextInt());           // Update stok
                return;                            // Selesai update
            }
        }
        System.out.println("Barang tidak ditemukan!"); // Jika ID tidak ditemukan
    }

    // ===================== HAPUS BARANG =====================
    static void hapusBarang(Scanner sc) {
        System.out.print("Masukkan ID: "); 
        int id = sc.nextInt();                     // Input ID target
        // removeIf -> hapus elemen jika memenuhi kondisi
        daftarBarang.removeIf(b -> b.getId() == id);
    }

    // ===================== CARI BARANG =====================
    static void cariBarang(Scanner sc) {
        System.out.print("Masukkan ID: "); 
        int id = sc.nextInt();                     // Input ID target
        for (Barang b : daftarBarang) {            // Cari barang di list
            if (b.getId() == id) {                 // Jika ditemukan
                System.out.println("Ditemukan: " + b.getNama() 
                    + ", Harga: " + b.getHarga());
                return;
            }
        }
        System.out.println("Barang tidak ditemukan!"); // Jika ID tidak ditemukan
    }

    // ===================== MAIN METHOD =====================
    public static void main(String[] args) {
        Scanner sc = new Scanner(System.in);       // Scanner untuk input user
        int pilihan;                               // Menyimpan input pilihan menu
        do {
            // Tampilkan menu utama
            System.out.println("\n=== MENU TOKO ELEKTRONIK ===");
            System.out.println("1. Tambah Barang\n2. Tampilkan Barang\n3. Update Barang\n4. Hapus Barang\n5. Cari Barang\n0. Keluar");
            System.out.print("Pilih: ");
            pilihan = sc.nextInt();                // Input pilihan menu

            // Jalankan fungsi sesuai pilihan
            switch (pilihan) {
                case 1: tambahBarang(sc); break;
                case 2: tampilkanBarang(); break;
                case 3: updateBarang(sc); break;
                case 4: hapusBarang(sc); break;
                case 5: cariBarang(sc); break;
            }
        } while (pilihan != 0);                    // Ulangi sampai user memilih 0 (keluar)
    }
}
