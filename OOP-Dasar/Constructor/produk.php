<?php

class Produk {
    
    // mendeklarasikan property dengan nilai default
    public $judul;
    public $penulis;
    public $penerbit; 
    public $harga;
   
    // mendeklarasikan constructor 
   // public function __construct($judul,$penulis,$penerbit,$harga){
   //     $this->judul = $judul;
   //     $this->penulis = $penulis;
   //     $this->penerbit = $penerbit;
   //     $this->harga = $harga;
   // }

    // mendeklarasikan constructor dengan default value
    public function __construct($judul = 'judul', $penulis = 'penulis', $penerbit = 'penerbit', $harga = 0){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }
}

    
// instance object produk yang sudah di masukan constructor
$produk1 = new Produk('naruto','ochiro oda','Shueisha');
var_dump($produk1);

?>
