<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta content="width=device-width, initial-scale=1.0" name="viewport" />

        <title>Mabur Duwur - Wush...</title>
        <meta content="" name="description" />
        <meta content="" name="keywords" />

        <!-- Favicons -->
        <link href="assets/img/favicon.png" rel="icon" />
        <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

        <!-- Google Fonts -->
        <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet"
        />

        <!-- Vendor CSS Files -->
        <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet" />
        <link href="assets/vendor/aos/aos.css" rel="stylesheet" />
        <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
        <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
        <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
        <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet" />
        <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />

        <!-- Template Main CSS File -->
        <link href="assets/css/style.css" rel="stylesheet" />
    </head>

    <body>
        <!-- ======= Header ======= -->
        <header id="header" class="fixed-top d-flex align-items-cente">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-lg-between">
            <h1 class="logo me-auto me-lg-0"><a href="index.html">Mabur Duwur</a></h1>

            <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
                <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                <li><a class="nav-link scrollto" href="#about">About</a></li>
                <li><a class="nav-link scrollto" href="#events">Vision</a></li>
                <li><a class="nav-link scrollto" href="#our_flight">Our Flight</a></li>
                <li><a class="nav-link scrollto" href="#testimonials">Testimonial</a></li>
                <li><a class="nav-link scrollto" href="#gallery">Gallery</a></li>
                <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <!-- -->
            <a href="#our_flight" class="book-a-table-btn scrollto d-none d-lg-flex">Book a ticket</a>
        </div>
        </header>
        <!-- End Header -->


        <!-- profil -->
        <section >

                    
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
                    <!-- <th class='text-center col-2' >aksi</th> -->
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
        </section>
        <!-- end profil -->
        
    </body>
</html>
