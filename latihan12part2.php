<h2 align="center"><b>BIODATA</b></h2>
<table border="1" align="center">
        <tr bgcolor="FF00FF">
    <?php
    if (isset($_POST['submit'])){
        $nis=$_POST['nis'];
        $nama=$_POST['nama'];
        $jr=$_POST['jr'];
        $tmpt=$_POST['tmpt'];
        $tgl=$_POST['tgl'];
        $bln=$_POST['bln'];
        $thn=$_POST['thn'];
        $jk=$_POST['jk'];
        $alamat=$_POST['alamat'];
        $agama=$_POST['agama'];
        $pendidikan=$_POST['pendidikan'];
        $status=$_POST['status'];
        $hobi=$_POST['hobi'];
        $citacita=$_POST['citacita'];

        echo "<tr>";
        echo "<td>NIS</td>";
        echo "<td>Nama Lengkap</td>";
        echo "<td>Jurusan</td>";
        echo "<td>Tempat Lahir</td>";
        echo "<td>Tanggal Bulan Lahir</td>";
        echo "<td>Jenis Kelamin</td>";
        echo "<td>Agama</td>";
        echo "<td>Pendidikan Terakhir</td>";
        echo "<td>Status</td>";
        echo "<td>Hobi</td>";
        echo "<td>Cita-cita</td>";
        echo "<td>Alamat</td>";
        echo "</tr>";
    
    echo "<tr>";
    echo "<td>$nis</td>";
    echo "<td>$nama</td>";
    echo "<td>$jr</td>";
    echo "<td>$tmpt</td>";
    echo "<td>$tgl $bln $thn </td>";
    echo "<td>$jk</td>";
    echo "<td>$agama</td>";
    echo "<td>$pendidikan</td>";
    echo "<td>$status</td>";
    echo "<td>$hobi</td>";
    echo "<td>$citacita</td>";
    echo "<td>$alamat</td>";
    echo "</tr>";
    }   
?>
</table>
    