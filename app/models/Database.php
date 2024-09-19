<?php

namespace app\models;

use PDO;

class Database {
    private static $connection;

    public static function getConnection() {
        if (!self::$connection) {
            $config = require __DIR__ . '/../config.php';
            $dbConfig = $config['database'];

            $dsn = "mysql:host={$dbConfig['host']};dbname={$dbConfig['dbname']};charset={$dbConfig['charset']}";
            self::$connection = new PDO($dsn, $dbConfig['username'], $dbConfig['password'], $dbConfig['options']);
        }
        return self::$connection;
    }
}