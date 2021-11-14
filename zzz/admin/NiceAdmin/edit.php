<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous" />

    <title>Admin - Complete Photography</title>
    <?PHP
        include('../layouts/css.php');
    ?>
</head>
<body>
<?PHP
    include('../layouts/navbar.php');
    include('../layouts/sidebar.php');
?>
<div class="container pt-5">
    <div class="card">
        <div class="card-body">
            <h1>Edit Data</h1>
            <!-- get data agar bisa diedit -->
            <?PHP
            require_once("config.php");
                $parameter = $_GET['id_pelanggan'];
                $query = "SELECT * FROM pelanggan where id_pelanggan =". $parameter;

                if ($query = mysqli_query($koneksi,$query)) {
                    $row = $query -> fetch_assoc();
                    print_r($row);
                }else {
                    echo "ERROR : mysqli error $query";
                }
            ?>
            <form action="proses/update.php?id_pelanggan='<?PHP echo $parameter ?>'" method="post">
                <div class="form-group">
                    <label for="">user_name</label>
                    <input type="text" name="user_name" id="user_name" class="form-control " placeholder="masukan user_name" required value="<?php echo $row['user_name'] ?>">
                </div>
                <div class="form-group">
                    <label for="">nama</label>
                    <input type="text" name="nama" id="nama" class="form-control" placeholder="masukan nama" required value="<?php echo $row['nama'] ?>">
                </div>
                <div class="form-group">
                    <label for="">jenis kelamin</label>
                    <!-- <input type="text" name="jk" id="jk" class="form-control" placeholder="jenis kelamin"> -->
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin1" value="Laki-laki" <?php
                            if ($row['jenis_kelamin'] == 'Laki-laki') {
                                echo 'checked';
                            }
                        ?>>
                        <label  class="form-check-label" for="jenis_kelamin1">
                            Laki-laki
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin2" value="Perempuan" <?php
                            if ($row['jenis_kelamin'] == 'Perempuan') {
                                echo 'checked';
                            }
                        ?>>
                        <label  class="form-check-label" for="jenis_kelamin2">
                            Perempuan
                        </label>
                    </div>
                    
                </div>
                <div class="form-group">
                    <label for="">tanggal lahir</label>
                    <input type="date" name="tgl_lahir" id="tgl_lahir" class="form-control" placeholder="masukan alamat" required value="<?php echo $row['tgl_lahir'] ?>">
                </div>
                <div class="form-group">
                    <label for="">alamat</label>
                    <input type="text" name="alamat" id="alamat" class="form-control" placeholder="masukan alamat" required value="<?php echo $row['alamat'] ?>">
                </div>
                <div class="form-group">
                    <label for="">no_hp</label>
                    <input type="number" name="no_hp" id="no_hp" class="form-control" placeholder="masukan no_hp" required value="<?php echo $row['no_hp'] ?>">
                </div>
                <div class="form-group">
                    <label for="">email</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="masukan email" required value="<?php echo $row['email'] ?>">
                </div>
                <hr>
                <div class="form-group text-center">
                    <a href="index.php" class="btn btn-md btn-danger">batal</a>
                    <button type="submit" class="btn btn-md btn-success">simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?PHP
    include('../layouts/footer.php');
    include('../layouts/js.php');
?>




    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</body>
</html>
