<?php

date_default_timezone_set('America/Bahia');

$dataTimeNow = strtotime("now");
$dataTimeSunday = strtotime("next sunday");

echo "faltam " . date('d H:i:s', $dataTimeSunday - $dataTimeNow);


$dateNextMonday = date('now', strtotime('next sunday'));
//echo $dataTimeNow;
//echo ($dateNextMonday) - date('h:i:s');
echo PHP_EOL;