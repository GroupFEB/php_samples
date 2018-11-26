<!DOCTYPE html>
<?php
    // setcookie() işlevi, HTTP başlıklarının kalanıyla gönderilmek üzere bir çerez tanımlar.
    // Diğer başlıklar gibi, çerezlerde betiğinizin herhangi bir çıktısından önce gönderilmelidir (bu bir protokol kısıtlamasıdır).
    // Bu kısıtlama, bu işleve yapılacak çağrıların, <html> ve <head> etiketleri ve hatta her türlü boşluk karakteri çıktısından bile önce yer almasını gerektirir.
    //
    //Çerezler bir kere atandı mı, artık $_COOKIE dizisi ile sonraki sayfa yüklemesinde erişilebilir olacaktır.
    //Çerez değerleri ayrıca, $_REQUEST içinde de mevcut olabilir.
    $cookie_name = "UserName";
    $cookie_value = "Eren Tastan";
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
?>
<html>
<body>

    <?php
        if(!isset($_COOKIE[$cookie_name])) {
            echo "Cookie named '" . $cookie_name . "' is not set!";
        } else {
            echo "Cookie '" . $cookie_name . "' is set!<br>";
            echo "Value is: " . $_COOKIE[$cookie_name];
    }
    ?>

    <p><strong>Note:</strong> You might have to reload the page to see the value of the cookie.</p>

</body>
</html>