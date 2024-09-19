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
			'teste' => 'teste',
			'curso' => 'PHP MVC',
			// 'curso' => $cursoEncontrado,
		], 'portal.curso');
	}

	public function create(){
		dd('create');
	}
}