<?php
//Daftar Menu
echo "======================================== </br>";
echo "============= Restoran Rubby ===============</br>";
echo "======================================== </br>";
echo "Makanan </br>";
echo "1. Nasi Goreng : Rp. 20000 </br>";
echo "2. Ayam Goreng : Rp. 13.000 </br>";
echo "3. Ayam Bakar  : Rp. 15.000 </br>";
echo "4. Nasi Putih  : Rp. 5.000 </br>";
echo "</br>";
echo "Minuman </br>";
echo "1. Jus Jeruk   : Rp. 8.000 </br>";
echo "2. Jus Alpukat : Rp. 10.000 </br>";
echo "3. Air Mineral : Rp. 7.000 </br>";
echo "======================================== </br>";

//Transaksi Minuman
echo "================= Pesanan ================ </br>";
echo "======================================== </br>";
$food = "Makanan";
$makan = "Ayam Goreng";
$jm = 5;

if ($food == "Makanan") {
    if($makan =="Nasi Goreng") {
        $harga = 20000;
        $jumlah1 = $jm * $harga;
        echo "Makanan : Nasi Goreng</br>";
        echo "Harga : Rp. $harga</br>";
        echo "Jumlah: $jm </br>";
        echo "Total : Rp. $jumlah1 </br>";
    }elseif($makan =="Ayam Goreng") {
        $harga = 13000;
        $jumlah1 = $jm * $harga;
        echo "Makanan : Ayam Goreng</br>";
        echo "Harga   : Rp. $harga</br>";
        echo "Jumlah  : $jm </br>";
        echo "Total   : Rp. $jumlah1 </br>";
    }elseif($makan =="Ayam Bakar") {
        $harga = 15000;
        $jumlah1 = $jm * $harga;
        echo "Makanan : Ayam Bakar</br>";
        echo "Harga : Rp. $harga</br>";
        echo "Jumlah: $jm </br>";
        echo "Total : Rp. $jumlah1 </br>";
    }elseif($makan =="Nasi Putih") {
        $harga = 5000;
        $jumlah1 = $jm * $harga;
        echo "Makanan : Nasi Putih</br>";
        echo "Harga : Rp. $harga</br>";
        echo "Jumlah: $jm </br>";
        echo "Total : Rp. $jumlah1 </br>";
    }else {
        echo "Menu makanan tidak tersedia";
    }
}
echo "</br>";
//Transaksi Minum
$drink = "Minuman";
$minum = "Jus Jeruk";
$jm = 9;

if ($drink == "Minuman") {
    if($minum =="Jus Jeruk") {
        $harga = 8000;
        $jumlah2 = $jm * $harga;
        echo "Minuman : Jus Jeruk</br>";
        echo "Harga : Rp. $harga</br>";
        echo "Jumlah: $jm </br>";
        echo "Total : Rp. $jumlah2 </br>";
    }elseif($minum =="Jus Alpukat") {
        $harga = 10000;
        $jumlah2 = $jm * $harga;
        echo "Minuman : Jus Alpukat</br>";
        echo "Harga : Rp. $harga</br>";
        echo "Jumlah: $jm </br>";
        echo "Total : Rp. $jumlah2 </br>";
    }elseif($minum =="Air Mineral") {
        $harga = 7000;
        $jumlah2 = $jm * $harga;
        echo "Minuman : Air Mineral</br>";
        echo "Harga : Rp. $harga</br>";
        echo "Jumlah: $jm </br>";
        echo "Total : Rp. $jumlah2 </br>";
    }else {
        echo "Menu minuman tidak tersedia";
    }
}
echo "</br>";

//Transaksi Akhir
$total1 = $jumlah1 + $jumlah2;
$total2 = $total1 - ($total1 * 20/100);
if ($total1 > 150000){
    echo"Total seluruhnya : Rp. $total1 </br>";
    echo"Karena total belanja anda lebih dari Rp. 150.000 </br>";
    echo"Maka anda mendapatkan diskon sebesar 20%! </br>";
    echo"Jadi biaya yang harus anda bayar sebesar Rp. $total2 </br>";
}else {
    echo "Biaya Keseluruhan : Rp. $total1";
    echo "<br>";
}
echo "========================================= </br>";
echo "================ Terima Kasih =============== </br>";
echo "========================================= </br>";
?>