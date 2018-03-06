<?php declare(strict_types=1);

require_once "GenericCollection.php";

class Ratings extends GenericCollection implements IteratorAggregate
{

    public function __construct(Rating ...$ratings) {
        $this->values = $ratings;
    }

    public function getAverage() : Rating {

        if (empty($this->values)) {
            return new Rating(0);
        }

        $total = 0;

        foreach ($this->values as $rating) {
            $total += $rating->getValue();
        }

        $average = $total / count($this->values);
        return new Rating($average);
    }


}