<?php
session_start();
require __DIR__ . '/../vendor/autoload.php';
$app = new \Slim\App([
'settings' => [
       'displayErrorDetails' => true,
]
]);
$app->get('/first', function($request, $response) {
   return 'My first route';
});

$container = $app->getContainer();
$container['view'] = function ($container) {
   $view = new \Slim\Views\Twig(__DIR__ . '/../app/templates', [
       'cache' => false,
   ]);
   $view->addExtension(new \Slim\Views\TwigExtension(
       $container->router,
       $container->request->getUri()
   ));
   return $view;
};
$container['ApiLogin'] = function ($container) {
   return new \App\Api\ApiLogin($container->view);
};
// $container['RunVideo'] = function ($container) {
//    return new \App\Api\RunVideo($container->view);
// };
$container['ApiStudent'] = function ($container) {
   return new \App\Api\ApiStudent();
};
