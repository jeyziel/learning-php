<?php
/**
 * Created by PhpStorm.
 * User: jeyziel
 * Date: 06/03/18
 * Time: 11:07
 */

class AirDates implements IteratorAggregate
{
    private $dates = [];

    public function __construct(\DateTimeImmutable ...$dates)
    {
        $this->dates = $dates;
    }

    public function getIterator()
    {
        return new ArrayIterator($this->dates);
    }

}