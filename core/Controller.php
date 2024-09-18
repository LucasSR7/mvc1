<?php

namespace core;

use app\exceptions\ControllerNotExistException;
use app\classes\Uri;

class Controller{

	private $uri;
	private $controller;
	private $namespace;
	// caminhos
	private $folders = [
		'app\controllers\portal',
		'app\controllers\admin',
		'app\controllers\blog'
	];

	public function __construct(){
		$this->uri = Uri::uri();
	}


	// carregar controller
	public function load(){
		if($this->isHome()){
			return $this->controllerHome();
		}

		return $this->controllerNotHome();
	}

	// rota de inicial '/'
	private function isHome(){
		return ($this->uri == '/');
	}

	// controller Home
	private function controllerHome(){
		if(!$this->controllerExist('HomeController')){
			throw new ControllerNotExistException("Esse controller não existe");
		}

		return $this->instatiateController();
	}

	// controller para o restante 'NAO HOME'
	private function controllerNotHome(){
		$controller = $this->getControllerNotHome();

		if(!$this->controllerExist($controller)){
			throw new ControllerNotExistException("Esse controller não existe");
		}

		return $this->instatiateController();
	}

	private function getControllerNotHome(){
		if(substr_count($this->uri, '/') > 1){
			list($controller, $method) = array_values(array_filter(explode('/', $this->uri)));

			return ucfirst($controller) . 'Controller';
		}

		return ucfirst(ltrim($this->uri, '/')) . 'Controller';
	}

	// verifica de controller existe
	private function controllerExist($controller){
		$controllerExist = false;

		foreach ($this->folders as $folder) {
			if(class_exists($folder.'\\'.$controller)){
				$controllerExist = true;
				$this->namespace = $folder;
				$this->controller = $controller;
			}
		}

		return $controllerExist;
	}

	// instancia de controller
	private function instatiateController(){
		$controller = $this->namespace.'\\'.$this->controller;
		return new $controller;
	}

}