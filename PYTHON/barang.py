class Barang:
    def __init__(self, id: int, nama: str, kategori: str, harga: float, stok: int):
        self._id = id
        self._nama = nama
        self._kategori = kategori
        self._harga = harga
        self._stok = stok

    def getId(self): return self._id
    def getNama(self): return self._nama
    def getKategori(self): return self._kategori
    def getHarga(self): return self._harga
    def getStok(self): return self._stok

    def setNama(self, nama: str): self._nama = nama
    def setKategori(self, kategori: str): self._kategori = kategori
    def setHarga(self, harga: float): self._harga = harga
    def setStok(self, stok: int): self._stok = stok
