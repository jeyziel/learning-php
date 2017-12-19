<?php 

$record = [
    [
        'id' => 2135,
        'first_name' => 'Jhon',
        'last_name' => 'Jhoe',
    ],
    [
        'id' => 2122,
        'first_name' => 'Jeyziel',
        'last_name' => 'Gama'
    ],
];

$first_names = array_column($record, 'first_name');
print_r( $first_names );

//retorna o last name indexado pela coluna id
$last_names = array_column($record, 'last_name', 'id');
print_r($last_names);