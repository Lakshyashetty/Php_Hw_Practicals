
<?php
// echo "<h2>(a): Using FOR loop (Index Array)</h2>";

// $cars = array("Swift", "Mustang", "Model S", "City", "Fortuner");

// for ($i = 0; $i < count($cars); $i++) {
//     echo "Car: $cars[$i] <br>";
// }

// echo "<h2> (b): Using FOREACH (Associative Array)</h2>";

// $carPrices = array(
//     "Swift" => 600000,
//     "Mustang" => 7500000,
//     "Model S" => 9000000,
//     "City" => 1200000,
//     "Fortuner" => 3500000
// );

// foreach ($carPrices as $car => $price) {
//     echo "Car: $car - Price: ₹$price<br>";
// }

 echo "<h2> (c): Array Functions</h2>";

// array_push()
$cars = array("Swift", "Mustang", "Model S", "City", "Fortuner");

array_push($cars, "Thar");
echo "After array_push(): ";
print_r($cars);
echo "<br><br>";

// array_pop()
array_pop($cars);
echo "After array_pop(): ";
print_r($cars);
echo "<br><br>";

// // array_merge()
$newCars = array("BMW", "Audi");
$merged = array_merge($cars, $newCars);
echo "After array_merge(): ";
print_r($merged);
echo "<br><br>";
 
// // array_slice()
$sliced = array_slice($merged, 1, 3);
echo "After array_slice(): ";
print_r($sliced);
echo "<br><br>";

// // array_keys()
$carPrices = array(
    "Swift" => 600000,
    "Mustang" => 7500000,
    "Model S" => 9000000,
    "City" => 1200000,
    "Fortuner" => 3500000
);
echo "Keys from associative array: <br>";
$keys = array_keys($carPrices);
for ($i=0; $i <count($keys) ; $i++) { 
    echo "$keys[$i]</br>";
}
?>