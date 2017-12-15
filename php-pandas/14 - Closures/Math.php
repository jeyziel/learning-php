<?php 

//shall == will

function math( Closure $type, $first, $second ) {
    return $type( $first, $second );
}

//create a additional closure
$addition = function( int $first, int $second ) {
    return $first + $second;
};

//create a subtracion closure
$subtracion = function( int $first, int $second ) {
    return $first - $second;
};

//multiply
$multiply = function( int $first, int $second ) {
    return $first * $second;
};


echo math( $addition, 2, 3 );
echo PHP_EOL;
echo math( $subtracion, 4, 2 );
echo PHP_EOL;
echo math( $multiply, 2 ,2 );

echo PHP_EOL;