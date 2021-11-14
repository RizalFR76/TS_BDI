<?PHP
    require_once("../config.php");
    $id_peminjaman = $_GET['id_peminjaman'];
    //tangkap inputan user
    

    // sipakan query
    $query = "DELETE from peminjaman where id_peminjaman = '$id_peminjaman'";
    
    // jalankan query

    // if (!empty()) {
    // } 
    if ($query= mysqli_query($koneksi,$query)) {
        header('location: ../peminjaman.php?status=hapus_success');
    }else {
        header('location: ../peminjaman.php?status=hapus_error');
    }
?>