<?php
// all file:
$myfile = fopen("Sample.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("Sample.txt"));
fclose($myfile);
echo "<br>";
echo "<br>";

// reading line by line:
$myfile = fopen("Sample.txt", "r") or die("Unable to open file!");
while(!feof($myfile)) {
    echo fgets($myfile) . "<br>";
}
fclose($myfile);
echo "<br>";


// reading char by char
$myfile = fopen("Sample.txt", "r") or die("Unable to open file!");
while(!feof($myfile)) {
    echo fgetc($myfile);
}
echo "<br>";
fclose($myfile);
echo "<br>";
// create a file:

$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");

$txt = "Eren TASTAN\n";
fwrite($myfile, $txt);

$txt = "Emre TASTAN\n";
fwrite($myfile, $txt);
fclose($myfile);

$myfile = fopen("newfile.txt", "r") or die("Unable to open file!");
while(!feof($myfile)) {
    echo fgets($myfile) . "<br>";
}
fclose($myfile);

?>