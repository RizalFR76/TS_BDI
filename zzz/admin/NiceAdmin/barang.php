<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barang</title>
    <?php
    include ('../layouts/css.php');
    ?>
</head>
<body>
<?php
    include ('../layouts/navbar.php');
    include('../layouts/sidebar.php')
?>
<?php
    require_once('config.php');
?>
<div class="container pt-5">
    <center class="text-center pt-5">
        <h1>Tabel Barang</h1>
    </center>
    
<table class= 'table table-bordered table striped' style="width: 100%;">
    <tr>
    <th>Nama barang</th>
    <th>Jenis barang</th>
    <th>Persedian</th>
    <th>Merk</th>
    <th>Aksi</th>
    </tr>
    <?php
    $query = 'SELECT * FROM barang';
    if($query= mysqli_query($koneksi,$query)){
        while ($data = mysqli_fetch_array($query)){
        echo "
        <tr>
            <td>".$data['nama']."</td>
            <td>".$data['jenis']."</td>
            <td>".$data['jumlah']."</td>
            <td>".$data['merk']."</td>
            <td>
                <a href='edit_barang.php?nama=".$data['nama']."' class= 'btn btn-sm btn-info'>edit</a>
                <a href='#' onclick='validasi(".$data['nama'].")' class= 'btn btn-sm btn-danger'>hapus</a>
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
    include ('../layouts/footer.php');
    include('../layouts/js.php');
?>

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
                window.location.href = "proses/delete_barang.php?nama="+param;
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