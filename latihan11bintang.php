<html> 
    <head> 
        <title>Program Bintang</title> 
    </head> 
    <body> 
    <form method="post" action=""> 
    <td>Masukan Bintang <input type="text" name="nama" value= ""/></td>
    <td></td>
    <td><input type="submit" name="submit" value="Submit" />
    </form> 

    <?php
    if(isset($_POST['submit'])) {
        $nama= $_POST['nama'];
    echo "<h4>Program Segitiga Bintang Siku-Siku </h4></br>";
 
    for ($i = 1; $i <= $nama; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echO " * ";
        }
        echO "</br>";
        }
    }
    ?>
    </body> 
    </html>