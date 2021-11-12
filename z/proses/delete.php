<?PHP
    require_once("../config.php");
    $id_pelanggan = $_GET['id_pelanggan'];
    //tangkap inputan user
    

    // sipakan query
    $query = "DELETE from pelanggan where id_pelanggan = '$id_pelanggan'";
    
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