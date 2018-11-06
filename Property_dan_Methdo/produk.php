<?php

class Produk {

	 // mendeklarasikan property di dalam class
	 public $judul;
	 public $penulis; 
	 public $penerbit; 
	 public $harga;

	//// mendeklarasikan property dengan nilai default
	//public $judul = 'Naruto';
	//public $penulis = 'Ochiro oda'; 
	//public $penerbit = 'Shueisha'; 
	//public $harga = 25000;


	// Mendeklarasikan method 
	public function getJudul(){
		return $this->judul;
	}

	public function setJudul($judul){
		$this->judul = $judul;
	}
	
}


// instance object produk
$produk1 = new Produk();

// melihat property yang terdapat di dalam produk
//var_dump($produk1);

//// menambahkan nilai dari property di luar class
//$produk1->judul = 'Kalkulus dan Geometri Analitis';
//$produk1->penulis = 'Edwin J. Purcell  Dale varberg';

//// melihat nilai property yang baru di tambahkan
//var_dump($produk1);


// menambahkan property di luar class
//$produk1->halaman = 200;
//var_dump($produk1);


// mengakses method pada object
$produk1->setJudul('Naruto');
echo "Judul : " .$produk1->getJudul();
?>
