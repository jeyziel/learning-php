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
    public function __construct(TestAdapter $adapter, String $message)
    {
        $adapter->runTest($message);
    }
}
// $tester = ( new Resolver )
//             ->resolveClass('Tester',['message' => 'rodou um teste']);
// $testAdapter = ( new Resolver )->resolveClass('TestAdapter');
// $testAdapter->runTest('oi bb');
$func = function(Tester $tester, TestAdapter $test_adapter, $message = 'Teste de closure') {
    var_dump($test_adapter->runTest($message));
};
$tester2 = ( new Resolver )->resolveFunction($func, ['message'=>'Teste de closure com injeção externa']);