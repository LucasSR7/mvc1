<?php

namespace app\controllers\portal;

class CursoController{
	public function index(){
		dd('index');
	}

	public function show($request){
		$this->view([
			'curso' => 'Curso PHP MVC',
		], 'portal.cursos');
	}

	public function create(){
		dd('create');
	}
}