<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?PHP
    include('../layouts/css.php')
    ?>
</head>
<body>
    <!-- navbar -->
    <?PHP
    include('../layouts/navbar.php')
    ?>
    <!-- akhir navbar -->

    <!-- konten -->
    <section id="hero" class="d-flex flex-column justify-content-end align-items-center">
        <div id="heroCarousel" data-bs-interval="5000" class="container carousel carousel-fade" data-bs-ride="carousel">

        <!-- Slide 1 -->
        <div class="carousel-item active">
            <div class="carousel-container">
            <h2 class="animate__animated animate__fadeInDown">Welcome to Complete <span>Photography</span></h2>
            <p class="animate__animated fanimate__adeInUp">Menyediakan berbagai peralatan fotografi.</p>
            <a href="registrasi.php" class="btn-get-started animate__animated animate__fadeInUp scrollto">Pesan Sekarang</a>
            </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item">
            <div class="carousel-container">
            <h2 class="animate__animated animate__fadeInDown">Foto-foto belum lengkap tanpa kamera digital.</h2>
            <p class="animate__animated fanimate__adeInUp">Pengalaman berbeda dari menggunakan kamera smartphone.</p>
            <a href="registrasi.php" class="btn-get-started animate__animated animate__fadeInUp scrollto">Pesan Sekarang</a>
            </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item">
            <div class="carousel-container">
            <h2 class="animate__animated animate__fadeInDown">Tunggu apalagi</h2>
            <p class="animate__animated fanimate__adeInUp">Pesan sekarang</p>
            <a href="registrasi.php" class="btn-get-started animate__animated animate__fadeInUp scrollto">Pesan Sekarang</a>
            </div>
        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
        </a>

        </div>

        <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
        <defs>
            <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
        </defs>
        <g class="wave1">
            <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
        </g>
        <g class="wave2">
            <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
        </g>
        <g class="wave3">
            <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
        </g>
        </svg>

    </section>
    
    <!-- akhir konten -->

    <!-- footer -->
    <?PHP
    include('../layouts/footer.php')
    ?>
    
    <!-- akhir footer -->

    <!-- js -->
    <?PHP
    include('../layouts/js.php')
    ?>

</body>
</html>