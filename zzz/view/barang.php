<?php
    require_once('config.php');
?>
<table class= 'table table-bordered table striped' style="width: 100%;">
    <tr>
    <th>Nama barang</th>
    <th>Jenis barang</th>
    <th>Persedian</th>
    <th>Merk</th>
    </tr>
    <?php
    $query = 'SELECT * FROM barang';
    if($query= mysqli_query($koneksi,$query)){
        while ($data = mysqli_fetch_array($query)){
        echo "
        <tr>
            <td>".$data['nama']."</td>
            <td>".$data['jenis']."</td>
            <td>".$data['jumlah']."</td>
            <td>".$data['merk']."</td>             
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