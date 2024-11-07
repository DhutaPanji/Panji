<?php
$a = 25;
$b = 5;

$jumlah = $a + $b ;
$selisih = $a - $b ;
$kali = $a * $b ;
$bagi = $a / $b;
$sisa_bagi = $a % $b;

$lebih_besar = $a > $b ;
$sama_dengan = $a == $b;

$hasil_and = ($a > 0)  && ($b < 10);
$hasil_or = ($a < 0 ) || ($b > 0);
$hasil_not = !($a == $b);

echo $jumlah . "<br>" .  $selisih . "<br>" . $kali . "<br>" . $bagi . "<br>" . $sisa_bagi . "<br>" . $lebih_besar . "<br>" . $sama_dengan . "<br>" .  $hasil_and . "<br>" . $hasil_or . "<br>" . $hasil_not . "<br>";

$a++;
echo "nilai a setelah di incremen : " . $a . "<br>";
$b--;
echo "nilai b setelah di incremen : " . $b . "<br>";
?>