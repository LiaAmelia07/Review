<?php
$jam=$_POST['jam'];
$gol=$_POST['gol'];
switch($gol){
    case A : $gol=4000;
    break;
    case B : $gol=5000;
    break;
    case C : $gol=6000;
    break;
    case D : $gol=7000;
    break;
}
switch($jam){
    case ($jam<=48);
    $gaji=$gol*$jam;
    echo "Jam kerja anda = $jam jam </br>";
    echo "Gaji anda =\t Rp. $gaji jam </br>";
    break;
default :
$lembur =$jam - 48;
$jam2 =$jam - $lembur;
$gaji1 =$gol * $jam;
$gaji2 = 3000 * ($lembur);
$gaji = $gaji1 + $gaji2;

echo "jam kerja anda =".$jam." jam </br>";
echo "jam lembur anda =".$lembur." jam </br>";
echo "Gaji anda = \t ".$gaji." jam </br>";
}
?>