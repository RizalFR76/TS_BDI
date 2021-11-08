<?php

$a = 6;
$b = 8;

$k1 = $a** 2;
$k = ku($a,2) + ku($b,2);
echo $k1 .'<br/>';
echo $k .'<br/>';

function ku ($nilai,$pangkat)
{
    return $nilai ** $pangkat;
}
?>