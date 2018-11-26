<?php
function setHeight($height = 50) {
    echo "The height is : $height <br>";
}

setHeight(100);
setHeight(); // will use the default value of 50
setHeight(200);
?>