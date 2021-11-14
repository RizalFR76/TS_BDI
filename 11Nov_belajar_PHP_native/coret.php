<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <php
    require_once('config.php');
    $a = 'SELECT nama FROM barang';
    print_r ('$a');
    $a = mysqli_query($koneksi,$a);
    $b = mysqli_query($a);
    print_r('$b');
    ?>
</body>
</html>