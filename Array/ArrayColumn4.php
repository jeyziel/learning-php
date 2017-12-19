<?php

function dictionaryFilterList(array $source, array $data, string $column) : array
{
    $new     = array_column($data, $column);
    $keep     = array_diff($new, $source);

    return array_intersect_key($data, $keep);
    //return $keep;
}

// Usage:

$users = [
    ['first_name' => 'Jed', 'last_name' => 'Lopez'],
    ['first_name' => 'Carlos', 'last_name' => 'Granados'],
    ['first_name' => 'Dirty', 'last_name' => 'Diana'],
    ['first_name' => 'John', 'last_name' => 'Williams'],
    ['first_name' => 'Betty', 'last_name' => 'Boop'],
    ['first_name' => 'Dan', 'last_name' => 'Daniels'],
    ['first_name' => 'Britt', 'last_name' => 'Anderson'],
    ['first_name' => 'Will', 'last_name' => 'Smith'],
    ['first_name' => 'Magic', 'last_name' => 'Johnson'],
];


// Array
// (
//     [0] => Jed
//     [1] => Carlos
//     [3] => John
//     [4] => Betty
//     [6] => Britt
//     [7] => Will
//     [8] => Magic
// )

print_r($users);

print_r(dictionaryFilterList(['Dirty', 'Dan'], $users, 'first_name'));
