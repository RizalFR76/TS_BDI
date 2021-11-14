<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
    <?PHP
    include ('../layouts/css.php');
    ?>
</head>
<body>
<?PHP
    include ('../layouts/navbar.php');
    include ('../layouts/gelombang.php');
    
?>
<div class="container pt-5">
    <div class="card">
        <div class="card-body">
        <h1 class="text-center">Halaman Form Tambah Data</h1>
        <hr />
            <a >Sudah punya akun?</a> <br>
            <a href="login.php" class="btn btn-primary">Login</a>
        <hr>
        <form action="../proses/simpan.php" method="post">
            <div class="form-group">
            <label for="">Username</label>
            <input type="text" name="user_name" id="user_name" class="form-control" placeholder="masukan user_name" required />
            </div>
            <div class="form-group">
            <label for="">Nama</label>
            <input type="text" name="nama" id="nama" class="form-control" placeholder="masukan nama" required />
            </div>
            <div class="form-group">
            <label for="">Jenis Kelamin</label>
            <!-- <input type="text" name="jk" id="jk" class="form-control" placeholder="jenis kelamin"> -->
            <div class="form-check">
                <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin1" value="Laki-laki" />
                <label class="form-check-label" for="jenis_kelamin1"> Laki-laki </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin2" value="Perempuan" />
                <label class="form-check-label" for="jenis_kelamin2"> Perempuan </label>
            </div>
            </div>
            <div class="form-group">
                <label for="">Tanggal Lahir</label>
                <input type="date" name="tgl_lahir" id="tgl_lahir" class="form-control" placeholder="masukan alamat" required />
            </div>
            <div class="form-group">
            <label for="">Alamat</label>
            <input type="text" name="alamat" id="alamat" class="form-control" placeholder="masukan alamat" required />
            </div>
            <div class="form-group">
            <label for="">No Hp</label>
            <input type="number" name="no_hp" id="no_hp" class="form-control" placeholder="masukan no_hp" required />
            </div>
            <div class="form-group">
            <label for="">Email</label>
            <input type="email" name="email" id="email" class="form-control" placeholder="masukan email" required />
            </div>
            <div class="form-group">
            <label for="">Password</label>
            <input type="password" name="password" id="password" class="form-control" placeholder="masukan password" required />
            </div>
            <hr />
            <div class="form-group text-center">
            <button type="submit" class="btn btn-md btn-success">Submit</button>
            </div>
            
        </form>
        </div>
    </div>
</div>
    <?PHP
    include ('../layouts/js.php');
    include('../layouts/footer.php');
    ?>
</body>
</html>