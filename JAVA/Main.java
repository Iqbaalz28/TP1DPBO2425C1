import java.util.*;

public class Main {
    static ArrayList<Barang> daftarBarang = new ArrayList<>();

    static void tambahBarang(Scanner sc) {
        System.out.print("ID: "); int id = sc.nextInt(); sc.nextLine();
        System.out.print("Nama: "); String nama = sc.nextLine();
        System.out.print("Kategori: "); String kategori = sc.nextLine();
        System.out.print("Harga: "); double harga = sc.nextDouble();
        System.out.print("Stok: "); int stok = sc.nextInt();
        daftarBarang.add(new Barang(id, nama, kategori, harga, stok));
    }

    static void tampilkanBarang() {
        for (Barang b : daftarBarang) {
            System.out.println("ID: " + b.getId() + ", Nama: " + b.getNama() +
                ", Kategori: " + b.getKategori() + ", Harga: " + b.getHarga() +
                ", Stok: " + b.getStok());
        }
    }

    static void updateBarang(Scanner sc) {
        System.out.print("Masukkan ID: "); int id = sc.nextInt(); sc.nextLine();
        for (Barang b : daftarBarang) {
            if (b.getId() == id) {
                System.out.print("Nama baru: "); b.setNama(sc.nextLine());
                System.out.print("Kategori baru: "); b.setKategori(sc.nextLine());
                System.out.print("Harga baru: "); b.setHarga(sc.nextDouble());
                System.out.print("Stok baru: "); b.setStok(sc.nextInt());
                return;
            }
        }
        System.out.println("Barang tidak ditemukan!");
    }

    static void hapusBarang(Scanner sc) {
        System.out.print("Masukkan ID: "); int id = sc.nextInt();
        daftarBarang.removeIf(b -> b.getId() == id);
    }

    static void cariBarang(Scanner sc) {
        System.out.print("Masukkan ID: "); int id = sc.nextInt();
        for (Barang b : daftarBarang) {
            if (b.getId() == id) {
                System.out.println("Ditemukan: " + b.getNama() + ", Harga: " + b.getHarga());
                return;
            }
        }
        System.out.println("Barang tidak ditemukan!");
    }

    public static void main(String[] args) {
        Scanner sc = new Scanner(System.in);
        int pilihan;
        do {
            System.out.println("\n=== MENU TOKO ELEKTRONIK ===");
            System.out.println("1. Tambah Barang\n2. Tampilkan Barang\n3. Update Barang\n4. Hapus Barang\n5. Cari Barang\n0. Keluar");
            System.out.print("Pilih: ");
            pilihan = sc.nextInt();
            switch (pilihan) {
                case 1: tambahBarang(sc); break;
                case 2: tampilkanBarang(); break;
                case 3: updateBarang(sc); break;
                case 4: hapusBarang(sc); break;
                case 5: cariBarang(sc); break;
            }
        } while (pilihan != 0);
    }
}