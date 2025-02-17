<?php
    //No1
    $sisi = 4;
    $luaspersegi = $sisi * $sisi; // rumus luas persegi
    echo "Luas Persegi dengan sisi $sisi cm: $luaspersegi cm**2";
    echo "<hr>"; 

    // No2
    $jari_jari = 8; 
    $luaslingkaran = 3.14 * ($jari_jari * $jari_jari); // rumus luas lingkaran
    echo "Luas Lingkaran dengan jari-jari $jari_jari cm: " . round($luaslingkaran, 2) . " cm**2"; // dibulatkan 2 desimal
    echo "<hr>"; 

    // No3
    $a = 19;
    $b = 20;

        $c = $a > $b;
        echo "$a > $b: $c";
        echo "<hr>";

        $c = $a < $b;
        echo "$a < $b: $c";
        echo "<hr>";
        
        $c = $a == $b;
        echo "$a == $b: $c";
        echo "<hr>";

        $c = $a != $b;
        echo "$a != $b: $c";
        echo "<hr>";

        $c = $a >= $b;
        echo "$a >= $b: $c";
        echo "<hr>";

        $c = $a <= $b;
        echo "$a <= $b: $c";
        echo "<hr>";
?>