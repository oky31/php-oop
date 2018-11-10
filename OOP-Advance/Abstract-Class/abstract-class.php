<?php
abstract class Produk {
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

    abstract public function getInfoProduk();

    public function getInfo()  {
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
        $str = "Komik : ".parent::getInfo()."- {$this->jmlHalaman} Halaman.";
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
        $str = "Game : ".parent::getInfo()." ~ {$this->waktuMain} Jam.";
        return $str;
    }

}

class CetakInfoProduk {
    public $daftarProduk = [];

    public function tambahProduk( Produk $produk){
        $this->daftarProduk[] = $produk;
    }

    public function cetak() {
        $str = "DAFTAR PRODUK : <br>";

        foreach( $this->daftarProduk as $p ) {
            $str .= "- {$p->getInfoProduk()} <br>";
        }

        return $str;
    }
}


$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);
$produk2 = new Game("Uncharted", "Neil Drucmann", "Sony Computer", 25000, 50);

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk( $produk1 );
$cetakProduk->tambahProduk( $produk2 );

echo $cetakProduk->cetak();


?>
