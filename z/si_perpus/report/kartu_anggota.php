<?php
include "../inc/koneksi.php";

$nis = $_GET['nis'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title></title>
</head>

<table border="0" cellspacing="0" style="width: 100%">
	<tbody>
		<tr>
			<td>
				<center>
					<h1>KARTU ANGGOTA</h1>
					<h2>PERPUSTAKAAN SMP ALODIA BEKASI</h2>
				</center>
			</td>
		</tr>
	</tbody>
</table>

<body>
	<hr / size="2px" color="black">
	<table border="0" cellspacing="0">
		<tbody>
			<?php
                 $sql_tampil = "select * from tb_anggota where nis ='$nis'";
                 $query_tampil = mysqli_query($koneksi, $sql_tampil);
                 $no=1;
                 while ($data = mysqli_fetch_array($query_tampil,MYSQLI_BOTH)) {
                ?>
			<tr>
				<td>Nama Siswa</td>
				<td>:</td>
				<td>
					<?php echo $data['nama']; ?>
				</td>
			</tr>
			<tr>
				<td>NIS</td>
				<td>:</td>
				<td>
					<?php echo $data['nis']; ?>
				</td>
			</tr>
			<tr>
				<td>Kelas</td>
				<td>:</td>
				<td>
					<?php echo $data['kelas']; ?>
				</td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>:</td>
				<td>
					<?php echo $data['alamat']; ?>
				</td>
			</tr>

			<br>
			<?php } ?>
		</tbody>
	</table>
	<br>

	<table border="1" cellspacing="0" style="width: 100%">
		<thead>
			<tr>
				<th rowspan="2">No</th>
				<th>Peminjaman</th>
				<th>Pengembalian</th>
				<th rowspan="2">Judul Buku</th>
				<th rowspan="2">Keterangan</th>
			</tr>
			<tr>
				<th>Hari/Tanggal</th>
				<th>Hari/Tanggal</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>01</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td>02</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td>03</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td>04</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td>05</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td>06</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td>07</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td>08</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td>09</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td>10</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td>11</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td>12</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td>13</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td>14</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td>15</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td>16</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td>17</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td>18</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td>19</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td>20</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>


		</tbody>
	</table>
	</center>

	<script>
		window.print();
	</script>
</body>

</html>