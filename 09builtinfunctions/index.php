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
