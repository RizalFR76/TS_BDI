<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <?PHP
    include('../layouts/css.php');
    include('../layouts/js.php');
    ?>
</head>
<body>
<?PHP
    include ('../layouts/navbar.php');
    include ('../layouts/gelombang.php');
?>
<?php
    $cek = count($_GET);
    if ($cek > 0) {
        $status = $_GET['status'];
        if ($status == 'user_name_tidak_terdaftar') {
            echo "
                <div class='alert alert-warning' role='alert'>
                    user_name tidak terdaftar atau password salah!
                </div>
                ";
        // } elseif ($status == 'success') {
        //     echo "
        //         <div class='alert alert-primary' role='alert'>
        //             Berhasil mendaftar!
        //         </div>
        //         ";
        }
    }
    ?>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-6">
                <div class="card-header">
                    <center>
                        <h1>Login</h1>
                    </center>
                </div>
                <form method="post" action="../proses/cek.php" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="">Username</label>
                        <input class="form-control" type="text" id="user_name" name="user_name" placeholder="Masukan Username">
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input class="form-control" type="password" id="password" name="password" placeholder="Masukan Password">
                    </div>
                    <hr>

                    <center class="mb-3">
                        <button type="submit" class="btn btn-primary">Masuk</button><br>        
                    </center>
                    <a href="registrasi.php">belum punya akun?</a>
                </form>
            </div>
        </div>
        <div class="card-body ">
            
        </div>
    </div>
<?PHP
    include ('../layouts/footer.php');
?>
</body>
</html>