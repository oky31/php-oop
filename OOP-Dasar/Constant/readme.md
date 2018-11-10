# Constant
Adalah variabel yang nilainya tidak bisa di ubah, untuk mendefinisikan constant
di php dengan konsep OOP gunakan keyword `const NAMA_CONSTANT = nilai` , di
sarankan mengunakan huruf besar untuk penamaan constant

* Memangil constant di luar class dengan keyword `namaClass::PROPERTYCONSTANT`
* Memangil constant di dalam class dengan keyword `self::PROPERTYCONSTANT`

## Magic Constant
adalah constant yang telah di definiskan langsung oleh php, ini beberapa magic
constant :
```php
__LINE__ -> Deskripsi
__FILE__ -> Deskripsi
__DIR__ -> Deskripsi
__FUNCTION__ -> Deskripsi
__CLASS__ -> Deskripsi
__TRAIT__ -> Deskripsi
__METHOD__ -> Deskripsi
__NAMESPACE__ -> Deskripsi

```
