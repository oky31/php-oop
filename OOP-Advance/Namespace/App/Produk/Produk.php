<?php
abstract class Produk {
    protected $judul;
    protected $penulis;
    protected $penerbit;

    private $diskon = 0;

    protected $harga;


    public function __construct( $judul = "Judul" , $penulis = "penulis", $penerbit = "penerbit", $harga = 0) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit= $penerbit;
        $this->harga = $harga;
    }

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }

    abstract public function getInfo();

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
?>
