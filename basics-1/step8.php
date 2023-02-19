<?php 
$groceries = array("Eggs", "Milk", "Cheese", "Water Pack", "Tissues", "Watermelon");
$first_three_grocery = array_slice($groceries, 0, 3);
$last_grocery = end($groceries);
$message = "Hello Sir, do you have " . implode(", ", $first_three_grocery) . "? Also if you sell fruits can I find a $last_grocery ?";
echo "$message <br>";
$multi_array = array(
  'eggs' => array('balade', 'mazere3'),
  'milk' => array('Fresh', 'Taanayel'),
  'water-pack' => array('Tanoureen', 'Reem')
);

$another_message = "Hey Sir, Please I need 1 pack of {$multi_array["eggs"][0]} eggs and 3 {$multi_array["water-pack"][1]} Water Pack.";

echo "$another_message <br>"
?>