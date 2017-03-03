<?php
class Dispatcher
{
	public function dispatch($routerInfo)
	{
		include "controllers/" . $routerInfo['controllerName'] . 'Controller.class.php';
	 	$Controller = new $routerInfo['controllerName']();
	 	$Controller->$routerInfo['action']();
	}
}