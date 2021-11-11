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
                    <a href='edit.php?id_pelanggan=".$data['id_pelanggan']."' class= 'btn btn-sm btn-info'>edit</a>
                    <a href='#' onclick='validasi(".$data['id_pelanggan'].")' class= 'btn btn-sm btn-danger'>hapus</a>
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
    <script>
        function validasi(param) {
            const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
                confirmButton: 'btn btn-success',
                cancelButton: 'btn btn-danger'
            },
            buttonsStyling: false
            })

            Swal.fire({
            title: 'Yakin?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire(
                'Deleted!',
                'Your file has been deleted.',
                'success'
                )
                var delayInMilliseconds = 500; //1 second
                setTimeout(function() {
                    //your code to be executed after 1 second
                    window.location.href = "proses/delete.php?id_pelanggan="+param;
                }, delayInMilliseconds);
            } else {
                swalWithBootstrapButtons.fire(
                'Yah kok ga jadi',
                'untung kamu labil',
                'error'
                )
            }
            })
        }
    </script>
</body>
</html>
