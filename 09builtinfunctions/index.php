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
