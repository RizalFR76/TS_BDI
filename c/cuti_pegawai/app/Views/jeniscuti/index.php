<!-- <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css"> -->
<?= $this->extend('layouts/master.php')?>

<?= $this->section('content')?>
<div id="content">

	<!-- Topbar -->
	<?= $this->include('layouts/navbar.php')?>
	
	<!-- End of Topbar -->

	<!-- Begin Page Content -->
	<div class="container-fluid">

		<!-- Page Heading -->
		<h1 class="h3 mb-4 text-gray-800">Jenis Cuti</h1>
		<div class="row">
			<div class="col-12">
			<div class="card shadow mb-4">
					<div class="card-header py-3">
						<h6 class="m-0 font-weight-bold text-primary">Data Jenis Cuti</h6>
					</div>
					<div class="card-body">
						<p class="text-right">
							<a href="<?=base_url('jeniscuti/create'); ?>" class="btn btn-info text-right">Tambah</a>
						</p>
						<div class="table-responsive">
							<table id="table" class="table table-bordered table-striped text-center" style="width: 100%;">
								<thead>
									<tr>
										<th width="80" class="text-center">#</th>
										<th class="">Nama Jenis Cuti</th>
										<th width="130" class="text-center col-2">Aksi</th>
									</tr>
								</thead>
								<tbody>
									<?php
										foreach ($data as $i => $d) {
											?>
											<tr>
												<td class="text-center"><?= $i+1 ?></td>
												<td><?= $d['nama_jenis'] ?></td>
												<td class="text-center">
													<a href="" class="btn btn-warning">
														<i class="fas fa-edit"></i>
														Edit
													</a>
													<a href="" class="btn btn-danger">
														<i class="fas fa-delete"></i>
														Delete
													</a>
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
			</div>
		</div>
	</div>
	<!-- /.container-fluid -->
</div>
<!-- <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script src="">$(document).ready(function() {
    $('#table').DataTable();
} );</script> -->
<?= $this->endSection()?>