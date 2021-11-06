<?php
if(isset($_POST['submit'])){
$tinggi=$_POST['tinggi'];
$kelamin=$_POST['kelamin'];
$berat=$_POST['berat'];
$hit1=$tinggi-100;
$ideal=$hit1-($hit1/10);


echo "Jenis kelamin : $kelamin <br>";
echo "TINGGI BADAN ANDA :$tinggi cm </br>";
echo "BERAT BADAN ANDA  :$berat kg </br> ";

if ($berat>=2+$ideal||$berat==$ideal||$berat>=$ideal-2)
{
    echo "BERAT BADAN ANDA IDEAL"; 
}
else 
{
    echo "BERAT BADAN ANDA TIDAK IDEAL"; 
}
}
?>
</body> 
</html> 
