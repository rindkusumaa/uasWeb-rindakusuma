<?php

    session_start();
    include 'koneksi.php';
    
    if(isset($_POST['submit'])){
        $getmaxId = mysqli_query($conn, "SELECT MAX(RIGHT(id_pendaftaran, 5)) AS id FROM tb_pendaftaran");
        $d = mysqli_fetch_object($getmaxId);
        $generated = 'P' .date('Y').sprintf("%05s", $d->id + 1);
        
        $insert = mysqli_query($conn, "INSERT INTO  tb_pendaftaran VALUES (
            '".$generated."',
            '".date('Y-m-d')."',
            '".$_POST['th_ajaran']."',
            '".$_POST['jurusan']."',
            '".$_POST['nm']."',
            '".$_POST['tmp_lahir']."',
            '".$_POST['tgl_lahir']."',
            '".$_POST['jk']."',
            '".$_POST['agama']."',
            '".$_POST['alamat']."'

            )");

        if($insert){
            echo '<script>window.location="berhasil.php?id='.$generated.'"</script>';
        }else{
            echo 'huft' .mysqli_error($conn);
        }    
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pendaftaran Online</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https: //fonts.googleapis.com/css2?family= Pasir hisap :wght@600 & display=swap" rel="stylesheet">
<body>

        <header>
            <nav>
                 <ul>
                    <li><a href="tampilan.php">Beranda</a></li>
                    <li><a href="data-peserta.php">Data Peserta</a></li>
                    <li><a href="keluar.php">Keluar</a></li>
                </ul>
            </nav>
        </header>
    <section class="box-formulir">
        <h2>Formulir Pendaftaran Mahasiswa Baru</h2>

        <form action="" method="post">
            <div class="box">
                <table border="0" class="tb_form">
                    <tr>
                        <td>Tahun Ajaran</td>
                        <td>:</td>
                        <td>
                            <input type="text" name="th_ajaran" class="input-control">
                        </td>
                    </tr>
                    <tr>
                        <td>Jurusan</td>
                        <td>:</td>
                        <td>
                            <select class="input-control" name="jurusan">
                                <option value="">---Pilih---</option>
                                <option value="Teknik Komputer Kontrol">Teknik Komputer Kontrol</option>
                                <option value="Teknik Listrik">Teknik Listrik</option>
                                <option value="Teknologi Informasi">Teknologi Informasi</option>
                                <option value="Teknologi Rekayasa Otomotif">Teknologi Rekayasa Otomotif</option>
                                <option value="Perkeretaapian">Perkeretaapian</option>
                                <option value="Teknik Pembentukan Logam ">Teknik Pembentukan Logam </option>
                            </select>
                        </td>
                    </tr>
                </table>
            </div>

            <h3>Data Diri</h3>
            <div class="box">
                <table border="0" class="tb_form">
                    <tr>
                        <td>Nama Lengkap</td>
                        <td>:</td>
                        <td>
                            <input type="text" name="nm" class="input-control">
                        </td>
                    </tr>
                    <tr>
                        <td>Tempat lahir</td>
                        <td>:</td>
                        <td>
                            <input type="text" name="tmp_lahir" class="input-control">
                        </td>
                    </tr>
                    <tr>
                        <td>Tanggal Lahir</td>
                        <td>:</td>
                        <td>
                            <input type="date" name="tgl_lahir" class="input-control">
                        </td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td>:</td>
                        <td>
                            <input type="radio" name="jk" class="input-control" value="Laki-laki">Laki-laki &nbsp; &nbsp; &nbsp; 
                            <input type="radio" name="jk" class="input-control" value="Perempuan">&nbsp; &nbsp;Perempuan 
                        </td>
                    </tr>
                    <tr>
                        <td>Agama</td>
                        <td>:</td>
                        <td>
                            <select class="input-control" name="agama">
                                <option value="">---Pilih---</option>
                                   <option value="Islam">Islam</option>
                                   <option value="Kristen">Kristen</option>
                                   <option value="Hindu">Hindu</option>
                                   <option value="Buddha">Buddha</option>
                                   <option value="Atheis">Atheis</option>
                
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Alamat Lengkap</td>
                        <td>:</td>
                        <td>
                            <textarea class="input-control" name="alamat"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>
                            <input type="submit" name="submit" value="Daftar Sekarang" class="btn-daftar">
                        </td>
                    </tr>
                </table>
            </div>



</section>    

</body>
</head>
</html>