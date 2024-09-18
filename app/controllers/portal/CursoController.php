<?php

namespace app\controllers\portal;

class CursoController{
	public function index(){
		dd('index');
	}

	public function show($request){
		dd($request->next);
	}

	public function create(){
		dd('create');
	}
}