<?php 


class Person
{
    private $name;
    private $id;

    public function __construct(String $name, int $id)
    {
        $this->name = $name;
        $this->id = $id;
    }

    public function __get($prop)
    {
        return $this->$prop;
    }

    public function __isset( $prop ) : bool
    {
        return isset( $this->$prop );
    }

}

$people = [
    new Person('Fred',151),
    new Person('Jane',1515),
    new Person('John',1516),
];

print_r(array_column($people, 'name','id'));
