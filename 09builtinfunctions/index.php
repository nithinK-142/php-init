<?php
// string functions
$str = "Hello World!";
// string length
echo strlen($str)."\n";

// position of an element
echo strpos($str, "W")."\n";

// replace
echo str_replace("World!","PHP!!",$str);

// explode
print_r(explode(" ", $str));


// math functions
$number = -7.7;
// absolute
echo abs($number);

// round
echo round($number);

// ceil
echo ceil($number);

// power
echo pow(2, 2);

// sqrt
echo sqrt(64);

// random number
echo "\n".rand(1,100);


// array functions
$arr = ["one","two","three"];

echo "\n".count($arr);

echo "\n".array_push($arr, "four");
print_r($arr);

// pop
echo "\n".array_pop($arr);
print_r($arr);

// slice
$slicedArr = array_slice($arr, 1, 2);
echo "\nSliced array:";
print_r($slicedArr);

// splice
$splicedArr = array_splice($arr, 1, 1, ["new_value"]);
echo "\nSpliced array:";
print_r($arr);
echo "\nRemoved values:";
print_r($splicedArr);

// reverse
print_r(array_reverse($arr));

// merge
print_r(array_merge(["first_array"],["second_array"]));
