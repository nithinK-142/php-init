<?php

$a = 10;
$b = 3;

echo ("Arithmetic Operators");
// Addition
echo $a + $b; // Output: 13
echo "</br>";

// Subtraction
echo $a - $b; // Output: 7
echo "</br>";
// Multiplication
echo $a * $b; // Output: 30
echo "</br>";

// Division
echo $a / $b; // Output: 3.3333333333333
echo "</br>";

// Modulus (remainder)
echo $a % $b; // Output: 1
echo "</br>";

// Power
echo $a ** $b; // Output: 1000
echo "</br>";
echo "</br>";


echo ("Assignment Operators");
$x = 5; // Simple assignment

$y = 10;
$y += 5; // $y = $y + 5; Result: $y = 15 (Compound assignment)

$z = 20;
$z -= 10; // $z = $z - 10; Result: $z = 10

$a = 10;
$b = 20;
echo "</br>";
echo "</br>";


echo ("Comparison Operators");
echo "</br>";
// Equal
var_dump($a == $b); // Output: bool(false)

// Identical (same value and type)
var_dump($a === $b); // Output: bool(false)

// Not equal
var_dump($a != $b); // Output: bool(true)

// Not identical
var_dump($a !== $b); // Output: bool(true)

// Greater than
var_dump($a > $b); // Output: bool(false)

// Less than
var_dump($a < $b); // Output: bool(true)
echo "</br>";
echo "</br>";


echo ("Logical Operators");
echo "</br>";
$x = true;
$y = false;

// AND
var_dump($x and $y); // Output: bool(false)

// OR
var_dump($x or $y); // Output: bool(true)

// NOT
var_dump(!$x); // Output: bool(false)

// XOR (exclusive OR)
var_dump($x xor $y); // Output: bool(true)
echo "</br>";
echo "</br>";


echo ("Increment/Decrement Operators");
echo "</br>";
$a = 5;

// Pre-increment
echo ++$a; // Output: 6 (increments $a by 1, then returns the new value)

$b = 10;

// Post-decrement
echo $b--; // Output: 10 (returns the original value, then decrements $b by 1)
?>