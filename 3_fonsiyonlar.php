<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> FONKSIYONLAR </title>
</head>
<body>
    <?php

    // function:
    echo "function : "."<br>"."================="."<br>";

    function topla($a,$b){
        return $a + $b;
    }

    function yaz($ifade) {
        echo $ifade;
    }
    yaz("TOPLAMA SONUCU: ");
    $toplam = topla (5,6);
    yaz ($toplam);
    echo "<br>";echo "<br>";
    // Global Değişken Kullanımı:
    echo "Global Değişken Kullanımı : "."<br>"."================="."<br>";

    $pi = 3.14;
    function daire_cevresi($r){
        Global $pi;
        return 2*$pi*$r;
    }

    $cevre = daire_cevresi(3);
    yaz("DAİRE ÇEVRESİ=".$cevre);

    echo "Varsayılan Değişken Kullanımı : "."<br>"."================="."<br>";
    function selamla($selam = "Merhaba"){
        echo $selam . "<br>";
    }
    selamla();
    selamla("Günaydın");


    ?>
</body>
