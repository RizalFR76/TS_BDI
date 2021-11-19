<?php
include "../inc/koneksi.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title></title>
</head>

<table border="0" cellspacing="0" style="width: 100%">
	<tbody>
		<tr>
			<td align="right">
				<img src="../dist/img/logo.png" width="140px">
			</td>
			<td>
				<h2>PERPUSTAKAAN SMP ALODIA BEKASI</h2>
				<b>Jl.Taman Bougenville No.1 THB Kec. Medan Satria, Bekasi.</b>
			</td>
		</tr>
	</tbody>
</table>

<body>
	<center>
		<hr / size="2px" color="black">
		<h3>DATA ANGGOTA PERPUSTAKAAN
		</h3>
		Tanggal Cetak :
		<?php echo date('d/m/Y'); ?>

		<table border="1" cellspacing="0" style="width: 100%">
			<thead>
				<tr>
					<th>No</th>
					<th>NIS</th>
					<th>Nama</th>
					<th>tgl_lahir</th>
					<th>JK</th>
					<th>Alamat</th>
					<th>Kelas</th>
				</tr>
			</thead>
			<tbody>
				<?php
                  $no = 1;
                  $sql = $koneksi->query("SELECT * from tb_anggota");
                  while ($data= $sql->fetch_assoc()) {
                ?>
				<tr>
					<td>
						<?php echo $no++; ?>
					</td>
					<td>
						<?php echo $data['nis']; ?>
					</td>
					<td>
						<?php echo $data['nama']; ?>
					</td>
					<td>
						<?php echo $data['tgl_lahir']; ?>
					</td>
					<td>
						<?php echo $data['jekel']; ?>
					</td>
					<td>
						<?php echo $data['alamat']; ?>
					</td>
					<td>
						<?php echo $data['kelas']; ?>
					</td>

				</tr>
				<?php
          
            }
        ?>
			</tbody>
		</table>
	</center>

	<script>
		window.print();
	</script>
</body>

</html>