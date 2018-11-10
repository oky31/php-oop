<?php
class Komik extends Produk implements InfoProduk {
    public $jmlHalaman;

    public function __construct( $judul = "Judul" , $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0) {
        // memangil constructor parent
        parent::__construct($judul,$penulis,$penerbit,$harga);

        $this->jmlHalaman = $jmlHalaman;
    }

    public function getInfo()  {
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

        return $str;
    }

    // mengunakan konsep overriding
    public function getInfoProduk() {
        $str = "Komik : ".$this->getInfo()."- {$this->jmlHalaman} Halaman.";
        return $str;
    }


}
