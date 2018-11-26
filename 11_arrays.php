<?php
$cars = array("Volvo", "BMW", "Toyota");
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
// get the leth of array:
$length = count($cars);
echo "<br>";
echo "Number of car brands: " . $length;
echo "<br>";
echo "Car Brands: ". "<br>";
// for loop using the lenth of arrays:
for($x = 0; $x < $length; $x++) {
    echo $cars[$x];
    echo "<br>";
}

// Associative arrays are arrays that use named keys that you assign to them.
// we can assign values in a line:
$year = array("Volvo"=> "2018", "BMW"=>"2017", "Toyota"=>"2019");
// we can assign values sperately:
$maxspeed['Volvo'] = "200";
$maxspeed['BMW'] = "250";
$maxspeed['Toyota'] = "180";

// Sorting arays in accending order:
//sort($year );

// Sorting arays in decending order:
//rsort($year );

foreach($year as $x => $x_value) {
    echo "Brand = " . $x . ", Year=" . $x_value;
    echo "<br>";
}

?>