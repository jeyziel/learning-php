<?php

class Panda
{
    public static function whoAmI()
    {
        return self::getType();
    }

    public static function getType()
    {
        return 'I am a Giant panda!';
    }
}

class RedPanda extends Panda
{
    public static function getType()
    {
        return 'I am a Red panda!';
    }
}


echo RedPanda::whoAmI(); //I'am a giant panda
echo PHP_EOL;
echo Panda::whoAmI(); //I'am a giant panda
echo PHP_EOL;
