<?PHP
    require_once("../config.php");
    $parameter = $_GET['user_name'];
    //tangkap inputan user
    $user_name = $_POST['user_name'];
    $nama = $_POST['nama'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $alamat = $_POST['alamat'];
    $no_hp = $_POST['no_hp'];
    $email = $_POST['email'];
    
    // sipakan query
    $query = "UPDATE pelanggan set user_name='$user_name', nama='$nama', jenis_kelamin='$jenis_kelamin',tgl_lahir='$tgl_lahir', alamat='$alamat', no_hp='$no_hp', email='$email' where user_name = $parameter;";
    
    // jalankan query

    // if (!empty()) {
    //     # code...
    // } 
    if ($query= mysqli_query($koneksi,$query)) {
        header('location: ../index.php?status=success');
    }else {
        header('location: ../index.php?status=error');
    }
?>