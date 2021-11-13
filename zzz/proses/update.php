<?PHP
    require_once("../view/config.php");
    $parameter = $_GET['user_name'];
    //tangkap inputan user
    // $user_name = $_POST['user_name'];
    $nama = $_POST['nama'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $alamat = $_POST['alamat'];
    $no_hp = $_POST['no_hp'];
    $email = $_POST['email'];
    $user = $parameter;
    
    // sipakan query
    $query = "UPDATE pelanggan set nama='$nama', jenis_kelamin='$jenis_kelamin',tgl_lahir='$tgl_lahir', alamat='$alamat', no_hp='$no_hp', email='$email' where user_name = '$user';";
    
    // jalankan query

    // if (!empty()) {
    //     # code...
    // } 
    if ($query= mysqli_query($koneksi,$query)) {
        header('location: ../view/profil.php?status=success&user_name='.$user);
    }else {
        header('location: ../view/profil.php?edit=error&user_name='.$user);
    }
?>