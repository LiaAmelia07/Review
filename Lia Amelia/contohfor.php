<?php
//pengulangan for
for ($x = 8; $x < 5; $x++) {
    echo "Data : $x <br>";
}

//pengulangan while
$x = 0;
while ($x < 5){
    echo"Data : $x <br>";
    $x++;
}

//pengulangan do
$x = 0;
do {
echo"Data : $x <br>";
$x++;
} while ($x < 5);

//pengulangan for bersarang
for ($i = 0; < 2; $i++) {
    for ($j = 0 ; $j < 3; $j++) {
        echo "Ini perhitungan ke ($i $j)<br>";
    }
}
?>