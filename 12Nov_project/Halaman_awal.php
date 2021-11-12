<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous" />
		<link rel="stylesheet" href="css/login.css">
		<title>Project Web Dinamis</title>
	</head>
	<body>
		<!-- ============================= NAVBAR =========================== -->
		<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
			<a class="navbar-brand" href="#">Navbar</a>
			<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
				<div class="navbar-nav">
					<a class="nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
					<a class="nav-link" href="#">Features</a>
					<a class="nav-link" href="#">Pricing</a>
					<!-- <a class="nav-link disabled">Disabled</a> -->
				</div>
			</div>
		</nav>
		<!------------------------- End NAVBAR --------------------------------->

		<!-- ============================= Home =========================== -->
		<div id="Home" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
				<li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
				<li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img src="img/home_slider1.jpg" class="d-block w-100" alt="gambar1 " />
					<div class="carousel-caption d-none d-md-block">
						<h5>First slide label</h5>
						<p>Some representative placeholder content for the first slide.</p>
					</div>
				</div>
				<div class="carousel-item">
					<img src="img/home_slider2.jpg" class="d-block w-100" alt="gambar2" />
					<div class="carousel-caption d-none d-md-block">
						<h5>Second slide label</h5>
						<p>Some representative placeholder content for the second slide.</p>
					</div>
				</div>
				<div class="carousel-item">
					<img src="img/home_slider3.jpg" class="d-block w-100" alt="gambar3" />
					<div class="carousel-caption d-none d-md-block">
						<h5>Third slide label</h5>
						<p>Some representative placeholder content for the third slide.</p>
					</div>
				</div>
			</div>
			<button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</button>
			<button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</button>
		</div>
		<!------------------------- End Home --------------------------------->

		<!--============================= registrasi ============================-->
		<div class="container pt-5">
			<div class="card">
				<div class="card-body">
					<div class="card-header">
						<h1>Data Diri</h1>
						<p>Isikan data diri untuk menyewa peralatan</p>
					</div>
					<form action="proses/simpan.php" method="post">
						<div class="form-group">
							<label for="">User Name</label>
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
							<label for="">Nomor HP</label>
							<input type="number" name="no_hp" id="no_hp" class="form-control" placeholder="masukan no_hp" required />
						</div>
						<div class="form-group">
							<label for="">Email</label>
							<input type="email" name="email" id="email" class="form-control" placeholder="masukan email" required />
						</div>
						<hr />
						<div class="form-group text-center">
							<button type="submit" class="btn btn-md btn-success">Registrasi</button>
						</div>
					</form>
					<p>sudah punya akun?</p>
					<a href="login.php" class="btn btn-md btn-primary">Login</a>
				</div>
			</div>
		</div>
		<!--------------------------- End Regristrasi --------------------------->

		<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
	</body>
</html>
