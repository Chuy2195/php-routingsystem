<?php

class Redirect extends Driver\Base {
	public static function toController($controller = '') {
		//$controller = strtolower($controller)."Controller";
		//$controller = new $controller();
		//$controller->execute();
                header("Location: /{$controller}");
		//exit;
	}
}