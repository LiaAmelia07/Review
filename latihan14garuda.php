<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<center>
<h2>Program Penggajihan<br><br>PT/ GARUDA KELINCI AKUR</h2>
        <form action = "latihan14garudapart2.php" method = "POST">
            <table>
                <tr>
                    <td>Nama Bendahara</td>
                    <td>:</td>
                    <td><input type = "text" name="bendahara"></td>
                </tr>
                <tr>
                    <td>Nama Pekerja</td>
                    <td>:</td>
                    <td><input type = "text" name = "pekerja"></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                    <td><input type = "radio" name = "jk" value = "Laki-Laki">Laki-Laki
                    <input type = "radio" name = "jk" value = "Perempuan">Perempuan</td>
                </tr>
                <tr>
                    <td>Tanggal Gaji</td>
                    <td>:</td>
                    <td><input type = "date" name = "tanggal"></td>
                </tr>
                <tr>
                    <td>Jabatan</td>
                    <td>:</td>
                    <td><select name = "jabatan" value = "jabatan">
                    <option value = "">--Pilih Jabatan--</option>
                    <option value = "direktur">Direktur</option>
                    <option value = "manager">Manager</option>
                    <option value = "karyawan">Karyawan</option>
                    <option value = "ob">OB</option>
                    </select> </td>
                </tr>
                <tr>
                    <td>Pendidikan Terakhir</td>
                    <td>:</td>
                    <td><select name = "pendidikan" value= "pendidikan">
                    <option value = "">--Pendidikan Terakhir--</option>
                    <option value = "sd">SD</option>
                    <option value = "smp">SMP</option>
                    <option value = "sma">SMA</option>
                    <option value = "s1">S1</option>
                    </select> </td>
                </tr>
                <tr>
                    <td>Lembur</td>
                    <td>:</td>
                    <td><input type = "text" name="lembur"> / Hari</td>
                </tr>
                <tr>
                    <td>potongan</td>
                    <td>:</td>
                    <td><input type = "text" name="potongan"></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type = "submit" value = "Kirim" name = "kirim"></td>
                </tr>
            </table>
</form> 
</center>          
</body>
</html>
