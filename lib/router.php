<?php
class Router
{
	 public function route()
	 {
	 	$controllerName = 'index';
        $action = 'index';
        $param = array();
	 	$url = $_GET['url'];
	 	if ($url) {
	 		$urlArray = explode('/', $url);
			$urlArray = array_filter($urlArray); 
			$controllerName = $urlArray[0];
			array_shift($urlArray);
			$action = $urlArray[0];
			array_shift($urlArray);
			$param = $urlArray[0];
			$res = array('controllerName'=>$controllerName, 'action'=>$action);
	 	}
	 	return $res;

	 }

}