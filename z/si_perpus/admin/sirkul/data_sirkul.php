<section class="content-header">
	<h1>
		Transaksi
		<small>Buku</small>
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
<!-- Main content -->
<section class="content">
	<div class="box box-primary">
		<div class="box-header with-border">
			<a href="?page=add_sirkul" title="Tambah Data" class="btn btn-primary">
				<i class="glyphicon glyphicon-plus"></i> Tambah Data</a>
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
		<div class="box-body">
			<div class="table-responsive">
				<table id="example1" class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>No</th>
							<th>Buku</th>
							<th>Peminjam</th>
							<th>Tgl Pinjam</th>
							<th>Tgl Kembali</th>
							<th>Kelola</th>
						</tr>
					</thead>
					<tbody>

						<?php
							$no = 1;
							$sql = $koneksi->query("SELECT s.id_sk, b.judul_buku, a.nis, a.nama, s.tgl_pinjam, s.tgl_kembali
							from tb_sirkulasi s inner join tb_buku b on s.id_buku=b.id_buku
							inner join tb_anggota a on s.nis=a.nis where status='PIN' order by tgl_pinjam desc");
							while ($data= $sql->fetch_assoc()) {
						?>

						<tr>
							<td>
								<?php echo $no++; ?>
							</td>
							<td>
								<?php echo $data['judul_buku']; ?>
							</td>
							<td>
								<?php echo $data['nis']; ?>
								-
								<?php echo $data['nama']; ?>
							</td>
							<td>
								<?php  $tgl = $data['tgl_pinjam']; echo date("d/M/Y", strtotime($tgl))?>
							</td>
							<td>
								<?php  $tgl = $data['tgl_kembali']; echo date("d/M/Y", strtotime($tgl))?>
							</td>

							<td>
								<a href="?page=panjang&kode=<?php echo $data['id_sk']; ?>" onclick="return confirm('Perpanjang Data Ini ?')"
								 title="Perpanjang" class="btn btn-success">
									<i class="glyphicon glyphicon-upload"></i>
								</a>
								<a href="?page=kembali&kode=<?php echo $data['id_sk']; ?>" onclick="return confirm('Kembalikan Buku Ini ?')"
								 title="Kembalikan" class="btn btn-danger">
									<i class="glyphicon glyphicon-download"></i>
							</td>
						</tr>
						<?php
                  }
                ?>
					</tbody>

				</table>
			</div>
		</div>
	</div>
</section>