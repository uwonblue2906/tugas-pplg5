<?php
//1.menghitung jumlah
$orang = ['Alisha', 'Amira', 'Dinda', 'Alvi', 'Salsa', 'Keysha', 'Nayla'];
echo 'Ditemukan data sebanyak ' . count($orang) . ' data';

echo "<hr>";

//2.menggabungkan array menjadi string
$kata = ["a", "b", "c", "d", "e"];
$kalimat = implode(", ", $kata);
echo $kalimat;

echo"<hr>";

//3.mengubah semua value/item pada array
function toUpper($value){
    return strtoupper($value);
}
$rayon = ['cicurug', 'cibedug', 'tajur'];
$upper = array_map('toUpper', $rayon);
print_r($upper);

echo "<hr>"; 

//4.Cek apakah array memiliki value tertentu 
$kendaraan = ['Mobil', 'Motor', 'Sepeda', 'Truk', 'Bus'];
if (in_array('Motor', $kendaraan))
{
	echo 'OK';
}
echo "<hr>";

//5.Cek apakah array memiliki key tertentu
$mobil = ['merk' => 'Toyota', 'type' => 'Vios', 'year' => 2016];
if (key_exists('type', $mobil))
{
	echo $mobil['type'];
}

echo "<hr>";
?>

<?php
//6.Mengurutkan value array
//asort : mengurutkan secara ascending, dari terkecil ke terbesar
$kendaraan = ['Mobil', 'Motor', 'Sepeda', 'Truk'];
asort($kendaraan);
print_r($kendaraan);
echo "<br>";
//arsort : mengurutkan dari yang terbesar ke yang terkecil
$nilai 		= [90, 70, 85, 65];
arsort($nilai);
print_r($nilai);
echo "<hr>";

//7.menggabungkan array
$kendaraan 		= ['Mobil', 'Motor', 'Sepeda', 'Truk', 'Bus'];
$mobil 			= ['merk' => 'Toyota', 'type' => 'Vios', 'year' => 2016];
$merge			= array_merge ($kendaraan, $mobil);
print_r($merge);
echo "<hr>";

//8.mencari index pada value tertentu
$kendaraan 	= ['Mobil', 'Motor', 'Sepeda', 'Truk', 'Bus'];
$key = array_search('Sepeda', $kendaraan);
unset($kendaraan[$key]); //menghapus data dengan index tersebut (unset)
print_r($kendaraan);
echo "<hr>";

//9.menghapus elemen pertama pada array
$mobil = ['merk' => 'toyota', 'type' => 'vios', 'year' => 2007];
$key = array_shift($mobil);
print_r($mobil);
echo "<hr>";

//10.Menambah element pertama pada array 
$kendaraan = ['mobil', 'motor', 'sepeda'];
array_unshift($kendaraan, 'becak', 'delman');
print_r($kendaraan);
echo "<hr>";

//11.Menambah element terakhir pada array
$kendaraan 	= ['Mobil', 'Motor', 'Sepeda'];
array_push ($kendaraan, 'Becak', 'Delman');
print_r($kendaraan);

echo "<br />";

$mobil = ['merk' => 'Toyota', 'type' => 'Vios', 'year' => 2009];
array_push ($mobil, 'Sedan');
print_r($mobil);
echo "<hr>";

//12.Menghapus element terakhir pada array : array_pop
$kendaraan 	= ['Mobil', 'Motor', 'Sepeda'];
$pop 		= array_pop($kendaraan);
print_r($kendaraan);
echo "<hr>";

//13.Membalik urutan array : array_reverse
$judul 		= ['AADC', 'Dilan 1990', 'Maze Runner'];
$reverse	= array_reverse($judul);
print_r($reverse);
echo "<hr>";

//14.Mencari nilai maksimal dan minimal pada array : max & min
$nilai 	= [90, 70, 85, 65, 80];
$max 	= max($nilai);
$min 	= min($nilai);
echo $max;
echo "<br />";
echo $min;
echo "<hr>";

//15.Menghapus element dan menggantinya dengan yang baru : array_splice()
$a1=array("pink","hijau","hitam","kuning");
$a2=array("biru","merah");
array_splice($a1,0,2,$a2);
print_r($a1);
echo "<hr>";

//16.Menentukan jumlah semua nilai dalam array : array_sum()
$a=array(5,15,25);
echo array_sum($a); 
?>