<?php
include ('typedata.php');

$mahasiswa = new mahasiswa();

$mahasiswa->set_nama();
$mahasiswa->set_nim();
echo $mahasiswa->get_data();
?>