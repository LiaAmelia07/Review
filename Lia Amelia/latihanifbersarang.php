<?php 
    $jenis = "Makanan";
    $nama = "Mie goreng";
    $jumlah = 1;
        if($jenis == "Makanan" || $jenis == "makanan"){
            if ($nama == "Mie Goreng" || $nama == "mie goreng" || $nama == "Mie goreng"){
                $harga = 10000;
                $bayar = $jumlah * $harga;
                $diskon = $bayar * 20/100;
                $total = $bayar - ($bayar * (20/100));
                echo "<br/>";
                echo "+++ Restoran Apa Aja +++<br/>";
                echo "====================<br/>";
                echo "Jenis Pesanan : $jenis <br/>";
                echo "Nama Pesanan : $nama <br/>";
                echo "Jumlah : $jumlah <br/>";
                echo "Total : $bayar <br/>";
            if($bayar >= 50000){
                echo "Diskon 20% : $diskon<br/>";
                echo "Total Bayar : $total<br/>";
                echo "====================<br/>";
                echo "===== Terima Kasih=====";
            }else{
                echo "Diskon 20% : 0<br/>";
                echo "Total Bayar : $bayar<br/>";
                echo "====================<br/>";
                echo "===== Terima Kasih=====";
            }
        }
        elseif ($nama == "nasi goreng" || $nama == "Nasi Goreng"){
            $harga = 15000;
            $bayar = $jumlah * $harga;
            $diskon = $bayar * 20/100;
            $total = $bayar - ($bayar * (20/100));
            echo "<br/>";
            echo "+++ Restoran Apa Aja +++<br/>";
            echo "====================<br/>";
            echo "Jenis Pesanan : $jenis <br/>";
            echo "Nama Pesanan : $nama <br/>";
            echo "Jumlah : $jumlah <br/>";
            echo "Total : $bayar <br/>";
        if($bayar >= 50000){
            echo "Diskon 20% : $diskon<br/>";
            echo "Total Bayar : $total<br/>";
            echo "====================<br/>";
            echo "===== Terima Kasih=====";
        }else{
            echo "Diskon 20% : 0<br/>";
            echo "Total Bayar : $bayar<br/>";
            echo "====================<br/>";
            echo "===== Terima Kasih=====";
        }
    }
        else if ($nama == "ayam goreng" || $nama == "Ayam Goreng"){
            $harga = 20000;
            $bayar = $jumlah * $harga;
            $diskon = $bayar * 20/100;
            $total = $bayar - ($bayar * (20/100));
            echo "<br/>";
            echo "+++ Restoran Apa Aja +++<br/>";
            echo "====================<br/>";
            echo "Jenis Pesanan : $jenis <br/>";
            echo "Nama Pesanan : $nama <br/>";
            echo "Jumlah : $jumlah <br/>";
            echo "Total : $bayar <br/>";
        if($bayar >= 50000){
            echo "Diskon 20% : $diskon<br/>";
            echo "Total Bayar : $total<br/>";
            echo "====================<br/>";
            echo "===== Terima Kasih=====";
        }else{
            echo "Diskon 20% : 0<br/>";
            echo "Total Bayar : $bayar<br/>";
            echo "====================<br/>";
            echo "===== Terima Kasih=====";
        }
    }
}


    else if($jenis == "Minuman" || $jenis == "minuman"){
        if ($nama == "air mineral" || $nama == "Air Mineral"){
            $harga = 8000;
            $bayar = $jumlah * $harga;
            $diskon = $bayar * 20/100;
            $total = $bayar - ($bayar * (20/100));
            echo "<br/>";
            echo "+++ Restoran Apa Aja +++<br/>";
            echo "====================<br/>";
            echo "Jenis Pesanan : $jenis <br/>";
            echo "Nama Pesanan : $nama <br/>";
            echo "Jumlah : $jumlah <br/>";
            echo "Total : $bayar <br/>";
        if($bayar >= 50000){
            echo "Diskon 20% : $diskon<br/>";
            echo "Total Bayar : $total<br/>";
            echo "====================<br/>";
            echo "===== Terima Kasih=====";
        }else{
            echo "Diskon 20% : 0<br/>";
            echo "Total Bayar : $bayar<br/>";
            echo "====================<br/>";
            echo "===== Terima Kasih=====";
        }
    }
        elseif ($nama == "Jus" || $nama == "jus"){
            $harga = 10000;
            $bayar = $jumlah * $harga;
            $diskon = $bayar * 20/100;
            $total = $bayar - ($bayar * (20/100));
            echo "<br/>";
            echo "+++ Restoran Apa Aja +++<br/>";
            echo "====================<br/>";
            echo "Jenis Pesanan : $jenis <br/>";
            echo "Nama Pesanan : $nama <br/>";
            echo "Jumlah : $jumlah <br/>";
            echo "Total : $bayar <br/>";
        if($bayar >= 50000){
            echo "Diskon 20% : $diskon<br/>";
            echo "Total Bayar : $total<br/>";
            echo "====================<br/>";
            echo "===== Terima Kasih=====";
        }else{
            echo "Diskon 20% : 0<br/>";
            echo "Total Bayar : $bayar<br/>";
            echo "====================<br/>";
            echo "===== Terima Kasih=====";
        }
    }
        else if ($nama == "Kopi" || $nama == "kopi"){
            $harga = 12000;
            $bayar = $jumlah * $harga;
            $diskon = $bayar * 20/100;
            $total = $bayar - ($bayar * (20/100));
            echo "<br/>";
            echo "+++ Restoran Apa Aja +++<br/>";
            echo "====================<br/>";
            echo "Jenis Pesanan : $jenis <br/>";
            echo "Nama Pesanan : $nama <br/>";
            echo "Jumlah : $jumlah <br/>";
            echo "Total : $bayar <br/>";
            if($bayar >= 50000){
            echo "Diskon 20% : $diskon<br/>";
            echo "Total Bayar : $total<br/>";
            echo "====================<br/>";
            echo "===== Terima Kasih=====";
            }else{
            echo "Diskon 20% : 0<br/>";
            echo "Total Bayar : $bayar<br/>";
            echo "====================<br/>";
            echo "===== Terima Kasih=====";
        }
    }
}
?>