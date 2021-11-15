<?PHP
    require_once("../config.php");
    $parameter = $_GET['id_peminjaman'];
    //tangkap inputan user
    // $id_peminjaman = $_POST['id_peminjaman'];
    $id_pelanggan = $_POST['id_pelanggan'];
    $id_barang = $_POST['id_barang'];
    $tgl_peminjaman = $_POST['tgl_peminjaman'];
    $selesai_peminjaman = $_POST['selesai_peminjaman'];
    $user = $parameter;
    
    // sipakan query
    $query = "UPDATE peminjaman set id_pelanggan='$id_pelanggan', id_barang='$id_barang', tgl_peminjaman='$tgl_peminjaman',selesai_peminjaman='$selesai_peminjaman' where id_peminjaman = '$user';";
    
    // jalankan query

    // if (!empty()) {
    //     # code...
    // } 
    if ($query= mysqli_query($koneksi,$query)) {
        header('location: ../peminjaman.php?edit=success&id_peminjaman='.$user);
    }else {
        header('location: ../peminjaman.php?edit=error&id_peminjaman='.$user);
    }
?>