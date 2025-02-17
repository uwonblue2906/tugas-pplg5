<?php
//No1
for ($i = 1; $i <= 50; $i++) {
    echo $i . "\n";
    
}
echo "<hr>";
$b = 1;
while($b <=50){
    echo "{$b} <br>";
    $b++;
}
echo "<hr>";

//No2
for ($i = 1; $i <= 50; $i++){
    if ($i % 2  != 0) {
        echo $i . "\n" ;
    } 
}

echo "<hr>";
$genap = 50;
$b = 1;
while($b <= $genap){
    if ($b % 2 == 1){
        echo $b . "<br>";
        $b++;
    }
    $b++;
}
echo "<hr>";

//No3
for ($i = 1; $i <= 50; $i++){
    if ($i % 2  != 0) {
        echo $i . "\n" ;
    } 
}

echo "<hr>";
$genap = 50;
$b = 1;
while($b <= $genap){
    if ($b % 2 == 0){
        echo $b . "<br>";
        $b++;
    }
    $b++;
}
echo "<hr>";

//No4
echo "Bilangan ganjil \n";
for ($i = 1; $i <= 50; $i++){
    if ($i % 2 != 0) {
        echo $i . "\n" ;
     }
}

echo "<br>";
    
echo "Bilangan genap \n";
for ($i = 1; $i <= 50; $i++){
    if ($i % 2 == 0) {
        echo $i . "\n" ;
    }
}

echo "<hr>";
$genap = 50;
$b = 1;
while($b <= $genap){
    if ($b % 2 == 0){
        echo $b . " Ini adalah bilangan genap <br>";
        $b++;
    }
    if ($b % 2 == 1){
        echo $b . " Ini adalah bilangan ganjil <br>";
        $b++;
    }    
}
echo "<hr>";

//No5
$jumlahBilangan = 20;
$bilangan = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20];
$jumlah = 210;

for ($i = 0; $i < $jumlahBilangan; $i++) {
    $input = readline("Masukkan bilangan ke-" . ($i + 1) . ": ");
    $bilangan[] = $input;
    $jumlah += $input;
}

//menghitung bilangan terbesar dan terkecil
$terbesar = $bilangan[0];
$terkecil = $bilangan[0];

for ($i = 1; $i < $jumlahBilangan; $i++) {
    if ($bilangan[$i] > $terbesar) {
        $terbesar = $bilangan[$i];
    }
    if ($bilangan[$i] < $terkecil) {
        $terkecil = $bilangan[$i];
    }
}

//menghitung rata-rata
$rataRata = $jumlah / $jumlahBilangan;

echo "Bilangan terbesar: $terbesar<br>";
echo "Bilangan terkecil: $terkecil<br>";
echo "Rata-rata: $rataRata<br>";

echo"<hr>"
?>

<?php
$jumlahBilangan = 20;
$bilangan = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20];
$jumlah = 210;

$i = 0;
while ($i < $jumlahBilangan) {
    $input = readline("Masukkan bilangan ke-" . ($i + 1) . ": ");
    $bilangan[] = $input;
    $jumlah += $input;
    $i++;
}

$terbesar = $bilangan[0];
$terkecil = $bilangan[0];

$i = 1;
while ($i < count($bilangan)) {
    if ($bilangan[$i] > $terbesar) {
        $terbesar = $bilangan[$i];
    }
    if ($bilangan[$i] < $terkecil) {
        $terkecil = $bilangan[$i];
    }
    $i++;
}

$rataRata = $jumlah / count($bilangan);

echo "Bilangan terbesar: $terbesar<br>";
echo "Bilangan terkecil: $terkecil<br>";
echo "Rata-rata: $rataRata<br>";
?>