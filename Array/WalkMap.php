<?php 

$array1 = [2.4, 2.6, 3.5];
$array2 = [2.4, 2.6, 3.5];

print_r( array_map('floor', $array1) );

print "\n";

print_r( $array1 ); //the same array

//change array2
array_walk($array2, function (&$v, $k) { $v = floor($v); }); 
print_r($array2);

print_r(
    array_map(function ($a, $b) { return $a * $b; }, $array1, $array2)
);

// select only elements that are > 2.5
print_r(
    array_filter($array1, function ($a) { return $a > 2.5; })
);

