<?php
$scores = ['80', '75', '90', '65', '85'];

for ($a = 0; $a < count($scores); $a++){ 
    echo "{$scores[$a]} <br>";
}
echo "<hr>";

//No2
$barang = ["Laptop", "Mouse", "Keyboard", "Monitor"];
    echo "Barang yang dipilih" . " adalah: {$barang[2]} <br>";
?>
<?php

//No3
$ages = ['15', '16', '17', '18', '19', '20', '21', '22'];
for ($n = 15; $n <= 22; $n++){
    if ($n % 2 === 0){
        continue; 
    }

    if ($n > 21){
        break;
    }
    echo "Siswa dengan usia $n tahun diperiksa <br>";
}
?> 