<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> VERİ TİPLERİ </title>
</head>
<body>
    <?php
    // Açıklama
    # Açıklama
    /*
      Açıklama
    */
    echo "Merhaba ";
    echo "<br>";
    echo "Değerli";
    echo "<br>";
    echo "Katılımcılar! ";
    echo "<br>";echo "<br>";
    // Değişkenler ve Çarpım İşlemi:
    echo "Değişkenler: ";;echo "<br>"; echo "==========";echo "<br>";
    $deger1 = 2;
    $deger2 = 3;
    echo "Değer-1 = ";
    echo $deger1;
    echo "<br>";
    echo "Değer-2 = ";
    echo $deger2;
    $carpim = $deger1 * $deger2;
    echo "<br>";
    echo "Çarpım = ";
    echo $carpim;
    echo "<br>";echo "<br>";
    // strings:
    echo "Strings:";  echo "<br>";echo "===========";echo "<br>";
    $ad = "Eren "; $soyad = "TAŞTAN";
    echo "Ad SOYAD = "; echo $ad; echo $soyad;
    echo "<br>";
    echo "String Fonksiyonları";  echo "<br>";echo "===========";echo "<br>";
    $isim = $ad.$soyad; // Birleştirme
    echo "BİRLEŞİK İSİM : ";
    echo $isim;
    echo "<br>";
    echo "BÜYÜK HARFLİ İSİM : ";
    echo strtoupper($isim); // Küçük harf yapma
    echo "<br>";
    echo "İlk Harfler Büyük ve İsim : ";
    echo ucfirst($isim); // İlk Harfler büyük
    echo "<br>";
    echo "Bul ve Değiştir: " . str_replace("Hayati", "Eren", $isim);
    echo "<br>";
    echo "Adı Kırp: " . strstr ($isim, "TAŞTAN"); // TAŞTAN öncesini sil
    echo "<br>";
    echo "Tekrarla: " . str_repeat($ad,5);
    echo "<br>";
    echo "2.den sonra 4 tane al: " .substr($isim, 2,4);
    echo "<br>";
    echo "Ş'nin konumu (0,1,2,3,4,5,6,7,8,9,...): " . strpos($isim,"Ş");
    echo "<br>";   echo "<br>";
    echo "SAYILAR:";  echo "<br>";echo "===========";echo "<br>";
    $deger1 = 9;
    $deger2 = 7;
    echo "Değer-1 = ";
    echo $deger1;
    echo "<br>";
    echo "Değer-2 = ";
    echo $deger2;
    $toplam = $deger1 + $deger2;
    echo "<br>";
    echo "TOPLAM = ";
    echo $toplam;
    echo "<br>";echo "<br>";
    echo $bolme = $deger1 / $deger2;
    echo "VİRGÜLDEN SONRA 2 hane:" . round ($bolme,2);echo "<br>";
    echo "ÜST DEĞER : " . ceil($bolme);echo "<br>";
    echo "ALT DEĞER : " . floor($bolme);echo "<br>";
    echo "-11 için MUTLAK DEĞER : " .abs (-11);echo "<br>";
    echo "9'un karekökü         : " .sqrt(9);echo "<br>";
    echo "9'un 2'ye bölümünden kalan: " . fmod(9,2);echo "<br>";
    echo "1 - 10 arası rasgele sayı : "  .rand(1,10);echo "<br>";
    echo "DİZİLER:";  echo "<br>";echo "===========";echo "<br>";
    $bilgi = array("Eren", "TAŞTAN", "1994", array("Eren", "Emre"));
    echo "İlk eleman: " . $bilgi[0]; echo "<br>";//hayati, yazamalı
    echo "4'üncü elemanın 2'inci elemanı : " .$bilgi[3][1]; echo "<br>";// Emre yazamalı
    $bilgi[3][2]= "Ayşen";
    echo "4'üncü elemanın 3'üncü elemanı : " .$bilgi[3][2];echo "<br>";// Ayşen yazamalı
    define ("PI",3.14);
    echo "Sabit PI sayısı = ".PI;


    ?>
</body>
