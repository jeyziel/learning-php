<?php 

use App\Router\Router;

require_once("./vendor/autoload.php");

$path_info = $_SERVER['PATH_INFO'] ?? '/';
$request_method = $_SERVER['REQUEST_METHOD'] ?? 'GET';

$router = new Router($path_info, $request_method);
$router->get('/hello', function() {
	return 'ola mundo';
});

$result = $router->run();
echo $result['callback']();
