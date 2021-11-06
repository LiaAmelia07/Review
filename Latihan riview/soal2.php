<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Review 2</title>
</head>
<body>
    <center>
        <h2>Penghitungan Berat Badan</h2>
            <table>
                <form action = "soal2part2.php" method = "POST">
                    <tr>
                    <td>Masukan Nama</td>
                    <td>:</td>
                    <td><input type = "text" name = "nama"></td>
                    </tr>
                    <tr>
                    <td>Masukan Tinggi</td>
                    <td>:</td>
                    <td><input type = "text" name = "tinggi"></td>
                    </tr>
                    <tr>
                    <td>Masukan Berat Badan Sekarang</td>
                    <td>:</td>
                    <td><input type = "text" name = "bb"></td>
                    </tr>
                    <tr>
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                    <td><input type = "radio" name = "jk" value = "Laki-Laki">Laki-Laki
                    <input type = "radio" name = "jk" value = "Perempuan">Perempuan</td>
                    </tr>
                    <tr>
                    <td></td>
                    <td></td>
                    <td><input type = "submit" value = "Hitung" name = "hitung">
                    <input type = "reset" value = "Reset" name = "reset"></td>
                </tr>
                </form>
</body>
</html>