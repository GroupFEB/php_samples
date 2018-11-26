<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> KONTROL DEYİMLERİ </title>
</head>
<body>
    <?php

    // if deyimi:
    echo "if  DEYİMİ : ";;echo "<br>"; echo "==========";echo "<br>";
    $a = 3;
    $b = 4;
    if ($a > $b) {
        echo "a büyüktür b";
    } elseif ($a == $b) {
        echo "a eşittir b";
    } else{
        echo "a küçüktür b";
    }
    echo "<br>";   echo "<br>";

    // case deyimi:
    echo "case DEYİMİ : ";;echo "<br>"; echo "==========";echo "<br>";
    $cevap = "K";
    switch ($cevap){
        case "Y":
            echo "cevap değişkenin değeri : Y'dir";
            break;
        case "N";
            echo "cevap değişkenin değeri : N'dir";
            break;
        default;
            echo "cevap değişkenin değeri : Y veya N değildir.";
            break;
    }
    echo "<br>"; echo "<br>";
    // while deyimi:
    echo "while DEYİMİ : ";echo "<br>"; echo "==========";echo "<br>";
    $sayac = 0;
    while ($sayac <=10){
        echo "SAYAC = ".$sayac;
        echo "<br>";
        $sayac++;
    }
    echo "<br>"; echo "<br>";
    // for deyimi:
    echo "for DEYİMİ : ";echo "<br>"; echo "==========";echo "<br>";
    $sayac = 0;
    for ($sayac =0; $sayac <=10; $sayac++){
        echo "SAYAC = ".$sayac;
        echo "<br>";
    }
    echo "<br>"; echo "<br>";

    // foreach deyimi:
    echo "foreach DEYİMİ : ";echo "<br>"; echo "==========";echo "<br>";
    $kisiler = Array("Hayati", "Eren", "Emre");
    foreach($kisiler as $kisi) {
        echo $kisi."<br>";
    }
    echo "<br>"; echo "<br>";
    // continue deyimi:
    echo "continue DEYİMİ : ";echo "<br>"; echo "==========";echo "<br>";
    $sayac = 0;
    for ($sayac =0; $sayac <=10; $sayac++){
        if ($sayac ==5) {
            echo "( 5 atlandı )"."<br>";;
            continue;
        }
        echo "SAYAC = ".$sayac;
        echo "<br>";
    }
    echo "<br>"; echo "<br>";

    // break deyimi:
    echo "break DEYİMİ : ";echo "<br>"; echo "==========";echo "<br>";
    $sayac = 0;
    for ($sayac =0; $sayac <=10; $sayac++){
        if ($sayac ==5) {
            echo "( 5 ve sonrası kesildi )"."<br>";;
            break;
        }
        echo "SAYAC = ".$sayac;
        echo "<br>";
    }
    // pointer (dizi işaretçiis):
    echo "dizi işaretçisi : ";echo "<br>"; echo "==========";echo "<br>";
    $dizi = Array(10,20,30,40);
    echo "Eleman : " .current($dizi)."<br>";
    next($dizi);
    echo "Eleman: " .current($dizi)."<br>";
    reset($dizi);
    echo "Eleman: " .current($dizi)."<br>";


    ?>
</body>