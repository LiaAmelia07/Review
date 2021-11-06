<?php
echo "MENU DI RESTORAN</br>";
echo"============================</br>";
echo "Makanan</br>";
echo "1. Nasi Goreng : Rp. 20000</br>";
echo "2. Ayam Goreng : Rp. 13000</br>";
echo "3. Ayam Bakar  : Rp. 15000</br>";
echo "4. Nasi Putih  : Rp. 5000</br>";
echo"============================</br>";
echo "Minuman</br>";
echo "1. Jus Jeruk : Rp. 8000</br>";
echo "2. Jus Alpukat : Rp. 10000</br>";
echo "3. Air Mineral : Rp. 7000</br>";
echo"============================</br>";

//pesanan
$food = "makanan";
$makan = "Nasi goreng";
$jm = 18;

if($food == "makanan") {
    if ($makan == "Nasi goreng"){
        $harga = 20000;
        $jumlah = $jm * $harga;
        $bayar = $jumlah - ($jumlah * (20/100));
        echo "Makanan : Nasi Goreng </br>";
        echo "Harga : Rp. $harga </br>";
        echo "Pesan : $jm </br>";
        echo "Total : $jumlah</br>";
        if ($jumlah >= 150000) {
            echo "</br>";
            echo "Pesanan lebih dari Rp.150.000!</br>";
            echo "Mendapatkan diskon 20%! </br>";
            echo "Total : Rp. $bayar";
            echo "</br>";
        }
} elseif ($makan == "Ayam goreng"){
    $harga = 13000;
    $jumlah = $jm * $harga;
    $bayar = $jumlah - ($jumlah * (20/100));
    echo "Makanan : Ayam Goreng </br>";
    echo "Harga : Rp. $harga </br>";
    echo "Pesan : $jm </br>";
    echo "Total : $jumlah</br>";
    if ($jumlah >= 150000) {
        echo "</br>";
        echo "Pesanan lebih dari Rp.150.000!</br>";
        echo "Mendapatkan diskon 20%! </br>";
        echo "Total : Rp. $bayar";
        echo "</br>";
    }
} elseif ($makan == "Ayam Bakar"){
    $harga = 13000;
    $jumlah = $jm * $harga;
    $bayar = $jumlah - ($jumlah * (20/100));
    echo "Makanan : Ayam Bakar </br>";
    echo "Harga : Rp. $harga </br>";
    echo "Pesan : $jm </br>";
    echo "Total : $jumlah</br>";
    if ($jumlah >= 150000) {
        echo "</br>";
        echo "Pesanan lebih dari Rp.150.000!</br>";
        echo "Mendapatkan diskon 20%! </br>";
        echo "Total : Rp. $bayar";
        echo "</br>";
    }
} elseif ($makan == "Nasi Putih"){
    $harga = 7000;
    $jumlah = $jm * $harga;
    $bayar = $jumlah - ($jumlah * (20/100));
    echo "Makanan : Nasi Putih </br>";
    echo "Harga : Rp. $harga </br>";
    echo "Pesan : $jm </br>";
    echo "Total : $jumlah</br>";
    if ($jumlah >= 150000) {
        echo "</br>";
        echo "Pesanan lebih dari Rp.150.000!</br>";
        echo "Mendapatkan diskon 20%! </br>";
        echo "Total : Rp. $bayar";
        echo "</br>";
    }
} else {
    echo "Makanan tidak tersedia";
}
}
echo "</br>";
$mnm = "minuman";
$minum = "Jus Jeruk";
$jm = 18;
if($mnm == "minuman") {
    if ($minum == "Jus Jeruk"){
        $harga = 8000;
        $jumlah = $jm * $harga;
        $bayar = $jumlah - ($jumlah * (20/100));
        echo "Minuman : Jus Jeruk </br>";
        echo "Harga : Rp. $harga </br>";
        echo "Pesan : $jm </br>";
        echo "Total : $jumlah</br>";
        if ($jumlah >= 150000) {
            echo "</br>";
            echo "Pesanan lebih dari Rp.150.000!</br>";
            echo "Mendapatkan diskon 20%! </br>";
            echo "Total : Rp. $bayar";
            echo "</br>";
        }
} elseif ($minum == "Jus Alpukat"){
    $harga = 13000;
    $jumlah = $jm * $harga;
    $bayar = $jumlah - ($jumlah * (20/100));
    echo "Minuman : Jus Alpukat </br>";
    echo "Harga : Rp. $harga </br>";
    echo "Pesan : $jm </br>";
    echo "Total : $jumlah</br>";
    if ($jumlah >= 150000) {
        echo "</br>";
        echo "Pesanan lebih dari Rp.150.000!</br>";
        echo "Mendapatkan diskon 20%! </br>";
        echo "Total : Rp. $bayar";
        echo "</br>";
    }
} elseif ($minum == "Air Mineral"){
    $harga = 7000;
    $jumlah = $jm * $harga;
    $bayar = $jumlah - ($jumlah * (20/100));
    echo "Minuman : Air Mineral </br>";
    echo "Harga : Rp. $harga </br>";
    echo "Pesan : $jm </br>";
    echo "Total : $jumlah</br>";
    if ($jumlah >= 150000) {
        echo "</br>";
        echo "Pesanan lebih dari Rp.150.000!</br>";
        echo "Mendapatkan diskon 20%! </br>";
        echo "Total : Rp. $bayar";
        echo "</br>";
    }
} 
} else {
    echo "Minuman tidak tersedia";
}
?>