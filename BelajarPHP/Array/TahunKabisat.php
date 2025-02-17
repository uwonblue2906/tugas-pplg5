<?php

    $tahun=[];
    for ($i= 1600; $i<=  2025; $i++) {
      if ($i % 400 == 0){
        $tahun[]=$i;
        echo "Ini adalah tahun kabisat $i <br>";
      } elseif ($i % 100 == 0 && $i % 400 !=0){
        echo "Ini bukan tahun kabisat $i <br>";
      } elseif ($i % 4 == 0) {
        echo "Ini adalah tahun kabisat $i <br>";
      } elseif ($i % 4 == 0 && $i % 100 != 0){
        echo "Ini bukan tahun kabisat $i <br>";
}   else  {
     echo "Ini bukan tahun kabisat $i <br>";
    }
} 
echo "<hr>";

$buku= 50;
$harga=5000;
$eksemplar = $buku * 10;
echo " Dia membeli buku sebanyak $buku
 <br>";
$total=$eksemplar * $harga;
echo "Jadi total harga adalah Rp,$total. <br>";


if ($eksemplar <= 100 ){
    echo"Tidak ada diskon";
} else if ($eksemplar > 100 && $eksemplar <200){
        echo "Diskon nya adalah 5%";
    } else if ($eksemplar <= 200) {
        echo "Diskon nya adalah 15%";
} else if ($eksemplar > 200){
    if ($eksemplar > 100 && $eksemplar <200){
        echo "Diskon nya adalah 7%";
    }else if ($eksemplar > 200 && $eksemplar <= 300){
        echo "Diskon nya adalah 17%";
} else {
    echo "Diskon nya adalah 27%";
}
}
?>
