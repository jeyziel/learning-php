<?php


require_once("./PandaException.php");

// function feedPanda( $food ) {
//     if ($food == "chocolate") {
//         throw new Exception("I'dont like chocolate");
//     }

//     echo "The panda eats {$food}";
// }

function feedPanda( $food ) {
    if ($food == "chocolate") {
        throw new PandaException;
    }

    echo "The panda eats {$food}";
}


feedPanda("maça");
feedPanda("chocolate");