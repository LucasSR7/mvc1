<?php

namespace core;

class Twig{

	private $twig;
	private $functions = [];


	public function load(){
		$this->twig = new \Twig_Environment($this->loadViews(),[
			'debug' => true,
			'auto_reload' => true
		]);

		return $this->twig;
	}

	private function loadViews(){

		return new \Twig_Load_FileSystem('../app/views');

	}

}