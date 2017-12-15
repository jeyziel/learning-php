<?php 

class Panda
{
    public static $name;
}


Panda::$name = "jeyziel";

$panda = new Panda();

echo $panda::$name;