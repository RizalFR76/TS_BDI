<?PHP
    require_once("../config.php");

    //tangkap inputan user
    $user_name = $_POST['user_name'];
    // $nama = $_POST['nama'];
    // $jenis_kelamin = $_POST['jenis_kelamin'];
    // $tgl_lahir = $_POST['tgl_lahir'];
    // $alamat = $_POST['alamat'];
    // $no_hp = $_POST['no_hp'];
    // $email = $_POST['email'];
    $password = $_POST['password'];
    
    // sipakan query
    // $query = "INSERT INTO pelanggan (user_name, nama, jenis_kelamin,tgl_lahir, alamat, no_hp, email, password) VALUES ('$user_name','$nama','$jenis_kelamin','$tgl_lahir','$alamat','$no_hp','$email',$password);";
    
    // jalankan query 
    // if ($query= mysqli_query($koneksi,$query)) {
    //     header('location: ../1.php?status=success');
    // }else {
    //     header('location: ../1.php?status=error');
    // }
    // $queryCekId = "SELECT NIM FROM pelanggan WHERE user_name LIKE '$user_name'";
    // $cekId = mysqli_query($koneksi, $queryCekId);
    // if (!empty($cekId->{'num_rows'})) {
    //     header('location: ../registrasi.php?status=NIM_sudah_ada');
    // } else
    //     if ($query = mysqli_query($koneksi, $query)) {
    //     header('location: ../login.php?status=success');
    // } else {
    //     # code...
    //     header('location: ../registrasi.php?status=error');
    // }


    $queryCekUsername = "SELECT user_name FROM pelanggan WHERE user_name LIKE '$user_name' AND `password` = '$password'";
    // $queryCekPassword = "SELECT password FROM pelanggan WHERE password LIKE '$user_name'";
    $cekUsername = mysqli_query($koneksi, $queryCekUsername);
    // $cekPassword = mysqli_query($koneksi, $queryCekPassword);

    if (!empty($cekUsername->{'num_rows'})) {
        header('location: ../2.php?status=user_name_terdaftar&user_name=' . $user_name);
        // } elseif ($queryInput = mysqli_query($koneksi, $queryInput)) {
        //         header('location: ../index.php?status=success' . $NIM);
    } else {
        header('location: ../login.php?status=user_name_tidak_terdaftar');
    }
?>