<?PHP
    require_once("../view/config.php");
    $user_name =$_POST['user_name'];
    $password = $_POST['password'];

    $queryCekUsername = "SELECT user_name FROM pelanggan WHERE user_name LIKE '$user_name' AND `password` = '$password'";
    $cekUsername = mysqli_query($koneksi, $queryCekUsername);
    if (!empty($cekUsername->{'num_rows'})) {
        header('location: ../view/profil.php?status=success&user_name='.$user_name);
        // } elseif ($queryInput = mysqli_query($koneksi, $queryInput)) {
        //         header('location: ../index.php?status=success' . $NIM);
    } else {
        header('location: ../view/login.php?status=user_name_tidak_terdaftar');
    }
?>