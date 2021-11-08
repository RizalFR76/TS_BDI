<?php
    echo "selamat belajar php dasar";
    // proses assigment (pengisian nilai)
    $a = 5;
    $b = 10;

    //proses aritmatika
    $penjumlahan = $a + $b;
    $pengurangan = $a - $b;
    $perkalian = $a * $b;
    $pembagian = $a / $b;
    $modulo = $a % $b;
    $bollean1 = ($a < $b)? 'true':'false';
    $bollean2 = ($a > $b)? 'true':'false';

    //menampilkan output
    // echo "Penjumlahan : ". $a .' + '. $b .' = ' .$penjumlahan .'<br>';
    // echo "Pengurangan : ". $a .' - '. $b .' = ' .$pengurangan .'<br>';
    // echo "Perkalian : ". $a .' * '. $b .' = ' .$perkalian .'<br>';
    // echo "Pembagian : ". $a .'/ '. $b .' = ' .$pembagian .'<br>';
    // echo "Modulo : ". $a .' % '. $b .' = ' .$modulo .'<br>';
    // echo "bollean1 : ". $a .' < '. $b .' = ' .$bollean1 .'<br>';
    // echo "bollean2 : ". $a .' < '. $b .' = ' .$bollean2 .'<br>';


    //penggunaan if else
    if($a < $b){

        echo "nilai b lebih besar dari nilai a";
    }else{
        echo 'nilai b lebih kecil dari nilai a';
    }

    if($a > 85){
        echo 'A';
    }elseif($a > 75){
        echo 'B';
    }elseif($a > 50){
        echo 'C';
    }elseif($a > 30){
        echo 'D';
    }else{
        echo 'E';
    }

?>