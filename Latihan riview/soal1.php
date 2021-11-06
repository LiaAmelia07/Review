<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Review 1</title>
</head>
<body>
    <center>
        <fieldset>
        <h2>Penilaian Akhir</h2>
            <table>
                <form action = "soal1part2.php" method = "POST">
                    <tr>
                    <td>Masukan Nama Lengkap</td>
                    <td>:</td>
                    <td><input type = "text" name = "nama"></td>
                    </tr>
                    <tr>
                    <td>Masukan Kelas</td>
                    <td>:</td>
                    <td><input type = "text" name = "kelas"></td>
                    </tr>
                    <tr>
                    <td>Tanggal Penilaian</td>
                    <td>:</td>
                    <td><input type = "date" name = "tanggal"></td>
                    </tr>
                    <tr>
                    <td>Nilai Tugas 1</td>
                    <td>:</td>
                    <td><input type = "number" name = "tugas1"></td>
                    </tr>
                    <tr>
                    <td>Nilai Tugas 2</td>
                    <td>:</td>
                    <td><input type = "number" name = "tugas2"></td>
                    </tr>
                    <tr>
                    <td>Nilai Tugas 3</td>
                    <td>:</td>
                    <td><input type = "number" name = "tugas3"></td>
                    </tr>
                    <tr>
                    <td>Nilai UTS</td>
                    <td>:</td>
                    <td><input type = "number" name = "uts"></td>
                    </tr>
                    <tr>
                    <td>Nilai UAS</td>
                    <td>:</td>
                    <td><input type = "number" name = "uas"></td>
                    </tr>
                    <tr>
                    <td></td>
                    <td></td>
                    <td><input type = "submit" value = "Hitung" name = "hitung">
                    <input type = "reset" value = "Reset" name = "reset"></td>
                </tr>
                </form>
        </fieldset>
</body>
</html>
