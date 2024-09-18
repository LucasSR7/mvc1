<?php

namespace app\classes;

use app\traits\Logger;

class User{

	public function __construct($name) {
        $this->log("User created: $name");
    }
}