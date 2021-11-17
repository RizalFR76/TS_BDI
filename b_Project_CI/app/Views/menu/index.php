<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- css bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <!-- js bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css"></script>
    <title>Menu - Index</title>
</head>
<body>
    <div class="container">
        <h2 class="text-center pt-5">Tabel Menu</h2>
        <a href="<?=base_url('menu/create'); ?>" class="btn btn-info">Tambah</a>
        <table class="table" id="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Jenis</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Penyajian </th>
                    <th scope="col">Aksi </th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach ($data as $i => $d) {
                        ?>
                        <tr>
                            <td width="30" class="text-center"><?php echo $i+1;?></td>
                            <td><?php echo $d['nama']?></td>
                            <td><?php echo $d['jenis']?></td>
                            <td><?php echo $d['harga']?></td>
                            <td><?php echo $d['penyajian']?></td>
                            <td>
                                <a href="<?php echo base_url('menu/edit/'. $d['id'])?>" class="btn btn-warning">edit</a>
                                <a <?php echo" onclick='validasi(".$d['id'].")'"?> class="btn btn-danger">hapus</a>
                            </td>
                        </tr>
                        <?php
                    }
                ?>
            </tbody>
        </table>
    
    </div>
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
                    window.location.href = "menu/delete/"+param;
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
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#table').DataTable();
        } );
    </script>
</body>
</html>