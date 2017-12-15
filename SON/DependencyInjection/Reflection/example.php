<?php 

use SON\DI\Resolver;

require_once(__DIR__ . '/vendor/autoload.php');

class TestAdapter
{
    public function __construct()
    {
        var_dump(TestAdapter::class.'::__construct()');
    }
    public function runTest($message)
    {
        var_dump($message);
    }
}
class Tester
{
    public function __construct(TestAdapter $adapter)
    {
        $adapter->runTest('rodou um teste');
    }
}
$tester = ( new Resolver )->resolveClass('Tester');
// $testAdapter = ( new Resolver )->resolveClass('TestAdapter');
// $testAdapter->runTest('oi bb');