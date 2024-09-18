<?php

namespace app\traits;

trait Logger {
    public function log($message) {
        echo "[LOG] " . $message . "\n";
    }
}