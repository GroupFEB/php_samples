<?php
$x = 75;
$y = 25;

function addition() {
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}

addition();
// since z is a variable present within the $GLOBALS array, it is also accessible from outside the function!
echo $z;
echo "<br>";
// Super Globals:
// $_SERVER is a PHP super global variable which holds information about headers, paths, and script locations.
// see: https://www.w3schools.com/php/php_superglobals.asp

echo "PHP FILE: ";
echo $_SERVER['PHP_SELF'];
echo "<br>";

echo "SERVER NAME: ";
echo $_SERVER['SERVER_NAME'];
echo "<br>";

echo "HTTP HOST: ";
echo $_SERVER['HTTP_HOST'];
echo "<br>";

echo "SERVER SOFTWARE: ";
echo $_SERVER['SERVER_SOFTWARE'];
echo "<br>";

echo "HTTP USER AGENT: ";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";

echo "SCRIPT NAME: ";
echo $_SERVER['SCRIPT_NAME'];
echo "<br>";

echo "SERVER ADDRESS: ";
echo $_SERVER['SERVER_ADDR'];
echo "<br>";
?>