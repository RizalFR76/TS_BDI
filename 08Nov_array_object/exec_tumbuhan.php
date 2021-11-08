<?php
include('tumbuhan.php');

$tumbuhan = new tumbuhan();

$tumbuhan -> nama();
$tumbuhan -> akar();
$tumbuhan -> daun();
$tumbuhan -> batang();
$tumbuhan -> buah();
$tumbuhan -> bunga();
$tumbuhan -> fotosintesis();



print_r($tumbuhan);
echo '<br>';
print_r($tumbuhan->fotosintesis(' matahari'));
echo '<br>';
print_r($tumbuhan-> get_data());

?>