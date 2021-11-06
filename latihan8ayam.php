<?php
$jm = 10;
$b =$jm;
for ($i = 1; $i <=$b; $i++) {
    echo"Anak ayam turun $jm ";
    $jm=$jm-1;
    if ($jm!=0) {
        echo "Mati 1 tinggal $jm </br>";
    } else{
        echo "Mati 1 tinggal induknya <br>";
    }
}
?>