<center>
<table>
<?php 

if(isset($_POST["kirim"])){
    $bendahara= @$_POST['bendahara'];
    $pekerja= @$_POST['pekerja'];
    $jk=@$_POST['jk'];
    $tanggal=@$_POST['tanggal'];
    $jabatan=@$_POST['jabatan'];
    $pendidikan=@$_POST['pendidikan'];
    $lembur=@$_POST['lembur'];
    $potongan=@$_POST['potongan'];

    echo "<tr>
    <td><h2><i>Gaji Pokok</i></h2></td>
    <td></td>
    <td></td>
    <td></td>
    </tr>";
    echo "<tr>
    <td></td>
    <td></td>
    <td></td>
    <td>Tanggal : $tanggal</td>
    </tr>";
    echo "<tr>
    <td>Nama Karyawan</td>
    <td>:</td>
    <td>$pekerja</td>
    <td></td>
    </tr>";
    echo "<tr>
    <td>Jenis Kelamin</td>
    <td>:</td>
    <td>$jk</td>
    <td></td>
    </tr>";
    echo "<tr>
    <td>Pendidikan Terakhir</td>
    <td>:</td>
    <td>$pendidikan</td>
    <td></td>
    </tr>";
    echo "<tr>
    <td>Jabatan</td>
    <td>:</td>
    <td>$jabatan</td>
    <td></td>
    </tr>";
    
    if ($jabatan == "direktur"){
        $gaji = 10000000;
        echo "<tr>
        <td>Gaji</td>
        <td>:</td>
        <td>$gaji</td>
        <td></td>
        </tr>";
        echo "<tr>
        <td><h2><i>Tunjangan</i></h2></td>
        <td></td>
        <td></td>
        <td></td>
        </tr>";
        if ($pendidikan == "s1"){
            $tunjangan = 1500000;
            echo "<tr>
            <td>Tunjangan Pendidikan</td>
            <td>:</td>
            <td>$tunjangan</td>
            <td></td>
            </tr>";
            $wktlmbr = $lembur * 25000;
            echo "<tr>
            <td>Vakasi Lembur</td>
            <td>:</td>
            <td>$wktlmbr</td>
            <td></td>
            </tr>";
            echo "<tr>
            <td><h2><i>Potongan</i></h2></td>
            <td></td>
            <td></td>
            <td></td>
            </tr>";
            if ($potongan >= 0){
                $total2 = $gaji + $tunjangan + $wktlmbr - $potongan ;
                echo "<tr>
                <td>Potongan</td>
                <td>:</td>
                <td>$potongan</td>
                <td></td>
                </tr>";
                echo "<tr>
                <td><h2><i>Total Gaji</i></h2></td>
                <td><h2><i>:</i></h2></td>
                <td><h2><i>$total2</i></h2></td>
                <td></td>
                </tr>";
            }
            else{
                $total = $gaji + $tunjangan + $wktlmbr;
                echo "<tr>
                <td>Potongan</td>
                <td>:</td>
                <td>Rp. 0</td>
                <td></td>
                </tr>";
                echo "<tr>
                <td><h2><i>Total Gaji</i></h2></td>
                <td><h2>:</h2></td>
                <td><h2>$total</h2></td>
                <td></td>
                </tr>";
            }
        }

        else if ($pendidikan == "sma"){
            $tunjangan = 1000000;
            echo "<tr>
            <td>Tunjangan Pendidikan</td>
            <td>:</td>
            <td>$tunjangan</td>
            <td></td>
            </tr>";
            $wktlmbr = $lembur * 25000;
            echo "<tr>
            <td>Vakasi Lembur</td>
            <td>:</td>
            <td>$wktlmbr</td>
            <td></td>
            </tr>";
            echo "<tr>
            <td><h2><i>Potongan</i></h2></td>
            <td></td>
            <td></td>
            <td></td>
            </tr>";
            if ($potongan >= 0){
                $total2 = $gaji + $tunjangan + $wktlmbr - $potongan ;
                echo "<tr>
                <td>Potongan</td>
                <td>:</td>
                <td>$potongan</td>
                <td></td>
                </tr>";
                echo "<tr>
                <td><h2><i>Total Gaji</i></h2></td>
                <td><h2><i>:</i></h2></td>
                <td><h2><i>$total2</i></h2></td>
                <td></td>
                </tr>";
            }
            else{
                $total = $gaji + $tunjangan + $wktlmbr;
                echo "<tr>
                <td>Potongan</td>
                <td>:</td>
                <td>Rp. 0</td>
                <td></td>
                </tr>";
                echo "<tr>
                <td><h2><i>Total Gaji</i></h2></td>
                <td><h2>:</h2></td>
                <td><h2>$total</h2></td>
                <td></td>
                </tr>";
            }
        }
        else if ($pendidikan == "smp"){
            $tunjangan = 500000;
            echo "<tr>
            <td>Tunjangan Pendidikan</td>
            <td>:</td>
            <td>$tunjangan</td>
            <td></td>
            </tr>";
            $wktlmbr = $lembur * 25000;
            echo "<tr>
            <td>Vakasi Lembur</td>
            <td>:</td>
            <td>$wktlmbr</td>
            <td></td>
            </tr>";
            echo "<tr>
            <td><h2><i>Potongan</i></h2></td>
            <td></td>
            <td></td>
            <td></td>
            </tr>";
            if ($potongan >= 0){
                $total2 = $gaji + $tunjangan + $wktlmbr - $potongan ;
                echo "<tr>
                <td>Potongan</td>
                <td>:</td>
                <td>$potongan</td>
                <td></td>
                </tr>";
                echo "<tr>
                <td><h2><i>Total Gaji</i></h2></td>
                <td><h2><i>:</i></h2></td>
                <td><h2><i>$total2</i></h2></td>
                <td></td>
                </tr>";
            }
            else{
                $total = $gaji + $tunjangan + $wktlmbr;
                echo "<tr>
                <td>Potongan</td>
                <td>:</td>
                <td>Rp. 0</td>
                <td></td>
                </tr>";
                echo "<tr>
                <td><h2><i>Total Gaji</i></h2></td>
                <td><h2>:</h2></td>
                <td><h2>$total</h2></td>
                <td></td>
                </tr>";
            }
        }
        else if ($pendidikan == "sd"){
            $tunjangan = 200000;
            echo "<tr>
            <td>Tunjangan Pendidikan</td>
            <td>:</td>
            <td>$tunjangan</td>
            <td></td>
            </tr>";
            $wktlmbr = $lembur * 25000;
            echo "<tr>
            <td>Vakasi Lembur</td>
            <td>:</td>
            <td>$wktlmbr</td>
            <td></td>
            </tr>";
            echo "<tr>
            <td><h2><i>Potongan</i></h2></td>
            <td></td>
            <td></td>
            <td></td>
            </tr>";
            if ($potongan >= 0){
                $total2 = $gaji + $tunjangan + $wktlmbr - $potongan ;
                echo "<tr>
                <td>Potongan</td>
                <td>:</td>
                <td>$potongan</td>
                <td></td>
                </tr>";
                echo "<tr>
                <td><h2><i>Total Gaji</i></h2></td>
                <td><h2><i>:</i></h2></td>
                <td><h2><i>$total2</i></h2></td>
                <td></td>
                </tr>";
            }
            else{
                $total = $gaji + $tunjangan + $wktlmbr;
                echo "<tr>
                <td>Potongan</td>
                <td>:</td>
                <td>Rp. 0</td>
                <td></td>
                </tr>";
                echo "<tr>
                <td><h2><i>Total Gaji</i></h2></td>
                <td><h2>:</h2></td>
                <td><h2>$total</h2></td>
                <td></td>
                </tr>";
            }
        }
    }



    else if ($jabatan == "manager"){
        $gaji = 7500000;
        echo "<tr>
        <td>Gaji</td>
        <td>:</td>
        <td>$gaji</td>
        <td></td>
        </tr>";
        echo "<tr>
        <td><h2><i>Tunjangan</i></h2></td>
        <td></td>
        <td></td>
        <td></td>
        </tr>";
        if ($pendidikan == "s1"){
            $tunjangan = 1500000;
            echo "<tr>
            <td>Tunjangan Pendidikan</td>
            <td>:</td>
            <td>$tunjangan</td>
            <td></td>
            </tr>";
            $wktlmbr = $lembur * 25000;
            echo "<tr>
            <td>Vakasi Lembur</td>
            <td>:</td>
            <td>$wktlmbr</td>
            <td></td>
            </tr>";
            echo "<tr>
            <td><h2><i>Potongan</i></h2></td>
            <td></td>
            <td></td>
            <td></td>
            </tr>";
            if ($potongan >= 0){
                $total2 = $gaji + $tunjangan + $wktlmbr - $potongan ;
                echo "<tr>
                <td>Potongan</td>
                <td>:</td>
                <td>$potongan</td>
                <td></td>
                </tr>";
                echo "<tr>
                <td><h2><i>Total Gaji</i></h2></td>
                <td><h2><i>:</i></h2></td>
                <td><h2><i>$total2</i></h2></td>
                <td></td>
                </tr>";
            }
            else{
                $total = $gaji + $tunjangan + $wktlmbr;
                echo "<tr>
                <td>Potongan</td>
                <td>:</td>
                <td>Rp. 0</td>
                <td></td>
                </tr>";
                echo "<tr>
                <td><h2><i>Total Gaji</i></h2></td>
                <td><h2>:</h2></td>
                <td><h2>$total</h2></td>
                <td></td>
                </tr>";
            }
        }

        else if ($pendidikan == "sma"){
            $tunjangan = 1000000;
            echo "<tr>
            <td>Tunjangan Pendidikan</td>
            <td>:</td>
            <td>$tunjangan</td>
            <td></td>
            </tr>";
            $wktlmbr = $lembur * 25000;
            echo "<tr>
            <td>Vakasi Lembur</td>
            <td>:</td>
            <td>$wktlmbr</td>
            <td></td>
            </tr>";
            echo "<tr>
            <td><h2><i>Potongan</i></h2></td>
            <td></td>
            <td></td>
            <td></td>
            </tr>";
            if ($potongan >= 0){
                $total2 = $gaji + $tunjangan + $wktlmbr - $potongan ;
                echo "<tr>
                <td>Potongan</td>
                <td>:</td>
                <td>$potongan</td>
                <td></td>
                </tr>";
                echo "<tr>
                <td><h2><i>Total Gaji</i></h2></td>
                <td><h2><i>:</i></h2></td>
                <td><h2><i>$total2</i></h2></td>
                <td></td>
                </tr>";
            }
            else{
                $total = $gaji + $tunjangan + $wktlmbr;
                echo "<tr>
                <td>Potongan</td>
                <td>:</td>
                <td>Rp. 0</td>
                <td></td>
                </tr>";
                echo "<tr>
                <td><h2><i>Total Gaji</i></h2></td>
                <td><h2>:</h2></td>
                <td><h2>$total</h2></td>
                <td></td>
                </tr>";
            }
        }
        else if ($pendidikan == "smp"){
            $tunjangan = 500000;
            echo "<tr>
            <td>Tunjangan Pendidikan</td>
            <td>:</td>
            <td>$tunjangan</td>
            <td></td>
            </tr>";
            $wktlmbr = $lembur * 20000;
            echo "<tr>
            <td>Vakasi Lembur</td>
            <td>:</td>
            <td>$wktlmbr</td>
            <td></td>
            </tr>";
            echo "<tr>
            <td><h2><i>Potongan</i></h2></td>
            <td></td>
            <td></td>
            <td></td>
            </tr>";
            if ($potongan >= 0){
                $total2 = $gaji + $tunjangan + $wktlmbr - $potongan ;
                echo "<tr>
                <td>Potongan</td>
                <td>:</td>
                <td>$potongan</td>
                <td></td>
                </tr>";
                echo "<tr>
                <td><h2><i>Total Gaji</i></h2></td>
                <td><h2><i>:</i></h2></td>
                <td><h2><i>$total2</i></h2></td>
                <td></td>
                </tr>";
            }
            else{
                $total = $gaji + $tunjangan + $wktlmbr;
                echo "<tr>
                <td>Potongan</td>
                <td>:</td>
                <td>Rp. 0</td>
                <td></td>
                </tr>";
                echo "<tr>
                <td><h2><i>Total Gaji</i></h2></td>
                <td><h2>:</h2></td>
                <td><h2>$total</h2></td>
                <td></td>
                </tr>";
            }
        }
        else if ($pendidikan == "sd"){
            $tunjangan = 200000;
            echo "<tr>
            <td>Tunjangan Pendidikan</td>
            <td>:</td>
            <td>$tunjangan</td>
            <td></td>
            </tr>";
            $wktlmbr = $lembur * 25000;
            echo "<tr>
            <td>Vakasi Lembur</td>
            <td>:</td>
            <td>$wktlmbr</td>
            <td></td>
            </tr>";
            echo "<tr>
            <td><h2><i>Potongan</i></h2></td>
            <td></td>
            <td></td>
            <td></td>
            </tr>";
            if ($potongan >= 0){
                $total2 = $gaji + $tunjangan + $wktlmbr - $potongan ;
                echo "<tr>
                <td>Potongan</td>
                <td>:</td>
                <td>$potongan</td>
                <td></td>
                </tr>";
                echo "<tr>
                <td><h2><i>Total Gaji</i></h2></td>
                <td><h2><i>:</i></h2></td>
                <td><h2><i>$total2</i></h2></td>
                <td></td>
                </tr>";
            }
            else{
                $total = $gaji + $tunjangan + $wktlmbr;
                echo "<tr>
                <td>Potongan</td>
                <td>:</td>
                <td>Rp. 0</td>
                <td></td>
                </tr>";
                echo "<tr>
                <td><h2><i>Total Gaji</i></h2></td>
                <td><h2>:</h2></td>
                <td><h2>$total</h2></td>
                <td></td>
                </tr>";
            }
        }
    }



    else if ($jabatan == "karyawan"){
        $gaji = 5000000;
        echo "<tr>
        <td>Gaji</td>
        <td>:</td>
        <td>$gaji</td>
        <td></td>
        </tr>";
        echo "<tr>
        <td><h2><i>Tunjangan</i></h2></td>
        <td></td>
        <td></td>
        <td></td>
        </tr>";
        if ($pendidikan == "s1"){
            $tunjangan = 1500000;
            echo "<tr>
            <td>Tunjangan Pendidikan</td>
            <td>:</td>
            <td>$tunjangan</td>
            <td></td>
            </tr>";
            $wktlmbr = $lembur * 25000;
            echo "<tr>
            <td>Vakasi Lembur</td>
            <td>:</td>
            <td>$wktlmbr</td>
            <td></td>
            </tr>";
            echo "<tr>
            <td><h2><i>Potongan</i></h2></td>
            <td></td>
            <td></td>
            <td></td>
            </tr>";
            if ($potongan >= 0){
                $total2 = $gaji + $tunjangan + $wktlmbr - $potongan ;
                echo "<tr>
                <td>Potongan</td>
                <td>:</td>
                <td>$potongan</td>
                <td></td>
                </tr>";
                echo "<tr>
                <td><h2><i>Total Gaji</i></h2></td>
                <td><h2><i>:</i></h2></td>
                <td><h2><i>$total2</i></h2></td>
                <td></td>
                </tr>";
            }
            else{
                $total = $gaji + $tunjangan + $wktlmbr;
                echo "<tr>
                <td>Potongan</td>
                <td>:</td>
                <td>Rp. 0</td>
                <td></td>
                </tr>";
                echo "<tr>
                <td><h2><i>Total Gaji</i></h2></td>
                <td><h2>:</h2></td>
                <td><h2>$total</h2></td>
                <td></td>
                </tr>";
            }
        }

        else if ($pendidikan == "sma"){
            $tunjangan = 1000000;
            echo "<tr>
            <td>Tunjangan Pendidikan</td>
            <td>:</td>
            <td>$tunjangan</td>
            <td></td>
            </tr>";
            $wktlmbr = $lembur * 25000;
            echo "<tr>
            <td>Vakasi Lembur</td>
            <td>:</td>
            <td>$wktlmbr</td>
            <td></td>
            </tr>";
            echo "<tr>
            <td><h2><i>Potongan</i></h2></td>
            <td></td>
            <td></td>
            <td></td>
            </tr>";
            if ($potongan >= 0){
                $total2 = $gaji + $tunjangan + $wktlmbr - $potongan ;
                echo "<tr>
                <td>Potongan</td>
                <td>:</td>
                <td>$potongan</td>
                <td></td>
                </tr>";
                echo "<tr>
                <td><h2><i>Total Gaji</i></h2></td>
                <td><h2><i>:</i></h2></td>
                <td><h2><i>$total2</i></h2></td>
                <td></td>
                </tr>";
            }
            else{
                $total = $gaji + $tunjangan + $wktlmbr;
                echo "<tr>
                <td>Potongan</td>
                <td>:</td>
                <td>Rp. 0</td>
                <td></td>
                </tr>";
                echo "<tr>
                <td><h2><i>Total Gaji</i></h2></td>
                <td><h2>:</h2></td>
                <td><h2>$total</h2></td>
                <td></td>
                </tr>";
            }
        }
        else if ($pendidikan == "smp"){
            $tunjangan = 500000;
            echo "<tr>
            <td>Tunjangan Pendidikan</td>
            <td>:</td>
            <td>$tunjangan</td>
            <td></td>
            </tr>";
            $wktlmbr = $lembur * 25000;
            echo "<tr>
            <td>Vakasi Lembur</td>
            <td>:</td>
            <td>$wktlmbr</td>
            <td></td>
            </tr>";
            echo "<tr>
            <td><h2><i>Potongan</i></h2></td>
            <td></td>
            <td></td>
            <td></td>
            </tr>";
            if ($potongan >= 0){
                $total2 = $gaji + $tunjangan + $wktlmbr - $potongan ;
                echo "<tr>
                <td>Potongan</td>
                <td>:</td>
                <td>$potongan</td>
                <td></td>
                </tr>";
                echo "<tr>
                <td><h2><i>Total Gaji</i></h2></td>
                <td><h2><i>:</i></h2></td>
                <td><h2><i>$total2</i></h2></td>
                <td></td>
                </tr>";
            }
            else{
                $total = $gaji + $tunjangan + $wktlmbr;
                echo "<tr>
                <td>Potongan</td>
                <td>:</td>
                <td>Rp. 0</td>
                <td></td>
                </tr>";
                echo "<tr>
                <td><h2><i>Total Gaji</i></h2></td>
                <td><h2>:</h2></td>
                <td><h2>$total</h2></td>
                <td></td>
                </tr>";
            }
        }
        else if ($pendidikan == "sd"){
            $tunjangan = 200000;
            echo "<tr>
            <td>Tunjangan Pendidikan</td>
            <td>:</td>
            <td>$tunjangan</td>
            <td></td>
            </tr>";
            $wktlmbr = $lembur * 25000;
            echo "<tr>
            <td>Vakasi Lembur</td>
            <td>:</td>
            <td>$wktlmbr</td>
            <td></td>
            </tr>";
            echo "<tr>
            <td><h2><i>Potongan</i></h2></td>
            <td></td>
            <td></td>
            <td></td>
            </tr>";
            if ($potongan >= 0){
                $total2 = $gaji + $tunjangan + $wktlmbr - $potongan ;
                echo "<tr>
                <td>Potongan</td>
                <td>:</td>
                <td>$potongan</td>
                <td></td>
                </tr>";
                echo "<tr>
                <td><h2><i>Total Gaji</i></h2></td>
                <td><h2><i>:</i></h2></td>
                <td><h2><i>$total2</i></h2></td>
                <td></td>
                </tr>";
            }
            else{
                $total = $gaji + $tunjangan + $wktlmbr;
                echo "<tr>
                <td>Potongan</td>
                <td>:</td>
                <td>Rp. 0</td>
                <td></td>
                </tr>";
                echo "<tr>
                <td><h2><i>Total Gaji</i></h2></td>
                <td><h2>:</h2></td>
                <td><h2>$total</h2></td>
                <td></td>
                </tr>";
            }
        }
    }
    else if ($jabatan == "ob"){
        $gaji = 2500000;
        echo "<tr>
        <td>Gaji</td>
        <td>:</td>
        <td>$gaji</td>
        <td></td>
        </tr>";
        echo "<tr>
        <td><h2><i>Tunjangan</i></h2></td>
        <td></td>
        <td></td>
        <td></td>
        </tr>";
        if ($pendidikan == "s1"){
            $tunjangan = 1500000;
            echo "<tr>
            <td>Tunjangan Pendidikan</td>
            <td>:</td>
            <td>$tunjangan</td>
            <td></td>
            </tr>";
            $wktlmbr = $lembur * 25000;
            echo "<tr>
            <td>Vakasi Lembur</td>
            <td>:</td>
            <td>$wktlmbr</td>
            <td></td>
            </tr>";
            echo "<tr>
            <td><h2><i>Potongan</i></h2></td>
            <td></td>
            <td></td>
            <td></td>
            </tr>";
            if ($potongan >= 0){
                $total2 = $gaji + $tunjangan + $wktlmbr - $potongan ;
                echo "<tr>
                <td>Potongan</td>
                <td>:</td>
                <td>$potongan</td>
                <td></td>
                </tr>";
                echo "<tr>
                <td><h2><i>Total Gaji</i></h2></td>
                <td><h2><i>:</i></h2></td>
                <td><h2><i>$total2</i></h2></td>
                <td></td>
                </tr>";
            }
            else{
                $total = $gaji + $tunjangan + $wktlmbr;
                echo "<tr>
                <td>Potongan</td>
                <td>:</td>
                <td>Rp. 0</td>
                <td></td>
                </tr>";
                echo "<tr>
                <td><h2><i>Total Gaji</i></h2></td>
                <td><h2>:</h2></td>
                <td><h2>$total</h2></td>
                <td></td>
                </tr>";
            }
        }

        else if ($pendidikan == "sma"){
            $tunjangan = 1000000;
            echo "<tr>
            <td>Tunjangan Pendidikan</td>
            <td>:</td>
            <td>$tunjangan</td>
            <td></td>
            </tr>";
            $wktlmbr = $lembur * 25000;
            echo "<tr>
            <td>Vakasi Lembur</td>
            <td>:</td>
            <td>$wktlmbr</td>
            <td></td>
            </tr>";
            echo "<tr>
            <td><h2><i>Potongan</i></h2></td>
            <td></td>
            <td></td>
            <td></td>
            </tr>";
            if ($potongan >= 0){
                $total2 = $gaji + $tunjangan + $wktlmbr - $potongan ;
                echo "<tr>
                <td>Potongan</td>
                <td>:</td>
                <td>$potongan</td>
                <td></td>
                </tr>";
                echo "<tr>
                <td><h2><i>Total Gaji</i></h2></td>
                <td><h2><i>:</i></h2></td>
                <td><h2><i>$total2</i></h2></td>
                <td></td>
                </tr>";
            }
            else{
                $total = $gaji + $tunjangan + $wktlmbr;
                echo "<tr>
                <td>Potongan</td>
                <td>:</td>
                <td>Rp. 0</td>
                <td></td>
                </tr>";
                echo "<tr>
                <td><h2><i>Total Gaji</i></h2></td>
                <td><h2>:</h2></td>
                <td><h2>$total</h2></td>
                <td></td>
                </tr>";
            }
        }
        else if ($pendidikan == "smp"){
            $tunjangan = 500000;
            echo "<tr>
            <td>Tunjangan Pendidikan</td>
            <td>:</td>
            <td>$tunjangan</td>
            <td></td>
            </tr>";
            $wktlmbr = $lembur * 25000;
            echo "<tr>
            <td>Vakasi Lembur</td>
            <td>:</td>
            <td>$wktlmbr</td>
            <td></td>
            </tr>";
            echo "<tr>
            <td><h2><i>Potongan</i></h2></td>
            <td></td>
            <td></td>
            <td></td>
            </tr>";
            if ($potongan >= 0){
                $total2 = $gaji + $tunjangan + $wktlmbr - $potongan ;
                echo "<tr>
                <td>Potongan</td>
                <td>:</td>
                <td>$potongan</td>
                <td></td>
                </tr>";
                echo "<tr>
                <td><h2><i>Total Gaji</i></h2></td>
                <td><h2><i>:</i></h2></td>
                <td><h2><i>$total2</i></h2></td>
                <td></td>
                </tr>";
            }
            else{
                $total = $gaji + $tunjangan + $wktlmbr;
                echo "<tr>
                <td>Potongan</td>
                <td>:</td>
                <td>Rp. 0</td>
                <td></td>
                </tr>";
                echo "<tr>
                <td><h2><i>Total Gaji</i></h2></td>
                <td><h2>:</h2></td>
                <td><h2>$total</h2></td>
                <td></td>
                </tr>";
            }
        }
        else if ($pendidikan == "sd"){
            $tunjangan = 200000;
            echo "<tr>
            <td>Tunjangan Pendidikan</td>
            <td>:</td>
            <td>$tunjangan</td>
            <td></td>
            </tr>";
            $wktlmbr = $lembur * 25000;
            echo "<tr>
            <td>Vakasi Lembur</td>
            <td>:</td>
            <td>$wktlmbr</td>
            <td></td>
            </tr>";
            echo "<tr>
            <td><h2><i>Potongan</i></h2></td>
            <td></td>
            <td></td>
            <td></td>
            </tr>";
            if ($potongan >= 0){
                $total2 = $gaji + $tunjangan + $wktlmbr - $potongan ;
                echo "<tr>
                <td>Potongan</td>
                <td>:</td>
                <td>$potongan</td>
                <td></td>
                </tr>";
                echo "<tr>
                <td><h2><i>Total Gaji</i></h2></td>
                <td><h2><i>:</i></h2></td>
                <td><h2><i>$total2</i></h2></td>
                <td></td>
                </tr>";
            }
            else{
                $total = $gaji + $tunjangan + $wktlmbr;
                echo "<tr>
                <td>Potongan</td>
                <td>:</td>
                <td>Rp. 0</td>
                <td></td>
                </tr>";
                echo "<tr>
                <td><h2><i>Total Gaji</i></h2></td>
                <td><h2>:</h2></td>
                <td><h2>$total</h2></td>
                <td></td>
                </tr>";
            }
        }
    }
    echo "<tr>
    <td></td>
    <td></td>
    <td></td>
    <td>Bendahara : $bendahara</td>
    </tr>";
}
?>
</table>
</center>