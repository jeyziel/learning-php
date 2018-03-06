<?php 

$cidade = 'juazeiro';
$estado = 'BA';
$evento = 'seila';

$localidade = ['cidade','estado'];

$result = compact('evento','nothing_here',$localidade);

print_r($result);