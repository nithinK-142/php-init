<?php
// for
for ($i = 1; $i <= 5; $i++) {
    echo "The value of i is: " . $i . "<br>";
}
echo "</br>";


$i = 1;
// while
while ($i <= 5) {
    echo "The value of i is: " . $i . "<br>";
    $i++;
}
echo "</br>";

// do while
$i = 6;
do {
    echo "The value of i is: " . $i . "<br>";
    $i++;
} while ($i <= 5);
echo "</br>";


// foreach 
$colors = array("red", "green", "blue", "yellow");
foreach ($colors as $color) {
    echo "Color: " . $color . "<br>";
}

$colors = array(
    "r" => "red",
    "g" => "green",
    "b" => "blue",
    "y" => "yellow"
);

// foreach with associative array
foreach ($colors as $key => $value) {
    echo "Key: " . $key . ", Color: " . $value . "<br>";
}