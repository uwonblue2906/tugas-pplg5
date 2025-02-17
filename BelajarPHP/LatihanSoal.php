<?php
//Soal1
    $a = "25.5";
    $b = (int) $a;
    $c = (float)$a;

    echo "Integer: " . $b . "\n";
    echo "<br>";
    echo "Float: " . $c . "\n";
    echo "<hr>";
?>

<?php
//Soal2
    $sentence = "PHP is fun";
    $word = substr($sentence, 0, 3);
    $upperword = ucwords($sentence);

    echo "Nilai dari \$word: " . $word . "\n";
    echo "<br>";
    echo "Nilai dari \$upperword: " . $upperword . "\n";
    echo "<hr>";
?>

<?php
//Soal3
    $title = "SMK Wikrama Bogor";
    $karakter = strlen($title);
    $baru = str_replace("Bogor", "Indonesia", $title);
    $sesudah = strlen($baru);

    echo "Sebelum: " . $title . "\n"; 
    echo "Jumlah karakter: " . $karakter . "\n";
    echo "<br>";
    echo "Setelah: " . $baru . "\n";
    echo "Jumlah karakter: " . $sesudah . "\n";

    echo "<hr>";
    $sentence = "Belajar PHP di SMK Wikrama Bogor sangat menyenangkan";
    $sentence_before = $sentence;
    $sentence_lower = strtolower($sentence);
    $sentence_after = ucwords($sentence_lower);

    echo "Sebelum: " . $sentence_before . "\n";
    echo "<br>";
    echo "Sesudah: " . $sentence_after . "\n";
?> 