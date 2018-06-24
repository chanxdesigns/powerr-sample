<?php

namespace Iapac\Panel\App;

/**
 * Generate views for the Http Request
 * @param string $viewName
 * @param array $variables
 */
function view(string $viewName, array $variables = []) {
	$loader= new \Twig_Loader_Filesystem(realpath('views'));
	$twig = new \Twig_Environment($loader, array(
		"cache" => 'views/cache/',
		"auto_reload" => true
	));

	echo $twig->render($viewName.'.view.html', $variables);
}