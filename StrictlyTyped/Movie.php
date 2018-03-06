<?php declare(strict_types=1);


class Movie
{
    private $airDates;
    private $ratings;

    public function __construct(AirDates $airdates, Ratings $ratings) {
        $this->airDates = $airdates;
        $this->ratings = $ratings;
    }

    public function getAirDates() : AirDates {
        return $this->airDates;
    }

    public function getRatings() : Ratings {
        return $this->ratings;
    }
}