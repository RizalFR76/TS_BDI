<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesanan Anda</title>
    <?PHP
    include('../layouts/css.php');
    ?>
</head>
<body>

<?PHP
require_once("config.php");
$user_name = $_GET['user_name'];
$pelanggan = 'SELECT id_pelanggan FROM pelanggan WHERE user_name="coba1"';
$parameter = $_GET['user_name'];
$query = "SELECT id_pelanggan FROM pelanggan WHERE user_name= '$parameter'";
if ($query = mysqli_query($koneksi,$query)) {
    $row = $query -> fetch_assoc();
    // print_r($row);
}else {
    echo "ERROR : mysqli error $query";
}
$id_pelanggan=$row['id_pelanggan'];
// echo $id_pelanggan;
$query = "SELECT id_barang from peminjaman where id_pelanggan='$id_pelanggan' ";
$query = mysqli_query($koneksi,$query);
$row = $query -> fetch_assoc();
// print_r($row).'<hr>';

$z="SELECT pelanggan.nama as nama,
barang.nama as nama_barang, barang.jenis as jenis, peminjaman.tgl_peminjaman as untuk_tanggal, peminjaman.selesai_peminjaman as sampai_tanggal from pelanggan join peminjaman on pelanggan.id_pelanggan = peminjaman.id_pelanggan join barang on peminjaman.id_barang = barang.id_barang where peminjaman.id_pelanggan='$id_pelanggan'";
$z = mysqli_query($koneksi,$z);
$b = mysqli_fetch_all($z);
// print_r($b);
// echo'<hr>';
?>
<?PHP
    include('../layouts/navbar.php');
    include('../layouts/gelombang.php');
?>
<div class="text-center pb-3">
    <h3>
        Terima Kasih
    </h3>
    <P>Kami akan mengonfirmasi pesanan Anda melalui pesan</P>
    <a href="login.php" class="btn btn-primary">Pesan Lagi</a>
</div>

<table class= 'table table-bordered table striped ' style="width: 100%;">
    <tr>
        <th>nama</th>
        <th>nama barang</th>
        <th>jenis</th>
        <th>tanggal peminjaman</th>
        <th>tanggal pengembalian</th>
    </tr>
    <?php
    $s=0;
    $t=0;
    foreach ( $b as $c ) {
        echo "
        <tr>
        ";
        $t=0;
        foreach ( $c as $key => $value ) {
            echo "
            <td>".$value."</td>
            ";
            // echo $t;
            // $t++;
        }
        // echo$s;
        // $s++;
    }
?>
<?PHP
$m = count($b);
// echo $m;
?>

</table>
<?PHP
    include('../layouts/footer.php');
    include('../layouts/js.php');
?>
</body>
</html>