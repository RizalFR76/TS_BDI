<?php
// menghitung luas persegi panjang
$panjang = 10;
$lebar = 7;
$luas_ps = $panjang * $lebar;
//menampilkan hasil luas persegi panjang
echo "<h2>persegi panjang</h2>";
echo 'panjang = '. $panjang . '<br>';
echo 'lebar = ' . $lebar . '<br>';
echo 'luas = '. $panjang . ' * '. $lebar .' = ' . $luas_ps . '<br>';

// menghitung luas segitiga
$alas = 6;
$tinggi = 12;
$luas_s = ($alas * $tinggi)/2;
// mennampilkan hasil luas segitiga
echo "<h2>segitiga</h2>";
echo 'alas = '. $alas .'<br>';
echo 'tinggi = '. $tinggi .'<br>';
echo 'luas = ( '. $alas. ' * '. $tinggi. ' ) / 2 = ' . $luas_s .'<br>';

//menghitung keliling lingkaran
$jari_jari = 7;
$keliling = 2 * pi() * $jari_jari;
//menampilkan hasil keliling lingkaran
echo "<h2>Lingkaran</h2>";
echo 'jari-jari = '. $jari_jari .'<br>';
echo 'keliling = 2 * pi * '. $jari_jari . ' = ' . $keliling  .'<br>';

// menentukan grade nilai
$nilai = 78;
echo "<h2>Menentukan grade nilai</h2>";
echo 'nilai = '. $nilai .'<br>';
if ($nilai > 85 and $nilai <= 100) {
    echo "Grade nilai Anda adalah A";
    } elseif ($nilai > 75 and $nilai <= 85) {
    echo "Grade nilai Anda adalah B"; 
    } elseif ($nilai > 50 and $nilai <= 75) {
    echo "Grade nilai Anda adalah C";
    } elseif ($nilai > 30 and $nilai <= 50) {
    echo "Grade nilai Anda adalah D";
    } elseif ($nilai >= 0 and $nilai <= 30) {
    echo "Grade nilai Anda adalah E";
    } else {
    echo "eror";
  }

?>