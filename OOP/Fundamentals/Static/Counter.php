<?php 

class Counter
{
    private static $counter = 0;

    public static function increment(int $value)
    {
        self::$counter += $value;
    }

    public static function getCounter() : int
    {
        return self::$counter;
    }

}

Counter::increment(1);
Counter::increment(2);

$count = Counter::getCounter();


echo $count;

print "\n";


$count2 = new Counter();
$count2::increment(1);
echo $count2::getCounter();

print "\n";

echo Counter::getCounter();


print "\n";
