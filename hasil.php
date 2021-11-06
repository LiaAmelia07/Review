<h2>HOTEL JJXVRBY</h2>
<?php 
    if(isset($_POST["mulai"])){
        $tamu= @$_POST['tamu'];
        $identitas= @$_POST['identitas'];
        $tanggal= @$_POST['tanggal'];
        $tipe= @$_POST['tipe'];
        $durasi= @$_POST['durasi'];

    echo "Nama Tamu : $tamu<br>";
    echo "No Identitas : $identitas<br>";
    echo "Tanggal Menginap : $tanggal<br>";
    echo "Tipe Kamar : $tipe<br>";
    echo "Durasi Menginap : $durasi<br>";

    if($tipe == "superior"){
        $superior = 850000;
        echo "Harga : $superior<br>";
        $hasil = $superior * $durasi;
        echo "Biaya : $hasil<br>";
        if($hasil >= 1700000 && $hasil <= 2500000){
            $diskon = 15/100 * $hasil;
            $bayar = $hasil - $diskon;
            echo "Anda Mendapat Diskon 15%<br>";
            echo "Diskon : $diskon<br>";
            echo "Total Bayar : $bayar<br>";
        }else if ($hasil >= 2500000){
            $diskon = 25/100 * $hasil;
            $bayar = $hasil - $diskon;
            echo "Anda Mendapat Diskon 25%<br>";
            echo "Diskon : $diskon<br>";
            echo "Total Bayar : $bayar<br>";
        }else{
            echo "Anda Tidak Mendapat Diskon<br>";
            echo "Diskon : 0<br>";
            echo "Total Bayar : $hasil<br>";
        }
    }

    else if($tipe == "deluxe"){
        $deluxe = 890000;
        echo "Harga : $deluxe<br>";
        $hasil = $deluxe * $durasi;
        echo "Biaya : $hasil<br>";
        if($hasil >= 1700000 && $hasil <= 2500000){
            $diskon = 15/100 * $hasil;
            $bayar = $hasil - $diskon;
            echo "Anda Mendapat Diskon 15%<br>";
            echo "Diskon : $diskon<br>";
            echo "Total Bayar : $bayar<br>";
        }else if ($hasil >= 2500000){
            $diskon = 25/100 * $hasil;
            $bayar = $hasil - $diskon;
            echo "Anda Mendapat Diskon 25%<br>";
            echo "Diskon : $diskon<br>";
            echo "Total Bayar : $bayar<br>";
        }else{
            echo "Anda Tidak Mendapat Diskon<br>";
            echo "Diskon : 0<br>";
            echo "Total Bayar : $hasil<br>";
        }
    }

    else if($tipe == "juniorsuite"){
        $junior = 1400000;
        echo "Harga : $junior<br>";
        $hasil = $junior * $durasi;
        echo "Biaya : $hasil<br>";
        if($hasil >= 1700000 && $hasil <= 2500000){
            $diskon = 15/100 * $hasil;
            $bayar = $hasil - $diskon;
            echo "Anda Mendapat Diskon 15%<br>";
            echo "Diskon : $diskon<br>";
            echo "Total Bayar : $bayar<br>";
        }else if ($hasil >= 2500000){
            $diskon = 25/100 * $hasil;
            $bayar = $hasil - $diskon;
            echo "Anda Mendapat Diskon 25%<br>";
            echo "Diskon : $diskon<br>";
            echo "Total Bayar : $bayar<br>";
        }else{
            echo "Anda Tidak Mendapat Diskon<br>";
            echo "Diskon : 0<br>";
            echo "Total Bayar : $hasil<br>";
        }
    }
    else{
        echo "Pilih Terlebih Dahulu<br>";
    }
}
?>