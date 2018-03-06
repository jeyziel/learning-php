<?php

class Foo
{
    private $private;
    public function __construct($value)
    {
        $this->private = $value;
    }
    public function getOther(Foo $object)
    {
       return $object->private;
    }
}

$foo1 = new Foo('foo1');
$foo2 = new Foo('foo2');

print $foo1->getOther($foo2);

print "\n";
