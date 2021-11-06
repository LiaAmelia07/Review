<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
if(isset($_POST['submit'])){ 
    $nama=$_POST['nama'];
    $gol=$_POST['golongan'];
    $jm=$_POST['jm'];
    $A= $jm*4000;
    $B= $jm*5000;
    $C= $jm*6000;
    $D= $jm*7000;

    echo " GAJI YANG DI PEROLEH KARYAWAN BORMA ";
    echo "<P>Nama Karyawan : $nama ";
    echo "<P>Golongan Kerja : $gol ";
    echo "<P>Jumlah jam kerja : $jm";

    if ($gol=='A'&& $jm<=48) {
        echo "<P>Gaji yang didapatkan sebesar Rp. $A ";
    }else if($gol=='B'&& $jm<=48) {
        echo "<P>Gaji yang didapatkan sebesar Rp. $B ";
    } else if ($gol=='C'&& $jm<=48) {
        echo "<P>Gaji yang didapatkan sebesar Rp. $C ";
    }else if ($gol=='D'&& $jm<=48) {
        echo "<P>Gaji yang didapatkan sebesar Rp. $D";
    }
}   
?>
<br>
<h3><a href="latihan10gaji.html">Kembali</a></h3>
</body>
</html>