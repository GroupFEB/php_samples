<?php
echo "Today is " . date("d/m/Y") . "<br>";
echo "Today is " . date("d.m.Y") . "<br>";
echo "Today is " . date("d-m-Y") . "<br>";
echo "Today is " . date("l");
echo "<br>";

// curent time of server:
date_default_timezone_set("Europe/Istanbul");
echo "The time is " . date("h:i:sa");
echo "<br>";

// create a user defined date and time:
$date_of_birth =mktime(22, 30, 54, 1, 12, 1994);
echo "Date of Birth of Eren is: " . date("d-m-Y h:i:sa", $date_of_birth);
echo "<br>";

//Create a Date From a String:
$d=strtotime("10:30pm April 15 2014");
echo "Created date is " . date("d-m-Y h:i:sa", $d);
echo "<br>";

//output the dates for the next six Saturdays:
$startdate = strtotime("Saturday");
$enddate = strtotime("+6 weeks", $startdate);

while ($startdate < $enddate) {
    echo date("M d", $startdate) . "<br>";
    $startdate = strtotime("+1 week", $startdate);
}
echo "<br>";

//output the number of days until 12th of January:
$d1=strtotime("January 12");
$d2=ceil(($d1-time())/60/60/24);
echo "There are " . $d2 ." days until 12th of January.";

?>