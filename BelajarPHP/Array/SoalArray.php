<?php
$barang =['Laptop','Mouse','Keyboard', 'Monitor'];

//menggunakan index
echo $barang[0]."<br>";
echo $barang[1]."<br>";
echo $barang[2]."<br>";
echo $barang[3]."<br>";
echo "<hr>";

//menggunakan for
for ($d = 0; $d < count(value:$barang);$d++){
    echo $barang[$d]. "<br>";
}
echo "<hr>";

//menggunakan foreach tanpa indexnya
foreach ($barang as $item){
    echo "$item" . "<br>";
}
echo "<hr>";

//menggunakan foreach dengan indexnya
foreach ($barang as $index => $item){
    echo "index ke-" . $index . " = " . $item . "<br>";
}
echo "<hr>";

//menggunakan while
$d = 0;
while ($d < count(value: $barang)){
    echo $barang[$d] . "<br>";
    $d++;
}
echo "<hr>";
?>