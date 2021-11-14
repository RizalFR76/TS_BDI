<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
    <?php
    include ('../layouts/css.php');
    include('../layouts/js.php');
    ?>
</head>
<body>
<?PHP
    include ('../layouts/navbar.php');
    include ('../layouts/gelombang.php');
?>
    <?php
    require_once('config.php');
    $user_name = $_GET['user_name'];
    $query = "SELECT * FROM pelanggan WHERE user_name= '$user_name'";
        if ($query = mysqli_query($koneksi,$query)){
            $row = $query->fetch_assoc();
            // print_r($row);
        }else{
            echo "Errorr";
        }
    ?>

    <!-- Array 2 DImensi -->
    <?PHP
    // $a = "SELECT nama from barang";
    // $a = mysqli_query($koneksi,$a);
    // echo'<br>';
    // $b = mysqli_fetch_all($a);
    // print_r($b);
    // echo'<br>';
    // foreach ( $b as $c ) {
    //     foreach ( $c as $key => $value ) {
    //         echo "$value <br>";
    //     }
    // }
    ?>

    <div class="container pt=5">
        <h1>Profil Anda</h1>
        <a href="awal.php" class="btn btn-danger">Log out</a>
        <p>Pastikan data Anda sudah sesuai</p>
        <div class="text-end">
            <a href='edit_profil.php?user_name=<?php echo $row['user_name']?>' class="btn btn-warning ">Edit</a>
        </div>
        <table class="table table-bordered table-striped" style="width: 100%;">
            <tr>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Tanggal Lahir</th>
                <th>Alamat </th>
                <th>No HP</th>
                <th>Email </th>
            </tr>
            <tr>
                <td><?php echo $row['nama'] ?></td>
                <td><?php echo $row['jenis_kelamin'] ?></td>
                <td><?php echo $row['tgl_lahir'] ?></td>
                <td><?php echo $row['alamat'] ?></td>
                <td><?php echo $row['no_hp'] ?></td>
                <td><?php echo $row['email'] ?></td>
            </tr>
        </table>

        <?php
        include('barang.php');
        ?>

        <div class=>
            <div class="card">
                <div class="card-header">
                <h3 class="card-title text-center">Masukan Pesanan Anda</h3>
                </div>
                <form action="../proses/pesanan.php?user_name=<?PHP echo $user_name?>" method="post" class="container card-body" enctype="multipart/form-data">
                                
                <div class="form-group">
                    <label for="exampleInputEmail1">Pesananan</label>
                    <?PHP
                        $a = "SELECT nama from barang";
                        $a = mysqli_query($koneksi,$a);
                        $b = mysqli_fetch_all($a);
                        foreach ( $b as $c ) {
                            foreach ( $c as $key => $value ) {
                                echo "
                                <div class=".'form-check'.">
                                    <input class=".'form-check-input'." type=".'checkbox'." id=".'gridCheck'.$value." name=".'pesanan[]'." value=".$value." />
                                    <label class=".'form-check-label'." for=".'gridCheck'.$value."> $value <br> </label>
                                </div>
                                ";
                                
                            }
                        }
                    ?>
                </div>
                <div class="form-row ">
                    <div class="form-group col-md-5">
                        <label for="">Pengambilan barang</label>
                        <input type="date" name="tgl_peminjaman" id="tgl_peminjaman" class="form-control" placeholder="masukan tanggal pengambilan" required />
                    </div>

                    <div class="form-group col-md-5">
                        <label for="">Pengembalian barang</label>
                        <input type="date" name="selesai_peminjaman" id="selesai_peminjaman" class="form-control" placeholder="masukan tanggal pengembalian" required />
                    </div>
                </div>
                <hr>
                <button type="submit" class="btn btn-primary" name="tampil">Kirim</button>
                </form>
            </div>
        </div>
    </div>
    <?PHP
    include('../layouts/js.php');
    include('../layouts/footer.php');
    ?>
</body>
</html>