<?php

class Uang {
    // membuat method menjadi static
    public static function rupiah($nilai){
        return number_format($nilai,2,',','.');
    }
}


echo "Rp ".Uang::rupiah(25000);
