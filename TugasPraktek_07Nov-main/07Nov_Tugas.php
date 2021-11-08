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
// echo $Kota[0]

// Data Provinsi Bali (Nama, Ibu kota, Wensite, Gubernur, Wakil Gubernur)
$provinsi = array(
    'provinsi' => 'Bali',
    'ibu_kota' => 'Denpasar',
    'website' => 'https://www.baliprov.go.id/',
    'gubernur' => 'Dr. Ir. WAYAN KOSTER, MM',
    'wakil_gubernur' => 'Dr. Ir. TJOK OKA ARTHA ARDHANA SUKAWATI, M.Si'
);

// mengakses data ibu kota
echo $provinsi['ibu_kota'];
echo '<br>';

// fungsi dengan parameter 2 integer
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