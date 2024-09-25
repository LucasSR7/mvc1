<?php

namespace app\controllers\portal;

use app\controllers\ContainerController;


class CursoController extends ContainerController{

	public function index(){
		dd('index');
	}

	public function show($request) {

		$this->view([
			'title' => 'Curso',
			'curso' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
		], 'portal.curso');
	}

	public function create(){
		dd('create');
	}
}
