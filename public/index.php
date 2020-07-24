<?php
declare(strict_types = 1);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);



use Symfony\Component\Routing\Loader\YamlFileLoader;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\Routing\Router;
use Taran\App;

require_once __DIR__ . '/../vendor/autoload.php';

$appRoot = dirname(__DIR__);

$router = new Router(
    new YamlFileLoader(new FileLocator([$appRoot . '/etc'])),
    'routes.yml',
    ['cache_dir' => $appRoot . '/var/cache']
);

$request = \Symfony\Component\HttpFoundation\Request::createFromGlobals();
$response = (new App($appRoot, $router))->handle($request);
$response->send();


//
//$request = $httpFactory->createRequest($symfonyRequest);
//$router->setContext((new RequestContext())->fromRequest($symfonyRequest));

//try {
//    $handlerMeta = $router->matchRequest($symfonyRequest);
////var_dump($handlerMeta);
//    /** @var string $controller */
//    $controller = $handlerMeta['_controller'];
//
//    /** @var string $action */
//    $action = $handlerMeta['_action'];
//
//    $response = (new $controller)->$action($request, $handlerMeta);
//
//} catch (ResourceNotFoundException $e) {
//    $response = $psr17Factory->createResponse(404, 'Handler not found');
//
//} catch (Exception $e) {
//    $response = $psr17Factory->createResponse(500, 'Internal server error');
//}
//(new HttpFoundationFactory())->createResponse($response)->send();

//if ($symfonyRequest->get('page') === 'foo') {
//    $response = (new FooController())->run($request);
////    $response = new Response("FOO page");
//
//} else {
//    $response = (new IndexController())->run($request);
////    $response = new Response("Index page");
//}

//var_dump($request);
//echo $response->getBody();

//
//if (isset($_GET['page']) && $_GET['page'] === 'foo' ) {
//   echo "FOO page";
//} else echo "Index page";
