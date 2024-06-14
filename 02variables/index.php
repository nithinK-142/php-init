<?php
// Scalar variables in PHP

// String
$name = "John Doe";
echo "My name is $name";  // Output: My name is John Doe
echo 'My name is $name';  // Output: My name is $name (single quotes treat the variable as a literal string)

echo "</br>";

// Integer
$age = 25;
echo "I am $age years old."; 

echo "</br>";

// Float
$price = 9.99;
echo "The price is $price";

echo "</br>";

// Boolean
$isStudent = true;
echo "Student status: " . ($isStudent ? "Yes" : "No");

echo "</br>";

// Null
$value = null;
var_dump($value);

echo "</br>";

// Default Values 
$int = 0;
$float = 0;
$string = "";
$bool = false;

$array = [];
$object = null;