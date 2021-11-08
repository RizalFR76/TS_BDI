<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>
<body>

    <!-- proses php -->
<!--  -->


<!-- akhir proses php -->


<!-- menampilkan hasil -->
<div class="container mt-5">
<table class="table table-dark ">
    <thead>
        <tr>
            <th scope="col">Nama</th>
            <th scope="col">
                <?php
                echo $nama;
                ?>
            </th>
            <th scope="col"></th>
            <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">Username</th>
            <td>
                <?php
                echo $user
                ?>
            </td>
            <td></td>
            <td></td>
        </tr>
        <tr> 
            <th scope="row">NIM </th>
            <td>
                <?php
                echo $nim
                ?>
            </td>
            <td></td>
            <td></td>
        </tr>
        <tr> 
            <th scope="row">Email </th>
            <td>
                <?php
                echo $email 
                ?>
            </td>
            <td></td>
            <td></td>
        </tr>
        <tr> 
            <th scope="row">kewarganegaraan </th>
            <td>
                <?php
                echo $kewarganegaraan
                ?>
            </td>
            <td></td>
            <td></td>
        </tr>
        <tr> 
            <th scope="row">Jenis Kelamin </th>
            <td>
                <?php
                echo $kelamin
                ?>
            </td>
            <td></td>
            <td></td>
        </tr>
        <tr> 
            <th scope="row">Hobi</th>
            <td>
                <?php
                echo $hobi
                ?>
            </td>
            <td></td>
            <td></td>
        </tr>
        <tr> 
            <th scope="row"></th>
            <td>
                <img class="rounded-circle img-thumbnail text-center" src="
                <?php
                echo $link_foto
                ?>" alt="gambar">
            </td>
            <td></td>
            <td></td>
        </tr>
    </tbody>
</table>
</div>
<!-- akhir menampilkan hasil -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>


</body>
</html>