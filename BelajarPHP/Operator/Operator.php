<?php

$a = 10;
$b = 2;

//Penjumlahan
$c = $a + $b;
echo "$a + $b = $c";
echo "<hr>";

//Pengurangan
$c = $a - $b;
echo "$a - $b = $c";
echo "<hr>";

//Perkalian
$c = $a * $b;
echo "$a * $b = $c";
echo "<hr>";

//Pembagian
$c = $a / $b;
echo "$a / $b = $c";
echo "<hr>";

//Sisa bagi
$c = $a % $b;
echo "$a % $b = $c";
echo "<hr>";

//Pangkat
$c = $a ** $b;
echo "$a ** $b = $c";
echo "<hr>";
?>

<?php
    $a = 6;
    $b = 2;

    //menggunakan operator relasi lebih besar
    $c = $a > $b;
    echo "$a > $b: $c";
    echo "<hr>";

    //menggunakan operator relasi lebih kecil
    $c = $a < $b;
    echo "$a < $b: $c";
    echo "<hr>";

    1 > 10;

    $A = "21";
    $B = 21;
    $A === $B;

    //menggunakan operator relasi lebih tidak sama dengan
    $c = $a != $b;
    echo "$a != $b: $c";
    echo "<hr>";

    //menggunakan operator relasi lebih besar sama dengan
    $c = $a >= $b;
    echo "$a >= $b: $c";
    echo "<hr>";

    //menggunakan operator relasi lebih kecil sama dengan
    $c = $a <= $b;
    echo "$a <= $b: $c";
    echo "<hr>";
?>

<?php

    $a = true;
    $b = false;

    //variabel $c akan bernilai false
    $c = $a && $b;
    echo $c;
    echo "<hr>";

    //variabel $c akan bernilai true
    $c = $a || $b;
    echo $c;
    echo "<hr>";

    //variabel $c akan bernilai false
    $c = !$a;
    echo $c;
    echo "<hr>";

?>