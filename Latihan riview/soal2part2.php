<center>
<table>
<?php 
if(isset($_POST["hitung"])){
    $nama= @$_POST['nama'];
    $tinggi= @$_POST['tinggi'];
    $bb=@$_POST['bb'];
    $jk=@$_POST['jk'];

    echo "<tr>
    <td colspan=4><hr></td>
    </tr>";
    
    echo "<tr>
    <td colspan=4><h2><i>Hasil</i></h2></td>
    </tr>";

    echo "<tr>
    <td>Nama</td>
    <td>:</td>
    <td>$nama</td></tr>";

    if ($jk == "Laki-Laki"){
        echo "<tr>
        <td>Jenis Kelamin</td>
        <td>:</td>
        <td>$jk</td></tr>";
        if ($tinggi >= 0){
            echo "<tr>
            <td>Tinggi</td>
            <td>:</td>
            <td>$tinggi</td></tr>";
        }else{
            echo "<tr>
            <td>Tinggi</td>
            <td>:</td>
            <td>Nilai Tidak Boleh Minus </td></tr>";
        }
        if ($bb >= 0){
            echo "<tr>
            <td>Berat Badan</td>
            <td>:</td>
            <td>$bb kg</td></tr>";
        }else{
            echo "<tr>
            <td>Tinggi</td>
            <td>:</td>
            <td>Nilai Tidak Boleh Minus </td></tr>";
        }
        $ideal = ($tinggi - 100) - (($tinggi - 100) * 10/100);
        echo "<tr>
            <td>Berat Badan Seharusnya</td>
            <td>:</td>
            <td>$ideal kg</td></tr>";
            if ($bb >= $ideal){
            echo "<tr>
            <td>Hasil</td>
            <td>:</td>
            <td>Ideal</td></tr>";
            }else{
                echo "<tr>
                <td>Hasil</td>
                <td>:</td>
                <td>Tidak Ideal</td></tr>";
            }
    }
    else if ($jk == "Perempuan"){
        echo "<tr>
        <td>Jenis Kelamin</td>
        <td>:</td>
        <td>$jk</td></tr>";
        if ($tinggi >= 0){
            echo "<tr>
            <td>Tinggi</td>
            <td>:</td>
            <td>$tinggi</td></tr>";
        }else{
            echo "<tr>
            <td>Tinggi</td>
            <td>:</td>
            <td>Nilai Tidak Boleh Minus </td></tr>";
        }
        if ($bb >= 0){
            echo "<tr>
            <td>Berat Badan</td>
            <td>:</td>
            <td>$bb kg</td></tr>";
        }else{
            echo "<tr>
            <td>Tinggi</td>
            <td>:</td>
            <td>Nilai Tidak Boleh Minus </td></tr>";
        }
        $ideal = ($tinggi - 100) - (($tinggi - 100) * 15/100);
        echo "<tr>
            <td>Berat Badan Seharusnya</td>
            <td>:</td>
            <td>$ideal kg</td></tr>";
            if ($bb >= $ideal){
                echo "<tr>
                <td>Hasil</td>
                <td>:</td>
                <td>Ideal</td></tr>";
                }else{
                    echo "<tr>
                    <td>Hasil</td>
                    <td>:</td>
                    <td>Tidak Ideal</td></tr>";
                }
    }
}
?>
</table>
</center>