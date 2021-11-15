<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - peminjaman</title>
    <?PHP
        include('../layouts/css.php');
    ?>
</head>
<body>
<?PHP
    include('../layouts/navbar.php');
    include('../layouts/sidebar.php');
?>
<?php
    require_once('config.php');
?>
<div class="container pt-5">
    <center>
        <h1>Peminjaman</h1>
    </center>

<table class= 'table table-bordered table striped' style="width: 100%;">
        <tr>
            <th>ID peminjaman</th>
            <th>ID pelanggan</th>
            <th>ID barang</th>
            <th>tanggal peminjaman</th>
            <th>tanggal pengembalian</th>
            <th class='text-center col-2' >aksi</th>
        </tr>
        <?php
          $query = 'SELECT * FROM peminjaman';
            if($query= mysqli_query($koneksi,$query)){
            while ($data = mysqli_fetch_array($query)){
                echo "
                <tr>
                <td>".$data['id_peminjaman']."</td>
                <td>".$data['id_pelanggan']."</td>
                <td>".$data['id_barang']."</td>
                <td>".$data['tgl_peminjaman']."</td>
                <td>".$data['selesai_peminjaman']."</td>
                <td>
                    <a href='edit_peminjaman.php?id_peminjaman=".$data['id_peminjaman']."' class= 'btn btn-sm btn-info'>edit</a>
                    <a href='proses/hapus_peminjaman.php?id_peminjaman=".$data['id_peminjaman']."'  class= 'btn btn-sm btn-danger'>hapus</a>
                </td>
                </tr>
                ";
            }
            }else {
            echo '
            <tr>
                <td colspan=3>data tidak ditemukan</td>
            </tr>
            ';
            }
        ?>
</table>
</div>

<?php
    include('../layouts/footer.php');
    include('../layouts/js.php');
?>
</body>
</html>