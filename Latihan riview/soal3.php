<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Review 3</title>
</head>
<body>
<center>
<h2>Perizinan Masuk Mall</h2>
<form action = "soal3part2.php" method = "POST">
        <table>
        <tr>
            <td>Masukan Nama</td>
            <td>:</td>
            <td><input type = "text" name = "nama"></td>
            </tr>
            <tr>
            <td>Masukan Umur</td>
            <td>:</td>
            <td><input type = "text" name = "umur"></td>
            </tr>
            <tr>
            <td>Status Vaksin</td>
            <td>:</td>
            <td><select name = "status">
                    <option value = "">--Status Vaksin--</option>
                    <option value = "sudah">Sudah</option>
                    <option value = "belum">Belum</option></select></td>
            </tr>
            <tr>
            <td></td>
            <td></td>
            <td><input type = "submit" name = "mulai" value = "Mulai"></td>
            </tr>
    </form>
</body>
</html>
