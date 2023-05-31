<?php

include("koneksi.php");


if( !isset($_GET['id']) ){
    header('Location: data-peserta.php');
}


$id = $_GET['id'];


$peserta = mysqli_query($conn, "SELECT * FROM tb_pendaftaran WHERE id_pendaftaran = '".$_GET['id']."' ");
    $p = mysqli_fetch_object($peserta);


if( mysqli_num_rows($peserta) < 1 ){
    die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html>
<head>
    <title>Formulir Edit</title>
</head>
    <form action="proses-edit.php" method="POST">

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
                            <input type="radio" name="jk" class="input-control" value="Laki-laki">Laki-laki &nbsp; &nbsp;
                            <input type="radio" name="jk" class="input-control" value="Perempuan">Perempuan
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
                            <input type="submit" name="submit" value="Simpan" class="btn-daftar">
                        </td>
                    </tr>
                </table>
            </div>



</section>    

</body>
</head>
</html>

    </form>

    </body>
</html>