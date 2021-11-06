<center>
<table>  
<?php 
if(isset($_POST["hitung"])){
    $nama= @$_POST['nama'];
    $kelas= @$_POST['kelas'];
    $tanggal=@$_POST['tanggal'];
    $tugas1=@$_POST['tugas1'];
    $tugas2=@$_POST['tugas2'];
    $tugas3=@$_POST['tugas3'];
    $uts=@$_POST['uts'];
    $uas=@$_POST['uas'];

    echo "<tr>
    <td colspan=4><hr></td>
    </tr>";
    
    echo "<tr>
    <td colspan=4><h2><i>Hasil</i></h2></td>
    </tr>";

    echo "<tr>
    <td>Nama Lengkap</td>
    <td>:</td>
    <td>$nama</td></tr>";

    echo "<tr>
    <td>Kelas</td>
    <td>:</td>
    <td>$kelas</td></tr>";

    echo "<tr>
    <td>Tanggal Penilaian</td>
    <td>:</td>
    <td>$tanggal</td></tr>";
    if($tugas1 >= 75 && $tugas1 <= 100){
    echo "<tr>
    <td>Nilai Tugas 1</td>
    <td>:</td>
    <td>$tugas1</td></tr>";
    }else if($tugas1 < 75 && $tugas1 >= 0){
    echo "<tr>
    <td>Nilai Tugas 1</td>
    <td>:</td>
    <td>$tugas1 !--Perbaiki Nilai Nya--!</td></tr>";
    }else{
        echo "<tr>
        <td>Nilai Tugas 1</td>
        <td>:</td>
        <td>Nilai Tidak Boleh Dari 100 dan Tidak Boleh Kurang Dari 0 </td></tr>";
    }

    if($tugas2 >= 75 && $tugas2 <= 100){
    echo "<tr>
    <td>Nilai Tugas 2</td>
    <td>:</td>
    <td>$tugas2</td></tr>";
    }else if($tugas2 < 75 && $tugas2 >= 0){
        echo "<tr>
        <td>Nilai Tugas 2</td>
        <td>:</td>
        <td>$tugas2 !--Perbaiki Nilai Nya--!</td></tr>";
    }else{
        echo "<tr>
        <td>Nilai Tugas 2</td>
        <td>:</td>
        <td>Nilai Tidak Boleh Dari 100 dan Tidak Boleh Kurang Dari 0 </td></tr>";
    }

    if($tugas3 >= 75 && $tugas3 <= 100){
    echo "<tr>
    <td>Nilai Tugas 3</td>
    <td>:</td>
    <td>$tugas3</td></tr>";
    }else if($tugas3 < 75 && $tugas3 >= 0){
        echo "<tr>
        <td>Nilai Tugas 3</td>
        <td>:</td>
        <td>$tugas3 !--Perbaiki Nilai Nya--!</td></tr>";
    }else{
        echo "<tr>
        <td>Nilai Tugas 3</td>
        <td>:</td>
        <td>Nilai Tidak Boleh Dari 100 dan Tidak Boleh Kurang Dari 0 </td></tr>";
    }

    if($uts >= 75 && $uts <= 100){
    echo "<tr>
    <td>Nilai UTS</td>
    <td>:</td>
    <td>$uts</td></tr>";
    }else if($uts < 75 && $uts >= 0){
        echo "<tr>
        <td>Nilai UTS</td>
        <td>:</td>
        <td>$uts !--Perbaiki Nilai Nya--!</td></tr>";
    }else{
        echo "<tr>
        <td>Nilai Tugas UTS</td>
        <td>:</td>
        <td>Nilai Tidak Boleh Dari 100 dan Tidak Boleh Kurang Dari 0 </td></tr>";
    }

    if($uas >= 75 && $uas <= 100){
        echo "<tr>
        <td>Nilai UAS</td>
        <td>:</td>
        <td>$uas</td></tr>";
        $nilaiakhir = $tugas1 + $tugas2 + $tugas3 + $uts + $uas;
        $ratarata1 = $nilaiakhir / 5;
        echo "<tr>
        <td>Nilai Akhir</td>
        <td>:</td>
        <td>$nilaiakhir</td></tr>";

        echo "<tr>
        <td>Rata Rata</td>
        <td>:</td>
        <td>$ratarata1</td></tr>";
        if($ratarata1 >= 75){
            if($ratarata1 >= 90 && $ratarata1 <= 100){
                echo "<tr>
                <td>Grade</td>
                <td>:</td>
                <td>A</td></tr>";
            }elseif($ratarata1 >= 80 && $ratarata1 <= 89) {
                echo "<tr>
                <td>Grade</td>
                <td>:</td>
                <td>B</td></tr>";
            }elseif($ratarata1 >= 70 && $ratarata1 <= 79) {
                echo "<tr>
                <td>Grade</td>
                <td>:</td>
                <td>C</td></tr>";
            }elseif($ratarata1 >= 60 && $ratarata1 <= 69) {
                echo "<tr>
                <td>Grade</td>
                <td>:</td>
                <td>D</td></tr>";
            }elseif($ratarata1 <= 59 && $ratarata1 >= 0) {
                echo "<tr>
                <td>Grade</td>
                <td>:</td>
                <td>E</td></tr>";
            }
            echo "<tr>
            <td><h2>Anda Lulus</h2></td>
            <td></td>
            <td></td></tr>";
        }
        else{
            if($ratarata1 >= 90 && $ratarata1 <= 100){
                echo "<tr>
                <td>Grade</td>
                <td>:</td>
                <td>A</td></tr>";
            }elseif($ratarata1 >= 80 && $ratarata1 <= 89) {
                echo "<tr>
                <td>Grade</td>
                <td>:</td>
                <td>B</td></tr>";
            }elseif($ratarata1 >= 70 && $ratarata1 <= 79) {
                echo "<tr>
                <td>Grade</td>
                <td>:</td>
                <td>C</td></tr>";
            }elseif($ratarata1 >= 60 && $ratarata1 <= 69) {
                echo "<tr>
                <td>Grade</td>
                <td>:</td>
                <td>D</td></tr>";
            }elseif($ratarata1 <= 59 && $ratarata1 >= 0) {
                echo "<tr>
                <td>Grade</td>
                <td>:</td>
                <td>E</td></tr>";
            }
            echo "<tr>
            <td><h2>Anda Tidak Lulus</h2></td>
            <td></td>
            <td></td></tr>";
        }
    }else if($uas < 75 && $uas >= 0){
        echo "<tr>
        <td>Nilai UAS</td>
        <td>:</td>
        <td>$uas !--Perbaiki Nilai Nya--!</td></tr>";
        $nilaiakhir2 = $tugas1 + $tugas2 + $tugas3 + $uts + $uas;
        $ratarata2 = $nilaiakhir2 / 5;
        echo "<tr>
        <td>Nilai Akhir</td>
        <td>:</td>
        <td>$nilaiakhir2</td></tr>";
        echo "<tr>
        <td>Rata Rata Nilai</td>
        <td>:</td>
        <td>$ratarata2</td></tr>";
            if($ratarata2 >= 75){
                if($ratarata2 >= 90 && $ratarata2 <= 100){
                    echo "<tr>
                    <td>Grade</td>
                    <td>:</td>
                    <td>A</td></tr>";
                }elseif($ratarata2 >= 80 && $ratarata2 <= 89) {
                    echo "<tr>
                    <td>Grade</td>
                    <td>:</td>
                    <td>B</td></tr>";
                }elseif($ratarata2 >= 70 && $ratarata2 <= 79) {
                    echo "<tr>
                    <td>Grade</td>
                    <td>:</td>
                    <td>C</td></tr>";
                }elseif($ratarata2 >= 60 && $ratarata2 <= 69) {
                    echo "<tr>
                    <td>Grade</td>
                    <td>:</td>
                    <td>D</td></tr>";
                }elseif($ratarata2 <= 59 && $ratarata2 >= 0) {
                    echo "<tr>
                    <td>Grade</td>
                    <td>:</td>
                    <td>E</td></tr>";
                }
                echo "<tr>
                <td><h2>Anda Tidak Lulus</h2></td>
                <td></td>
                <td></td></tr>";
            }
        
    }else{
        echo "<tr>
        <td>Nilai Tugas UAS</td>
        <td>:</td>
        <td>Nilai Tidak Boleh Dari 100 dan Tidak Boleh Kurang Dari 0 </td></tr>";
    }

}
?>
</table>
</center>