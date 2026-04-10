<?php
// a. single & double quotes
$car1 = 'This is a BMW car.';

$brand = "Audi";
$car2 = "This is a $brand car.";

echo $car1 . "<br>";
echo $car2;

// b. concatenation
$model = "Swift";
$price = "700000";

$result = "Car Model: " . $model . " Price: " . $price;

echo $result;

// c. strpos
$description = "This car is very fast and stylish.";

$word = "fast";
$pos = strpos($description, $word);

echo "String: " . $description . "<br>";
echo "Substring position: . $pos <br><br>";

// d. str_replace
$desc = "This car is red in color.";
$newdesc = str_replace("red", "blue", $desc);

echo "Original String: " . $desc . "<br>";
echo "Modified String: " . $newdesc."<br><br>";


// e. string functions
$desc = "  This is a Luxury Car  ";

echo "Original String: " . $desc . "<br>";
echo "Length: " . strlen($desc) . "<br>";
echo "Lowercase: " . strtolower($desc) . "<br>";
echo "Uppercase: " . strtoupper($desc) . "<br>";
echo "Trimmed: " . trim($desc) . "<br>";
echo "Substring: " . substr($desc, 2, 10);
?>
