<?PHP
    require_once("../config.php");

    //tangkap inputan user
    $nama = $_POST['nama'];
    $jenis = $_POST['jenis'];
    $jumlah = $_POST['jumlah'];
    $merk = $_POST['merk'];
    // sipakan query
    $query = "INSERT INTO pelanggan (nama, jenis,jumlah, merk) VALUES ('$nama','$jenis','$jumlah');";
    
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