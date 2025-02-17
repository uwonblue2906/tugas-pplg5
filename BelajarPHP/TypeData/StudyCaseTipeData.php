<?php
$string = "SMK Wikrama";

//munculin wikrama
$wikrama = substr($string, 4);
echo $wikrama; //output wikrama

echo "<br>";

//munculin smk
$SMK = substr($string, 0, 3);
echo $SMK; //output smk

echo "<br>";

//ganti SMK jadi huruf kecil semua
$string = str_replace('SMK', 'smk', $string);
echo $string; 

?>