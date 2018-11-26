<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> WEB SAYFALARI - YENİ SAYFA </title>
</head>
<body>
   YENİ SAYFA
   <br>
   ==========
   <?php
        echo "<br>";
        $isim =$_GET["isim"];
        $yas = $_GET["yas"];
        echo "Adınız : ".$isim;
        echo "<br>";
        echo "Yaşınız : ".$yas;
        echo "<br>";

   ?>

</body>
