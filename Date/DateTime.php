<?php 

$date = new DateTime('now', new DateTimeZone('America/Sao_paulo'));

echo $date->format('H:i:s');

echo PHP_EOL;



