<?php
//StudyCase1
$baju = false;

if($baju){
	echo "Variable baju bernilai true"; 
}
//Jika $baju bernilai false maka tidak akan muncul apa-apa

//StudyCase2
$nilai = 85;
if($nilai >= 90 && $nilai <= 100){
    echo "Peringkat A";
}elseif ($nilai >= 80 && $nilai < 90){
    echo "Peringkat B";
}elseif ($nilai >= 70 && $nila <80){
    echo "Peringkat C";
}elseif ($nilai <70){
    echo "Peringkat D";
}else{
    echo "Nilai tidak valid <hr>";
}
?>
