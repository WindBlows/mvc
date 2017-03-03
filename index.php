<?php
require "./lib/router.php";
require "./lib/dispatcher.php";

$router = new Router();
$dispatch = new Dispatcher();

$routerInfo = $router->route();
$dispatch->dispatch($routerInfo);
