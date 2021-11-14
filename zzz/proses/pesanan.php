<?PHP
require_once('../view/config.php');
$user_name = $_GET['user_name'];
$parameter = $_GET['user_name'];
$query = "SELECT * FROM pelanggan WHERE user_name= '$parameter'";
// echo"$parameter";
if ($query = mysqli_query($koneksi,$query)) {
    $pelanggan = $query -> fetch_assoc();
    // print_r($row);
}else {
    echo "ERROR : mysqli error $query";
}
//tangkap inputan user
$tgl_peminjaman = $_POST['tgl_peminjaman'];
$selesai_peminjaman = $_POST['selesai_peminjaman'];
$id_pelanggan = $pelanggan['id_pelanggan'];
$user = $pelanggan['user_name'];
// print_r($pelanggan);

// if(isset($_POST['tampil'])){
//     foreach($_POST['pesanan'] as $item){
//         $barang = $item;
//         $qu = "SELECT * FROM barang WHERE nama = '$barang'";
//         if ($qu = mysqli_query($koneksi,$qu)) {
//             $row = $qu -> fetch_assoc();
            
//         }else {
//         echo "ERROR : mysqli error $qu";
//         }
//         $id_barang = $row['id_barang'];
//         $masukan = "INSERT INTO peminjaman (id_pelanggan,id_barang,tgl_peminjaman,selesai_peminjaman) VALUES ('$id_pelanggan','$id_barang','$tgl_peminjaman','$selesai_peminjaman');";
//         $masukan= mysqli_query($koneksi,$masukan);
// }}
$a = $_POST['pesanan'];
// print_r($a);
$x = count($a);
$y = $x-1;
// echo $y;
// echo $item;

for ($i=0; $i < $y; $i++) { 
    $barang = $a[$i];
    // echo $barang;
    $qu = "SELECT * FROM barang WHERE nama = '$barang'";
        if ($qu = mysqli_query($koneksi,$qu)) {
            $row = $qu -> fetch_assoc();
            
        }else {
        echo "ERROR : mysqli error $qu";
        }
    $id_barang = $row['id_barang'];
    $masukan = "INSERT INTO peminjaman (id_pelanggan,id_barang,tgl_peminjaman,selesai_peminjaman) VALUES ('$id_pelanggan','$id_barang','$tgl_peminjaman','$selesai_peminjaman');";
    $masukan= mysqli_query($koneksi,$masukan);
}
// echo$i;
$barang = $a[$i];
$qu = "SELECT * FROM barang WHERE nama = '$barang'";
$qu = mysqli_query($koneksi,$qu);
$row = $qu -> fetch_assoc();
$id_barang = $row['id_barang'];
$masukan = "INSERT INTO peminjaman (id_pelanggan,id_barang,tgl_peminjaman,selesai_peminjaman) VALUES ('$id_pelanggan','$id_barang','$tgl_peminjaman','$selesai_peminjaman');";
if ($masukan= mysqli_query($koneksi,$masukan)) {
    header('location: ../view/pesanan_anda.php?status=success&user_name='.$user);
}else {
    header('location: ../view/registrasi.php?status=error');
}
?>