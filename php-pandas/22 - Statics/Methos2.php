<?php 

class RedPanda
{
    protected $name;

    public function __construct($name = null)
    {
        $this->name = $name;
    }

    public static function make()
    {
        return new self('Hamish');
    }

    public function getName()
    {
        return $this->name;
    }
}

$redPanda = RedPanda::make();
echo $redPanda->getName();