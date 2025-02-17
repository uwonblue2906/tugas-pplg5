<?php

// contoh perulangan for & studycase
for ($i = 10; $i > 0; $i--){
    echo "{$i} <br>";
}

echo "<hr>";
for ($i = 1; $i <= 10; $i++) {
    echo "{$i} <br>";
}
// jadi jawabannya adalah jika memakai (--) itu meghitung dari 1-10
// jika yang menggunakan (++) itu menghitung dari 10-1


// contoh Array & studycse

  echo "<hr>";
$list = ['RPL', 'Wajib', 'Ngulik'];

for ($i = 0; $i < count($list); $i++) {

    echo "{$list[$i]} <br>";
}
// jika  ( count($list) ) menjadi satu maka yang muncul hanya (wajib, ngulik)


// contoh Break dan Continue serta studycase

# inisialisasi variabel tidak harus dari angka 0
echo "<hr>";
for ($i = 1; $i <= 50; $i++) {
    if ($i % 10 === 0) {
      continue; # skip perulangan jika nilai $i habis dibagi 10
    }
    
    echo "Perulangan ke-{$i} <br>";

    if ($i > 40) {
      break; # hentikan perulangan jika $i lebih dari 40
    }
}
// jika continue dan break dihapus maka perulangan sampai angka 50 pas
// dan jika tida dihapus maka angka nya sampe ke 41 saja

// sintaks singkat dan studycase
echo"<hr>";
$list = ['RPL', 'Wajib', 'Ngulik'];

foreach ($list as $key => $lis) {
    echo "[{$key}] Nama : {$lis} <br>";
}
// jawaban yang saya dapat yaituu masi tetap sama dan berfungsi

?>