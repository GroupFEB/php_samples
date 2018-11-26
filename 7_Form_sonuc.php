<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title> FORM -Sonuç </title>
    </head>
    <body>
       FORM - SONUÇ
       <br>
       =============
       <br><br><br>
       <?php
          $kullanici_adi = $_POST["k_ad"];
          $kullanici_sifre = $_POST["sifre"];
          echo "Kullanıcı Adınız: ".$kullanici_adi."<br>";
          echo "Kullanıcı Şifreniz: ".$kullanici_sifre."<br>";
       ?>

     </body>
</html>
