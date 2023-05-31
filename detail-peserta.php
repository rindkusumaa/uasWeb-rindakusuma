<?php
    session_start();
    include 'koneksi.php';
   
    $peserta = mysqli_query($conn, "SELECT * FROM tb_pendaftaran WHERE id_pendaftaran = '".$_GET['id']."' ");
    $p = mysqli_fetch_object($peserta);
   
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pendaftaran Online | Administator</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https: //fonts.googleapis.com/css2?family= Pasir hisap :wght@600 & display=swap" rel="stylesheet">
</head>
<body>
        <header>
            <h1><a href="beranda.php">Admin ni Boss Senggol dongg..</a></h1>
            <ul>
                <li><a href="beranda.php">Beranda</a></li>
                <li><a href="data-peserta.php">Data Peserta</a></li>
                <li><a href="tampilan.php">Kembali</a></li>
            </ul>
            
        </header>

        <section class="content">
            <h2>Detail peserta</h2>
            <div class="box">
            <table class="tb_data" border="0">
                <tr>
                    <td>Kode Pendaftaran</td>
                    <td>:</td>
                    <td><?php echo $p->id_pendaftaran ?></td>
                </tr>
                <tr>
                    <td>Tahun Ajaran</td>
                    <td>:</td>
                    <td><?php echo $p->th_ajaran ?></td>
                </tr>
                <tr>
                    <td>Jurusan</td>
                    <td>:</td>
                    <td><?php echo $p->jurusan ?></td>
                </tr>
                <tr>
                    <td>Nama lengkap</td>
                    <td>:</td>
                    <td><?php echo $p->nm_peserta ?></td>
                </tr>
                <tr>
                    <td>Tempat, Tanggal Lahir</td>
                    <td>:</td>
                    <td><?php echo $p->tmp_lahir.', '.$p->tgl_lahir ?></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                    <td><?php echo $p->jk ?></td>
                </tr>
                <tr>
                    <td>Agama</td>
                    <td>:</td>
                    <td><?php echo $p->agama ?></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td><?php echo $p->alamat_peserta ?></td>
                </tr>
            </table>
                    </div>
                </section>

</body>
</html>