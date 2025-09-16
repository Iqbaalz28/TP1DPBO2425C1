# Definisi class Barang
class Barang:
    # ===================== CONSTRUCTOR =====================
    # __init__ adalah konstruktor di Python, dipanggil saat objek dibuat
    def __init__(self, id: int, nama: str, kategori: str, harga: float, stok: int):
        self._id = id                # Atribut id (underscore _ menunjukkan private by convention)
        self._nama = nama            # Atribut nama barang
        self._kategori = kategori    # Atribut kategori barang (misalnya Laptop, TV, dll.)
        self._harga = harga          # Atribut harga barang
        self._stok = stok            # Atribut jumlah stok barang

    # ===================== GETTER =====================
    # Method untuk mengambil nilai atribut (membaca data)
    def getId(self): return self._id
    def getNama(self): return self._nama
    def getKategori(self): return self._kategori
    def getHarga(self): return self._harga
    def getStok(self): return self._stok

    # ===================== SETTER =====================
    # Method untuk mengubah nilai atribut (menulis data baru)
    def setNama(self, nama: str): self._nama = nama
    def setKategori(self, kategori: str): self._kategori = kategori
    def setHarga(self, harga: float): self._harga = harga
    def setStok(self, stok: int): self._stok = stok
