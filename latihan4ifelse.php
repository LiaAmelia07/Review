<?php
$bulan = "Mei";
$harga = 1000000;
$potong1 = $harga - ($harga *(30/100));
$potong2 = $harga - ($harga *(20/100));
$potong3 = $harga - ($harga *(10/100));
if($bulan == "Mei"){
    echo "Daftar pada bulan $bulan </br>";
    echo "Anda mendapatkan diskon 30% </br>";
    echo "Biaya yang harus dibayar Rp. $potong1 </br>";
}elseif($bulan == "Juni"){
    echo "Daftar pada bulan $bulan </br>";
    echo "Anda mendapatkan diskon 20% </br>";
    echo "Biaya yang harus dibayar Rp. $potong2 </br>";
}elseif($bulan == "Juli"){
    echo "Daftar pada bulan $bulan </br>";
    echo "Anda mendapatkan diskon 10% </br>";
    echo "Biaya yang harus dibayar Rp. $potong3 </br>";
}else{
    echo "Anda tidak mendapatkan diskon";
}
?>