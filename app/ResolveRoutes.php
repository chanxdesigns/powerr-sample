<?php

namespace Iapac\Panel\App;

class ResolveRoutes {
	/**
	 * Controller namespace
	 * @var string
	 */
	static private $namespace = 'Iapac\Panel\Http\Controllers';

	/**
	 * Resolve controller and execute the method
	 * @param $match
	 * @return string
	 */
	static function resolve($match) {
		if (!$match) {
			http_response_code(404);
			return view('error', array('title' => 'Something is wrong'));
		}

		$controller = explode('@', $match['target'])[0];
		$method = explode('@', $match['target'])[1];

		require '../http/controllers/'.$controller.'.php';

		$controller = self::$namespace.'\\'.$controller;

		$instance = new $controller;

		call_user_func_array(array($instance, $method), $match['params']);
	}

}