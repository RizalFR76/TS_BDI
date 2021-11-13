<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profil</title>
    <?php
    include ('../layouts/css.php');
    ?>
</head>
<body>
    <div class="container pt-5">
        <div class="card">
            <div class="card-body">
                <h1>Edit Profil</h1>
                <!-- get data agar bisa diedit -->
                <?PHP
                require_once("config.php");
                    $parameter = $_GET['user_name'];
                    $query = "SELECT * FROM pelanggan WHERE user_name= '$parameter'";
                    echo"<hr>";
                    // echo"$parameter";
                    if ($query = mysqli_query($koneksi,$query)) {
                        $row = $query -> fetch_assoc();
                        // print_r($row);
                    }else {
                        echo "ERROR : mysqli error $query";
                    }
                ?>
                <form action="../proses/update.php?user_name=<?php echo $row['user_name']?>" method="post">
                    <div class="form-group">
                        <label for="">Nama</label>
                        <input type="text" name="nama" id="nama" class="form-control" placeholder="masukan nama" required value="<?php echo $row['nama'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="">Jenis Kelamin</label>
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
                        <label for="">Tanggal Lahir</label>
                        <input type="date" name="tgl_lahir" id="tgl_lahir" class="form-control" placeholder="masukan alamat" required value="<?php echo $row['tgl_lahir'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="">Alamat</label>
                        <input type="text" name="alamat" id="alamat" class="form-control" placeholder="masukan alamat" required value="<?php echo $row['alamat'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="">No HP</label>
                        <input type="number" name="no_hp" id="no_hp" class="form-control" placeholder="masukan no_hp" required value="<?php echo $row['no_hp'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="masukan email" required value="<?php echo $row['email'] ?>">
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
</body>
</html>