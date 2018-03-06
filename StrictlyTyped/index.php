<?php

require_once "Movie.php";
require_once "Ratings.php";
require_once "Rating.php";
require_once "GenericCollection.php";
//
//$movie = new Movie();
//
//$dates = [
//    \DateTimeImmutable::createFromFormat('Y-m-d', '2017-01-28'),
//    \DateTimeImmutable::createFromFormat('Y-m-d', '2017-02-22')
//];
//
//$movie->setAirDates(...$dates);
//
//var_dump($movie->getAirDate());

$ratings = new Ratings(
    new Rating(1.5),
    new Rating(3.5),
    new Rating(2.5)
);

// Convert the collection to an array.
$ratingsArray = $ratings->toArray();

// Remove the 2nd rating.
unset($ratingsArray[1]);
$ratingsArray = array_values($ratingsArray);

// Back to a (new) Ratings collection
$updatedRatings = new Ratings(...$ratingsArray);
$average = $updatedRatings->getAverage();
var_dump($average);