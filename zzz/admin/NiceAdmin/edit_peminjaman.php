<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    include ('../layouts/css.php');
    include('../layouts/js.php');
    ?>
</head>
<body>
<?PHP
    include ('../layouts/navbar.php');
    include ('../layouts/sidebar.php');
?>
<?PHP
    require_once("config.php");
    $parameter = $_GET['id_peminjaman'];
    $query = "SELECT * FROM peminjaman WHERE id_peminjaman= '$parameter'";
    echo"<hr>";
    // echo"$parameter";
    if ($query = mysqli_query($koneksi,$query)) {
        $row = $query -> fetch_assoc();
        // print_r($row);
    }else {
        echo "ERROR : mysqli error $query";
    }
?>
<div class="container pt-5">
    <div class="card">
        <div class="card-header text-center">
            <h1>Peminjaman Barang</h1>
        </div>
        <div class="card-body">
            <form action="proses/update_peminjaman.php?id_peminjaman=<?php echo $row['id_peminjaman']?>" method="post">
                <div class="form-group">
                    <label for="">ID Pelanggan </label>
                    <input type="text" name="id_pelanggan" id="id_pelanggan" class="form-control" placeholder="masukan id_pelanggan" required value="<?php echo $row['id_pelanggan'] ?>">
                </div>
                <div class="form-group">
                    <label for="">id_barang</label>
                    <input type="text" name="id_barang" id="id_barang" class="form-control" placeholder="masukan id_barang" required value="<?php echo $row['id_barang'] ?>">
                </div>
                <div class="form-group">
                    <label for="">Tanggal Peminjaman</label>
                    <input type="date" name="tgl_peminjaman" id="tgl_peminjaman" class="form-control" placeholder="masukan tgl_peminjaman" required value="<?php echo $row['tgl_peminjaman'] ?>">
                </div>
                <div class="form-group">
                    <label for="">Tanggal Pengembalian </label>
                    <input type="date" name="selesai_peminjaman" id="selesai_peminjaman" class="form-control" placeholder="masukan selesai_peminjaman" required value="<?php echo $row['selesai_peminjaman'] ?>">
                </div>
                <hr>
                <div class="form-group text-center">
                    <a href="profil.php?user_name=<?php echo $row['user_name']?>" class="btn btn-md btn-danger">batal</a>
                    <button type="submit" class="btn btn-md btn-success">simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php
include('../layouts/js.php');
include('../layouts/footer.php');
?>
</body>
</html>