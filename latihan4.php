<?php
$nama_depan = "Panzz";
$nama_belakang = "Slebeww";
$nama_lengkap = $nama_depan . "" . $nama_belakang;
echo "Nama Lengkap : "  . $nama_lengkap . "<br>";

$nilai = 90;
$status =  ($nilai >= 75 ) ? "Lulus" : "Tidak Lulus" ;
echo "Status : " . $status . "<br>";

$nilai1 = 85;
if ($nilai1 >= 80) {
    echo "Lulus";
}  else  {
    echo "Tidak Lulus" . "<Br>";
}

$nilai2 = 85;
if ($nilai2 >= 100) {
    echo "A";

} else if ($nilai2 >= 90) {
    echo "B";

} else {
    echo "C" . "<br>";
}
$value = 2;
switch ($value) {
    case 1 :
        echo "Nilai adalah 1" ;
        break;
        
        case 2 :
            echo "Nilai adalah 2";
            break;

            case 3 :
                echo "nilai adalah 3";
                break;
                default :

                echo "Nilai tidak diketahui";
}
?>