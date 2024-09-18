<?php

namespace app\traits;


Trait View {

	private function twig(){

		$twig = new Twig();

		return $twig->loadTwig();

	}

	public function view($data, $view){
		$template = $this->twig()->load(str_replace('.','/', $view. '.html'));
		return $template->display($data);
	}
}