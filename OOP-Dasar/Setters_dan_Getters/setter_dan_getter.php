<?php
class Produk {
    private $judul;
    private $penulis;
    private $penerbit;

    private $diskon = 0;

    private $harga;


    public function __construct( $judul = "Judul" , $penulis = "penulis", $penerbit = "penerbit", $harga = 0) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit= $penerbit;
        $this->harga = $harga;
    }

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoProduk() {
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        return $str;
    }

    public function getHarga() {
        return $this->harga - ($this->harga * $this->diskon / 100);
    }

    // method setter untuk property judul
    public function setDiskon($diskon) {
        $this->diskon = $diskon;
    }

    // method getter untuk property judul
    public function getJudul(){
        return $this->judul;
    }

    public function setJudul($judul){
        if( !is_string($judul) ) {
            throw new Exception("Judul Harus String");
        }

        $this->judul = $judul;
    }

    public function setPenulis($penulis){
        $this->penulis = $penulis;
    }

    public function getPenulis(){
        return $this->penulis;
    }

    public function setPenerbit($penerbit){
        $this->penerbit = $penerbit;
    }

    public function getPenerbit(){
        return $this->penerbit;
    }


}

class Komik extends Produk {
    public $jmlHalaman;

    public function __construct( $judul = "Judul" , $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0) {
        // memangil constructor parent
        parent::__construct($judul,$penulis,$penerbit,$harga);

        $this->jmlHalaman = $jmlHalaman;
    }

    // mengunakan konsep overriding
    public function getInfoProduk() {
        $str = "Komik : ".parent::getInfoProduk()."- {$this->jmlHalaman} Halaman.";
        return $str;
    }
}

class Game extends Produk {
    public $waktuMain;

    public function __construct($judul = "Judul" , $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0){
        // memangil constructor parent
        parent::__construct($judul,$penulis,$penerbit,$harga);
        $this->waktuMain = $waktuMain;
    }

    // mengunakan konsep overriding
    public function getInfoProduk() {
        $str = "Game : ".parent::getInfoProduk()." ~ {$this->waktuMain} Jam.";
        return $str;
    }

}

class CetakInfoProduk {
    public function cetak( Produk $produk ) {
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}

$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);
$produk2 = new Game("Uncharted", "Neil Drucmann", "Sony Computer", 25000, 50);

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
echo "<hr>";

$produk2->setDiskon(50);
echo $produk2->getHarga();
echo "<hr>";

$produk3 = new Produk("Barang Baru");
echo $produk3->getJudul();

echo "<hr>";
$produk1->setJudul('Judul Baru');
$produk1->setPenulis('Oky Saputra');
$produk1->setPenerbit('Kuda Mas');

echo "Judul : ". $produk1->getJudul() . "<br>";
echo "Penulis : ". $produk1->getPenulis() ."<br>";
echo "Penerbit : ". $produk1->getPenerbit() . "<br>";


?>
