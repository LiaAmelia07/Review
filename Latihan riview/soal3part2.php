<center>
<table>
<?php 

if(isset($_POST["mulai"])){
    $nama = @$_POST['nama'];
    $umur= @$_POST['umur'];
    $status= @$_POST['status'];

    echo "<br>";
    
    echo "<tr>";
    echo "<td>Nama Anda</td>";
    echo "<td>:</td>";
    echo "<td>$nama</td>";
    echo "</tr>";

    echo "<tr>";
    echo "<td>Umur</td>";
    echo "<td>:</td>";
    echo "<td>$umur</td>";
    echo "</tr>";

    echo "<tr>";
    echo "<td>Status Vaksin</td>";
    echo "<td>:</td>";
    echo "<td>$status</td>";
    echo "</tr>";

    if ($umur >= 12 && $umur <=17){
        if ($status == "sudah"){
            echo "<tr>";
            echo "<td></td>";
            echo "<td></td>";
            echo "<td><h2><i>Diizinkan</i></h2></td>";
            echo "</tr>";
        }else if ($status == "belum"){
            echo "<tr>";
            echo "<td></td>";
            echo "<td></td>";
            echo "<td><h2><i>Diizinkan</i></h2></td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td></td>";
            echo "<td></td>";
            echo "<td>Karena anda berada dibawah umur</td>";
            echo "</tr>";
    }
        }
    else if ($umur >= 18 && $umur <= 50){
        if ($status == "sudah"){
            echo "<tr>";
            echo "<td></td>";
            echo "<td></td>";
            echo "<td><h2><i>Diizinkan</i></h2></td>";
            echo "</tr>";
        }else if ($status == "belum"){
            echo "<tr>";
            echo "<td></td>";
            echo "<td></td>";
            echo "<td><h2><i>Tidak Diizinkan</i></h2></td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td></td>";
            echo "<td></td>";
            echo "<td><a href = 'https://pedulilindungi.id'>Vaksin Disini</a></td>";
            echo "</tr>";
        }
    }
        else if ($umur < 12){
            if ($status == "sudah"){
                echo "<tr>";
                echo "<td></td>";
                echo "<td></td>";
                echo "<td><h2><i>Tidak Diizinkan</i></h2></td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td></td>";
                echo "<td></td>";
                echo "<td>Karena Tidak Cukup Umur</td>";
                echo "</tr>";
            }else if ($status == "belum"){
                echo "<tr>";
                echo "<td></td>";
                echo "<td></td>";
                echo "<td><h2><i>Tidak Diizinkan</i></h2></td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td></td>";
                echo "<td></td>";
                echo "<td>Karena Tidak Cukup Umur</td>";
                echo "</tr>";
        }
    }else if ($umur > 50){
        if ($status == "sudah"){
            echo "<tr>";
            echo "<td></td>";
            echo "<td></td>";
            echo "<td><h2><i>Tidak Diizinkan</i></h2></td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td></td>";
            echo "<td></td>";
            echo "<td>Karena Umur Anda Diatas 50 Tahun</td>";
            echo "</tr>";
        }else if ($status == "belum"){
            echo "<tr>";
            echo "<td></td>";
            echo "<td></td>";
            echo "<td><h2><i>Tidak Diizinkan</i></h2></td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td></td>";
            echo "<td></td>";
            echo "<td>Karena Umur Anda Diatas 50 Tahun</td>";
            echo "</tr>";
    }
        }
}
?>
</table>
</center>