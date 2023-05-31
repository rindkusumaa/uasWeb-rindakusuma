<?php 
if (isset($_POST['edit'])){
    include("koneksi.php");

    $get = $_POST['id'];
    $th_ajaran = $_POST['th_ajaran'];
    $jurusan=$_POST['jurusan'];
    $nm = $_POST['nama'];
    $tmp_lahir = $_POST['tmp_lahir'];
    $tgl_lahir=$_POST['tgl_lahir'];
    $jk = $_POST['jk'];
    $agama = $_POST['agama'];
    $alamat = $_POST['alamat'];

    $query = "UPDATE tb_pendaftaran SET th_ajaran='$th_ajaran', jurusan= '$jurusan', nama= '$nm',tmp_lahir='$tmp_lahir',tgl_lahir='$tgl_lahir',jk='$jk', agama='$agama', alamat='$alamat' where id ='$get'";
    $result = mysqli_query($conn, $query);

    if (!$result){
        die("Query gagal dijalankan: ".mysqli_errno($conn)." - ".mysqli_error($conn));
    }
}

header("location:data-peserta.php");
?>