<?php
// array kota di Provinsi Bali
$kota_dibali = array(
    'Kabupaten Badung',
    'Kabupaten Bangli',
    'Kabupaten Buleleng',
    'Kabupaten Gianyar',
    'Kabupaten Jembrana',
    'Kabupaten Karangasem',
    'Kabupaten Klungkung',
    'Kabupaten Tabanan',
    'Kota Denpasar'
);
print_r($kota_dibali);
echo '<br>';


// objek berisi data provinsi bali
class provinsi {
  // Properties
  public $nama;
  public $ibu_kota;
  public $website;
  public $gubernur;
  public $wakil_gubernur;

  // Methods
  function set_nama($nama) {
    $this->nama = $nama;
  }
  function get_nama() {
    return $this->nama;
  }
  function set_ibu_kota($ibu_kota) {
    $this->ibu_kota = $ibu_kota;
  }
  function get_ibu_kota() {
    return $this->ibu_kota;
  }
  function set_website($website) {
    $this->website = $website;
  }
  function get_website() {
    return $this->website;
  }
  function set_gubernur($gubernur) {
    $this->gubernur = $gubernur;
  }
  function get_gubernur() {
    return $this->gubernur;
  }
  function set_wakil_gubernur($wakil_gubernur) {
    $this->wakil_gubernur = $wakil_gubernur;
  }
  function get_wakil_gubernur() {
    return $this->wakil_gubernur;
  }
}

$bali = new provinsi();
$bali ->set_nama('Bali');
$bali ->set_ibu_kota('Denpasar');
$bali ->set_website('https://www.baliprov.go.id/');
$bali ->set_gubernur('Dr. Ir. WAYAN KOSTER, MM');
$bali ->set_wakil_gubernur('Dr. Ir. TJOK OKA ARTHA ARDHANA SUKAWATI, M.Si');

echo $bali->get_nama();
echo "<br>";
echo $bali->get_ibu_kota();
echo "<br>";
echo $bali->get_website();
echo "<br>";
echo $bali->get_gubernur();
echo "<br>";
echo $bali->get_wakil_gubernur();
echo '<br>';

// membuat funsi yang memiliki dua parameter integer
function pengurangan(int $a, int $b) {
    return $a - $b;
}
// echo pengurangan (5, 9);
// echo '<br>';

function sambung_kata ($kata1, $kata2){
    return strval($kata1).' '. strval($kata2);
}
// echo sambung_kata('Anda','siapa');
// echo '<br>';

?>