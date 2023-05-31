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
                <li><a href="tampilan.php">Kembali</a></li>
            </ul>
            
        </header>

        <section class="content">
            <h2>Data peserta</h2>
            <div class="box">
                <a href="cetak-peserta.php" target="_blank" class="btn-cetak">Print</a>
                <table class="table" border="1">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>ID Pendaftaran</th>
                            <th>Nama</th>
                            <th>Jenis Kelamin</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $no = 1;
                            $list_peserta = mysqli_query($conn, "SELECT * FROM tb_pendaftaran");
                            while($row = mysqli_fetch_array($list_peserta)){ 
                         ?>
                        <tr>
                            <td><?php echo $no++ ?></th>
                            <td><?php echo $row['id_pendaftaran']?></td>
                            <td><?php echo $row['nm_peserta']?></td>
                            <td><?php echo $row['jk']?></td>
                            <td>
                                <a href="detail-peserta.php?id=<?php echo $row['id_pendaftaran']?>">Detail</a> ||
                                <a href="edit-peserta.php?id=<?php echo $row['id_pendaftaran']?>">Edit</a> ||
                                <a href="hapus-peserta.php?id=<?php echo $row['id_pendaftaran']?>" onclick="return confirm('Yakin ?')">Hapus</a>
                            </td>
                        </tr>    
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </section>

</body>
</html>