<?php
$total = 50000;
echo $total;
echo "<br>";

if ($total >= 50000){
    echo "Anda mendapatkan gratis minuman!";
} else {
    echo "Maaf, tidak ada gratis minuman";
}
?>
<hr>
<?php
    $total = 200000;
    
    if ($total > 200000){
        echo "Anda mendapatkan diskon 20%";
    } elseif ($total >= 100000 && $total <= 200000){
        echo "Anda mendapatkan diskon 10%";
    } else {
        echo "Maaf, anda tidak mendapatkan diskon";
    }
    echo "<hr>";

    //ternary
    $nilai = 29;
    $hasil = ($nilai % 2 == 0) ? "Genap" : "Ganjil";
    echo $hasil
    ?>
<hr>
<?php
    //SWITCH-CASE

$hari = 8;

switch ($hari){
    case 1 :
        echo "Senin";
        break;
    case 2 :
        echo "Selasa";
        break;
    case 3 : 
        echo "Rabu";
        break;
    case 4:
        echo "Kamis";
        break;
    case 5 : 
        echo "Jumat";
        break;
    case 6 :
        echo "Sabtu";
        break;
    case 7 :
        echo "Minggu";
        break;
    default :
        echo "Nomor hari tidak valid";
}
?>
