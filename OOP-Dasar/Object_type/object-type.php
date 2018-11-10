<?php 
class Produk {
    public $judul;
    public $penulis;
    public $penerbit;
    public $harga;

    public function __construct($judul="Judul", $penulis="Penulis", $penerbit="Penerbit", $harga="Harga"){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga; 
    }

    
    
}

class CetakProduk {
    // Menjadikan object sebagi parameter
    public function cetak(Produk $produk){
        $judul =  $produk->judul; 
        return $judul;
    }
}

$produk = new Produk('Naruto',"oky saputra","penusli","penerbit",10);
$cetakProduk = new CetakProduk();
echo $cetakProduk->cetak($produk);


?>
