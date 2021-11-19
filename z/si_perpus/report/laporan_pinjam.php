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
		<h3>DATA PEMINJAMAN BUKU
		</h3>
		Tanggal Cetak :
		<?php echo date('d/m/Y'); ?>

		<table border="1" cellspacing="0" style="width: 100%">
			<thead>
				<tr>
					<th>No</th>
					<th>Buku</th>
					<th>Peminjam</th>
					<th>Tgl Peminjaman</th>
				</tr>
			</thead>
			<tbody>
				<?php
                  $no = 1;
                  $sql = $koneksi->query("SELECT b.judul_buku, a.nis, a.nama, l.tgl_pinjam
                  from log_pinjam l inner join tb_buku b on l.id_buku=b.id_buku
				  inner join tb_anggota a on l.nis=a.nis order by tgl_pinjam asc");
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