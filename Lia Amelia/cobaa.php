<?php
$nilai = 4;
if($nilai >= 10){
    echo"Nilai A";
}elseif($nilai < 10 && $nilai > 5 ){
    echo"Nilai anda B";   
}elseif($nilai < 5 && $nilai > 0 ){
    echo"Nilai anda C"; 
}else{
    echo "Nilai anda tidak ditemukan";
}
?>