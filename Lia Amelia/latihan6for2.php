<?php
//for L kanan 
$l = 5;
for ($i = $l; $i> 0; $i--) {
for ($j = $l ; $j >= $i; $j--) {
         echo " # ";
    }
    echo"</br>";
}
echo"</br>";
$l= 5;
for ($a=1; $a <= $l; $a++){
    for($b=1; $b <= $a; $b++) {
    }
    for ($c=$l; $b >= $a; $c--){
        echo " ";
    }
    echo"*";
}
echo"<hr>";

?>