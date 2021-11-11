<?PHP
    require_once("../config.php");
    $user_name = $_GET['user_name'];
    //tangkap inputan user
    

    // sipakan query
    $query = "DELETE from pelanggan where user_name = '$user_name'";
    
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