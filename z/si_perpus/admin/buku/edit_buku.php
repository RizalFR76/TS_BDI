<?php

    if(isset($_GET['kode'])){
        $sql_cek = "SELECT * FROM tb_buku WHERE id_buku='".$_GET['kode']."'";
        $query_cek = mysqli_query($koneksi, $sql_cek);
        $data_cek = mysqli_fetch_array($query_cek,MYSQLI_BOTH);
    }
?>

<section class="content-header">
	<h1>
		Master Data
		<small>Data Buku</small>
	</h1>
	<ol class="breadcrumb">
		<li>
			<a href="index.php">
				<i class="fa fa-home"></i>
				<b>Si Perpustakaan</b>
			</a>
		</li>
	</ol>
</section>

<section class="content">
	<div class="row">
		<div class="col-md-12">
			<!-- general form elements -->
			<div class="box box-success">
				<div class="box-header with-border">
					<h3 class="box-title">Ubah buku</h3>
					<div class="box-tools pull-right">
						<button type="button" class="btn btn-box-tool" data-widget="collapse">
							<i class="fa fa-minus"></i>
						</button>
						<button type="button" class="btn btn-box-tool" data-widget="remove">
							<i class="fa fa-remove"></i>
						</button>
					</div>
				</div>
				<!-- /.box-header -->
				<!-- form start -->
				<form action="" method="post" enctype="multipart/form-data">
					<div class="box-body">

						<input type='hidden' class="form-control" name="id_buku" value="<?php echo $data_cek['id_buku']; ?>"
						 readonly/>

						<div class="form-group">
							<label>Judul Buku</label>
							<input type='text' class="form-control" name="judul_buku" value="<?php echo $data_cek['judul_buku']; ?>"
							/>
						</div>

						<div class="form-group">
							<label>Pengarang</label>
							<input type='text' class="form-control" name="pengarang" value="<?php echo $data_cek['pengarang']; ?>"
							/>
						</div>

						<div class="form-group">
							<label>Penerbit</label>
							<input class="form-control" name="penerbit" value="<?php echo $data_cek['penerbit']; ?>"
							/>
						</div>

						<div class="form-group">
							<label>Lokasi</label>
							<input class="form-control" name="lokasi" value="<?php echo $data_cek['lokasi']; ?>">
						</div>

						<div class="form-group">
							<label>Jumlah</label>
							<input type='number' class="form-control" name="jumlah" value="<?php echo $data_cek['jumlah']; ?>">
						</div>

						<div class="form-group">
							<label>Tgl Input</label>
							<input type='date' class="form-control" name="tgl_input" value="<?php echo $data_cek['tgl_input']; ?>">
						</div>

					</div>
					<!-- /.box-body -->

					<div class="box-footer">
						<input type="submit" name="Ubah" value="Ubah" class="btn btn-success">
						<a href="?page=MyApp/data_buku" class="btn btn-warning">Batal</a>
					</div>
				</form>
			</div>
			<!-- /.box -->
</section>

<?php

if (isset ($_POST['Ubah'])){
    //mulai proses ubah
    $sql_ubah = "UPDATE tb_buku SET
        judul_buku='".$_POST['judul_buku']."',
        pengarang='".$_POST['pengarang']."',
		penerbit='".$_POST['penerbit']."',
		lokasi='".$_POST['lokasi']."',
		jumlah='".$_POST['jumlah']."',
        tgl_input='".$_POST['tgl_input']."'
        WHERE id_buku='".$_POST['id_buku']."'";
    $query_ubah = mysqli_query($koneksi, $sql_ubah);

    if ($query_ubah) {
        echo "<script>
        Swal.fire({title: 'Ubah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
        }).then((result) => {
            if (result.value) {
                window.location = 'index.php?page=MyApp/data_buku';
            }
        })</script>";
        }else{
        echo "<script>
        Swal.fire({title: 'Ubah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
        }).then((result) => {
            if (result.value) {
                window.location = 'index.php?page=MyApp/data_buku';
            }
        })</script>";
    }
}

