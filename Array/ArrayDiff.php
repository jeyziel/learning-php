<?php


$array1 = array("a" => "verde", "b" => "marrom", "c" => "azul", "vermelho");

$array2 = array("a" => "verde", "amarelo", "vermelho");

$result = array_diff_assoc($array1, $array2);

$result2 = array_diff($array1, $array2);

print_r($result);

print_r($result2);

