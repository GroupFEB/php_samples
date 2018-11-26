<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title> OTURUMLAR (Sessions) </title>
    </head>
    <body>
        <?php
            // When you work with an application, you open it, do some changes, and then you close it.
            // This is much like a Session. The computer knows who you are.
            session_start();
                $_SESSION["ad"] = "Eren";
                $_SESSION["soyad"] = "Tastan";
                $ad_soyad = $_SESSION["ad"] . " " . $_SESSION["soyad"];
                echo "Session Variables are set as " . $ad_soyad;
                // show all session varibles
                print_r($_SESSION);

                // Oturum öldürülmek istenirse oturum çerezinin de silinmesi gerekir.
                // Dikkat: Bu sadece oturum verisini değil, oturumu da yok edecektir!
                if (isset($_COOKIE[session_name()])) {
                    setcookie(session_name(), '', time()-600, '/');
                }

                // remove all session variables:
                session_unset();
                // Son olarak oturumu yok ediyoruz.
                session_destroy();
                echo "All session variables are now removed, and the session is destroyed."
        ?>
     </body>
</html>