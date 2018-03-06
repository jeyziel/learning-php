<?php
/**
 * Created by PhpStorm.
 * User: jeyziel
 * Date: 06/03/18
 * Time: 11:26
 */

abstract class GenericCollection implements IteratorAggregate
{

    protected $values;

    public function toArray()
    {
        return $this->values;
    }

    public function getIterator()
    {
        return new ArrayIterator($this->values);
    }
}