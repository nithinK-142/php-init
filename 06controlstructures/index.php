<?php

// **Conditions:**

// If statement
$age = 18;
if ($age >= 18) {
    echo "You are an adult.";
} else {
    echo "You are a minor.";
}

// If...else if...else statement
$day = 3;
if ($day == 1) {
    echo "Monday";
} else if ($day == 2) {
    echo "Tuesday";
} else if ($day == 3) {
    echo "Wednesday"; // Output: Wednesday
} else {
    echo "Invalid day";
}

// Ternary operator
$result = ($age >= 18) ? "You can vote" : "You cannot vote";
echo $result; // Output: You can vote

// **Control Structures:**
// **Loops:**

// For loop
for ($i = 1; $i <= 5; $i++) {
    echo $i . " "; // Output: 1 2 3 4 5
}

// While loop
$count = 1;
while ($count <= 3) {
    echo "Count: " . $count . "<br>";
    $count++;
}

// Do...while loop
$number = 1;
do {
    echo $number . " "; // Output: 1 2 3 4 5
    $number++;
} while ($number <= 5);

// Foreach loop (for arrays)
$fruits = array("apple", "banana", "orange");
foreach ($fruits as $fruit) {
    echo $fruit . "<br>";
}

// **Switch statement:**

$day = 3;
switch ($day) {
    case 1:
        echo "Monday";
        break;
    case 2:
        echo "Tuesday";
        break;
    case 3:
        echo "Wednesday"; // Output: Wednesday
        break;
    default:
        echo "Invalid day";
}

//  match
$value = "42";
$result = match (true) {
    $value === 42 => "Integer value",
    $value === "42" => "String value", // Output: String value
    default => "Unknown value",
};

echo $result;

// **Control Transfer Statements:**

// Break (used to exit a loop or switch statement)
for ($i = 1; $i <= 10; $i++) {
    if ($i == 5) {
        break; // Exit the loop when $i is 5
    }
    echo $i . " ";
} // Output: 1 2 3 4

// Continue (used to skip the current iteration of a loop)
for ($i = 1; $i <= 10; $i++) {
    if ($i % 2 == 0) {
        continue; // Skip even numbers
    }
    echo $i . " ";
} // Output: 1 3 5 7 9

?>