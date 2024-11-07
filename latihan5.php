<?php
for ($i=0; $i<11; $i++) {
    echo "Pengulangan ke $i <br>";
}

$buah =  ["mangga", "pepaya", "durian", "kamu"];
foreach ($buah as $a ) {
    echo "Saya Suka $a <br>";
}

$mahasiswa =  [
"001" => "Gindo",
"002" => "Edi",
"003" => "Imam",
"004" =>"Toni",
"005" => "Tejo",
"006" => "Iwan"
];
foreach ($mahasiswa as $nim => $nama) {
    echo "NIM : $nim - NAMA : $nama <br>";
}

$i = 3;
while ($i < 5) {
    echo "nilai i adalah : $i<br>" ;

    $i++;
}

$o = 4;
do {
    echo "Nilai i adalah : $o<br>";
    $o++;

} while ( $o <6) ;


function kurang ($a , $b) {
    $hasil = $a - $b;
    return $hasil;
}
echo kurang (10,3) . "<br>";


function sapa () {
    echo "Hello, Selamat datang <br>";
}
sapa ();

$salam = function ($nama) {
    return "selamat datang, $nama!";
};
echo $salam ("Panji");

?>