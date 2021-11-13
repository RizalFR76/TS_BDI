<?PHP
    require_once("../view/config.php");

    //tangkap inputan user
    $user_name = $_POST['user_name'];
    $nama = $_POST['nama'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $alamat = $_POST['alamat'];
    $no_hp = $_POST['no_hp'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $user = $user_name;
    // sipakan query
    $query = "INSERT INTO pelanggan (user_name, nama, jenis_kelamin,tgl_lahir, alamat, no_hp, email,password) VALUES ('$user_name','$nama','$jenis_kelamin','$tgl_lahir','$alamat','$no_hp','$email','$password');";
    
    // jalankan query

    // if (!empty()) {
    //     # code...
    // } 
    if ($query= mysqli_query($koneksi,$query)) {
        header('location: ../view/profil.php?status=success&user_name='.$user);
    }else {
        header('location: ../view/registrasi.php?status=error');
    }
?>