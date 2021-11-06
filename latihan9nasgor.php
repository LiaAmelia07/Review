<html>
    <head><tittle> Nasi Goreng Rubby </tittle></head>
    <body>
        <form ACTION= " " METHOD ="POST" NAME= "input">
            Harga Menu : <input type="text" name="harga" required><br>
            Uang Anda : <input type="text" name="uang" required><br>
            <input type="submit" name="Input" value="Input">
        </form>
    </body> 
</html>
<?php
if (isset ($_POST['Input'])){
    $uang =$_POST['uang'];
    $harga=$_POST['harga'];
    $kem = $_POST['uang'] - $_POST['harga'];
    $kurang = $_POST['harga'] - $_POST['uang'];
    if ($uang > $harga){
        echo "Uang anda Kembalian Rp. $kem </br>";
        echo "Silahkan untuk menunggu pesanan anda </br>";
    }elseif ($uang < $harga) {
        $kurang = $harga - $uang; 
        echo "Uang anda Kurang Rp. $kurang</br>";
        echo "Silahkan untuk menambah uang anda </br>";
    }elseif ($uang >= $harga) {
        echo "Uang anda pas! </br>";
        echo "Silahkan untuk menunggu pesanan anda </br>";
    }
}
?>