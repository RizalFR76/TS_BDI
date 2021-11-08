<?php
    // menangkap data
    $data = $_POST;
    // print_r($data);
    // transformasi data
    $nama = $_POST['nama'];
    $user = $_POST['user'];
    $nim = $_POST['nim'];
    $email = $_POST['email'];
    $kewarganegaraan= $_POST['kewarganegaraan'];
    $kelamin = $_POST['kelamin'];
    $hobi = $_POST['hobi'];
    $foto = $_FILES['foto']['name'];
    $tmp = $_FILES['foto']['tmp_name'];

    $foto_baru = date('dmYHis').$foto;
    $path = "image/".$foto_baru;
    $link_foto = $path;

    if(!move_uploaded_file($tmp, $path)){
        # code ..
        echo "upload foto gagal";
    }

    include('hasil.php');
?>