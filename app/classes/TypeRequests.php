<?php

namespace app\classes;

class TypeRequests{

	private $request;


	private function getRequest(){

		return $this->request = $_SERVER['REQUEST_METHOD'];

	}

	public function verifyRequestMethod(){

		if($this->request == 'POST'){
			return false;
		}

		return true;

	}

}