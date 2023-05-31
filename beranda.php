<?php
    session_start();
    include 'koneksi.php';
   
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
            <h1><a href="tampilan.php">Admin ni Boss Senggol dongg..</a></h1>
            <ul>
                <li><a href="tampilan.php">Beranda</a></li>
                <li><a href="data-peserta.php">Data Peserta</a></li>
                <li><a href="keluar.php">Keluar</a></li>
            </ul>
            
        </header>

        <section class="content">
            <h2>Beranda</h2>
            <div class="box">
                <h3><?php echo $_SESSION['nama'] ?>, Selamat datang Di PSB Online.</h3>

            </div>
        </section>

</body>
</html>