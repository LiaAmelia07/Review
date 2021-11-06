<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h2>Form Biodata Diri</h2>
        <form action = "latihan12part2.php" method = "POST">
            <table>
                 <tr>
                    <td>NIS</td>
                    <td>:</td>
                    <td><input type = "text" name="nis"></td>
                </tr>
                <tr>
                    <td>Nama Lengkap</td>
                    <td>:</td>
                    <td><input type = "text" name="nama"></td>
                </tr>
                <tr>
                  <td>Jurusan</td>
                  <td>:</td>
                        <td><input type="radio" name="jr" value="T. Informatika">T. Informmatika
                        <input type="radio" name="jr" value="T. Elektro">T. Elektro
                        <input type="radio" name="jr" value="T. Sipil">T. Sipil
                     </td>
                </tr>
                <tr>
                    <td>Tempat Lahir</td>
                    <td>:</td>
                    <td><input type = "text" name = "tmpt"></td>
                 </tr>
                 <tr>
                    <td>Tanggal Bulan Tahun</td>
                    <td>:</td>
                  <td><select name="tgl">
                  <option name="tgl">Tanggal</option>
                  <option name="tgl">1</option>
                  <option name="tgl">2</option>
                  <option name="tgl">3</option>
                  <option name="tgl">4</option>
                  <option name="tgl">5</option>
                  <option name="tgl">6</option>
                  <option name="tgl">7</option>
                  <option name="tgl">8</option>
                  <option name="tgL">9</option>
                  <option name="tgl">10</option>
                  <option name="tgl">11</option>
                  <option name="tgl">12</option>
                  <option name="tgl">13</option>
                  <option name="tgl">14</option>
                  <option name="tgL">15</option>
                  <option name="tgl">16</option>
                  <option name="tgl">17</option>
                  <option name="tgl">18</option>
                  <option name="tgl">19</option>
                  <option name="tgl">20</option>
                  <option name="tgl">21</option>
                  <option name="tgl">22</option>
                  <option name="tgl">23</option>
                  <option name="tgl">24</option>
                  <option name="tgl">25</option>
                  <option name="tgl">26</option>
                  <option name="tgl">27</option>
                  <option name="tgl">28</option>
                  <option name="tgl">29</option>
                  <option name="tgl">30</option>
                  <option name="tgl">31</option>
                  </select>
               <select name="bln">
                  <option name="bln">Bulan</option>
                  <option name="bln">Januari</option>
                  <option name="bln">Februari</option>
                  <option name="bln">Maret</option>
                  <option name="bln">April</option>
                  <option name="bln">Mei</option>
                  <option name="bln">Juni</option>
                  <option name="bln">Juli</option>
                  <option name="bln">Agustus</option>
                  <option name="bln">September</option>
                  <option name="bln">Oktober</option>
                  <option name="bln">November</option>
                  <option name="bln">Desember</option>
               </select>
               <select name="thn">
                  <option name="thn">Tahun</option>
                  <option name="thn">1995</option>
                  <option name="thn">1996</option>
                  <option name="thn">1997</option>
                  <option name="thn">1998</option>
                  <option name="thn">1999</option>
                  <option name="thn">2000</option>
                  <option name="thn">2001</option>
                  <option name="thn">2002</option>
                  <option name="thn">2003</option>
                  <option name="thn">2004</option>
                  <option name="thn">2005</option>
               </select>
               </td>
                </tr>       
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                    <td><input type = "radio" name = "jk" value = "Laki-Laki">Laki-Laki
                    <input type = "radio" name = "jk" value = "Perempuan">Perempuan</td>
                </tr>
                <tr>
                    <td>Agama</td>
                    <td>:</td>
                    <td><select name = "agama">
                    <option value = "Agama">Agama</option>
                    <option value = "islam">Islam</option>
                    <option value = "kristen">Kristen</option>
                    <option value = "hindu">Hindu</option>
                    <option value = "buddha">Buddha</option>
                    <option value = "konghucu">Konghucu</option>
                    </select> </td>
                </tr>
                <tr>
                    <td>Pendidikan Terakhir</td>
                    <td>:</td>
                    <td><select name = "pendidikan">
                    <option value = "Pendidikan">Pendidikan</option>
                    <option value = "sd">SD</option>
                    <option value = "smp">SMP</option>
                    <option value = "sma">SMA</option>
                    <option value = "smk">SMK</option>
                    <option value = "s1">S1</option>
                    <option value = "s2">S2</option>
                    </select> </td>
                </tr>
                <tr>
                    <td>Status</td>
                    <td>:</td>
                    <td><select name = "status">
                    <option value = "Status">Status</option>
                    <option value = "pelajar">Pelajar</option>
                    <option value = "pegawai">Pegawai</option>
                    <option value = "guru">Guru</option>
                    </select> </td>
                </tr>
                <tr>
                    <td>Hobi</td>
                    <td>:</td>
                    <td><input type = "checkbox" name = "hobi" value = "Main Game">Main Game
                    <input type = "checkbox" name = "hobi" value = "Membaca">Membaca
                    <input type = "checkbox" name = "hobi" value = "Menggambar">Menggambar</td>
                </tr>
                <tr>
                    <td>Cita-cita</td>
                    <td>:</td>
                    <td><select name = "citacita">
                    <option value = "Cita-Cita">Cita-Cita</option>
                    <option value = "pns">PNS</option>
                    <option value = "pilot">Pilot</option>
                    <option value = "guru">Guru</option>
                    <option value = "programmer">Programmer</option>
                    </select> </td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td><textarea name = "alamat"></textarea></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type = "submit" value = "simpan" name = "submit">
                     <input type = "reset" value = "reset" name = "reset"></td>
                </tr>
            </table>
</form>           
</body>
</html>