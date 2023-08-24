<?php

require __DIR__ . '/../vendor/autoload.php';

$dotEnv = new \Dotenv\Dotenv(base_path(''));
$dotEnv->load();

$container = new \League\Container\Container();
$container->share('response', \Zend\Diactoros\Response::class);
$container->share('request', function () {
   return \Zend\Diactoros\ServerRequestFactory::fromGlobals(
       $_SERVER, $_GET, $_POST, $_COOKIE, $_FILES
   );
});

$container->addServiceProvider(new \Application\Providers\SessionServiceProvider);

Kint::dump($container->get(\Application\Services\Session::class));

