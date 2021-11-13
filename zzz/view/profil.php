<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
    <?php
    include ('../layouts/css.php');
    ?>
</head>
<body>
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

    <div class="container pt=5">
        <h1>Profil Anda</h1>
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
    </div>
</body>
</html>