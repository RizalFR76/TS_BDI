<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous" />

    <title>Belajar CRUD PHP Native</title>
</head>
<body>

    <?php
    require_once('config.php');
    ?>

    <div class="container pt-5">
        <h2>Halaman Index </h2>
        <?PHP
        $cek = count($_GET);
        if ($cek>0) {
            $status = $_GET['status'];
            if ($status=='success') {
            echo "
            <div class='alert alert-success' role='alert'>
                Data berhasil ditambahkan
            </div>
            ";
            }else  {
            echo "
            <div class='alert alert-danger' role='alert'>
                Data gagal ditambahkan
            </div>
            ";
            }
        }
        ?>
        <div class="text-right">
        <a href="create.php" class='btn btn-md btn-primary'>Tambah data</a>
        <hr>
        </div>
        <table class= 'table table-bordered table striped' style="width: 100%;">
        <tr>
            <th>user_name</th>
            <th>nama</th>
            <th>jenis kelamin</th>
            <th>tanggal lahir</th>
            <th class='text-center col-2' >aksi</th>
        </tr>
        <?php
          $query = 'SELECT * FROM pelanggan';
            if($query= mysqli_query($koneksi,$query)){
            while ($data = mysqli_fetch_array($query)){
                echo "
                <tr>
                <td>".$data['user_name']."</td>
                <td>".$data['nama']."</td>
                <td>".$data['jenis_kelamin']."</td>
                <td>".$data['tgl_lahir']."</td>
                <td>
                    <a href='edit.php?user_name=".$data['user_name']."' class= 'btn btn-sm btn-info'>edit</a>
                    <a href='proses/delete.php?user_name=".$data['user_name']."' class= 'btn btn-sm btn-danger'>hapus</a>
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

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>
