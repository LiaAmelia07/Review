<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hotel</title>
</head>
<body>
<h2>HOTEL JJXVRBY</h2>
    <form action = "hasil.php" method = "POST">
        <table>
            <tr>
                <td>Nama Tamu</td>
                <td>:</td>
                <td><input type = "text" name = "tamu"></td>
            </tr>
            <tr>
                <td>No Identitas</td>
                <td>:</td>
                <td><input type = "number" name = "identitas"></td>
            </tr>
            <tr>
                <td>Tanggal Menginap</td>
                <td>:</td>
                <td><input type = "date" name = "tanggal"></td>
            </tr>
            <tr>
                <td>Tipe Kamar</td>
                <td>:</td>
                <td><select name = "tipe" value = "tipekamar">
                <option value = ""></option>
                <option value = "superior">Superior</option>
                <option value = "deluxe">Deluxe</option>
                <option value = "juniorsuite">Junior Suite</option>
                </select></td>
            </tr>
            <tr>
                <td>Durasi Menginap</td>
                <td>:</td>
                <td><input type = "number" name = "durasi"></td>
            </tr>
            <tr>
            <td></td>
            <td></td>
            <td><input type = "submit" name = "mulai" value = "Mulai"></td>
            </tr>
        </table>
    </form>
</body>
</html>