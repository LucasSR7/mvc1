<?php

require "../bootstrap.php";

use core\Controller;
use core\Method;
use core\Parameters;
use app\classes\User;

$user = new User("John Doe");

echo $user;

try {
	$controller  = new Controller();
	$controller = $controller->load();

	$method = new Method;
	$method = $method->load($controller);

	$parameters = new Parameters;
	$parameters = $parameters->load();

	$controller->$method($parameters);

} catch (\Exception $e) {
	dd($e->getMessage());
}

