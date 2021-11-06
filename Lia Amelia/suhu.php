<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
        <form action = " " method = "post">
            <h2>Konversi suhu</h2>
            Masukan Jenis Suhu : <input type = "text" name = "jenis"><br><br>
            Masukan Besar Suhu : <input type = "number" name = "besar"><br><br>
            Konversi ke : <br><input type = "radio" name = "konversi" value = "celcius">Celcius
            <input type = "radio" name = "konversi" value = "reamur">Reamur
            <input type = "radio" name = "konversi" value = "farenheit">Farenheit
            <input type = "radio" name = "konversi" value = "kelvin">Kelvin<br>
            <input type = "submit" name = "submit" value = "Konversikan">
        </form>
    </body>
    </html>
<?php 
if(isset($_POST["submit"])){
    $jenis=$_POST['jenis'];
    $besar=$_POST['besar'];
    $konversi=$_POST['konversi'];

    echo "=====================================";
    echo "<br/>";

    if($jenis == "Celcius" || $jenis == "celcius"){
        if($konversi == "celcius"){
            echo "Jenis Suhu : $jenis<br/>";
            echo "Besar Suhu : $besar" . "°<br/>";
            echo "Hasil Konversi ke Celcius : $besar" . "°C";
        }
        else if($konversi=="reamur"){
            $hasil=(4/5)*$besar;
            echo "Jenis Suhu : $jenis<br/>";
            echo "Besar Suhu : $besar" . "°<br/>";
            echo " Hasil konversi ke Reamur: $hasil" . "°R";
        }
        else if($konversi=="farenheit"){
            $hasil=(9/5)*$besar+32;
            echo "Jenis Suhu : $jenis<br/>";
            echo "Besar Suhu : $besar" . "°<br/>";
            echo "Hasil Konversi ke Fahrenhait : $hasil" . "°F";
        }
        else if($konversi=="kelvin"){
            $hasil=$besar+273;
            echo "Jenis Suhu : $jenis<br/>";
            echo "Besar Suhu : $besar" . "°<br/>";
            echo "Hasil Konversi ke Kelvin: $hasil" . "°K";
        }
        else{
            echo "Piih dulu konversinya";
        }
    }

    else if($jenis == "Reamur" || $jenis == "reamur"){
        if($konversi == "celcius"){
            $hasil=(5/4)*$besar;
            echo "Jenis Suhu : $jenis<br/>";
            echo "Besar Suhu : $besar" . "°<br/>";
            echo "Hasil Konversi ke Celcius : $hasil" . "°C";
        }
        else if($konversi=="reamur"){
            echo "Jenis Suhu : $jenis<br/>";
            echo "Besar Suhu : $besar" . "°<br/>";
            echo " Hasil konversi ke Reamur: $besar" . "°R";
        }
        else if($konversi=="farenheit"){
            $hasil=((9/4) * $besar + 32);
            echo "Jenis Suhu : $jenis<br/>";
            echo "Besar Suhu : $besar" . "°<br/>";
            echo "Hasil Konversi ke Fahrenhait : $hasil" . "°F";
        }
        else if($konversi=="kelvin"){
            $hasil=(($besar * 5/4) + 273.15);
            echo "Jenis Suhu : $jenis<br/>";
            echo "Besar Suhu : $besar" . "°<br/>";
            echo "Hasil Konversi ke Kelvin: $hasil" . "°K";
        }
        else{
            echo "Piih dulu konversinya";
        }
    }

    else if($jenis == "Farenheit" || $jenis == "farenheit"){
        if($konversi == "celcius"){
            $hasil=(($besar - 32) * 5/9);
            echo "Jenis Suhu : $jenis<br/>";
            echo "Besar Suhu : $besar" . "°<br/>";
            echo "Hasil Konversi ke Celcius : $hasil" . "°C";
        }
        else if($konversi=="reamur"){
            $hasil=(4/9 * ($besar - 32));
            echo "Jenis Suhu : $jenis<br/>";
            echo "Besar Suhu : $besar" . "°<br/>";
            echo " Hasil konversi ke Reamur: $hasil" . "°R";
        }
        else if($konversi=="farenheit"){
            echo "Jenis Suhu : $jenis<br/>";
            echo "Besar Suhu : $besar" . "°<br/>";
            echo "Hasil Konversi ke Fahrenhait : $besar" . "°F";
        }
        else if($konversi=="kelvin"){
            $hasil=(($besar - 32) * 5/9 + 273.15);
            echo "Jenis Suhu : $jenis<br/>";
            echo "Besar Suhu : $besar" . "°<br/>";
            echo "Hasil Konversi ke Kelvin: $hasil" . "°K";
        }
        else{
            echo "Piih dulu konversinya";
        }
    }

    else if($jenis == "Kelvin" || $jenis == "kelvin"){
        if($konversi == "celcius"){
            $hasil=$besar - 273.15;
            echo "Jenis Suhu : $jenis<br/>";
            echo "Besar Suhu : $besar" . "°<br/>";
            echo "Hasil Konversi ke Celcius : $hasil" . "°C";
        }
        else if($konversi=="reamur"){
            $hasil= 4/5 * ($besar - 273);
            echo "Jenis Suhu : $jenis<br/>";
            echo "Besar Suhu : $besar" . "°<br/>";
            echo " Hasil konversi ke Reamur: $hasil" . "°R";
        }
        else if($konversi=="farenheit"){
            $hasil =(($besar - 273.15) * 9/5 + 32);
            echo "Jenis Suhu : $jenis<br/>";
            echo "Besar Suhu : $besar" . "°<br/>";
            echo "Hasil Konversi ke Fahrenhait : $hasil" . "°F";
        }
        else if($konversi=="kelvin"){
            echo "Hasil Konversi ke Kelvin: $besar" . "°K";
        }
        else{
            echo "Piih dulu konversinya";
        }
    }
    else{
        echo "Suhu Tidak Ada";
    }
    echo "<br/>=====================================";
}
?>