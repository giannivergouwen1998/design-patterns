<?php

namespace App\Singleton;

use Exception;

final class Database
{
    private static Database $connection;

    private function __construct()
    {
        echo "Connection created!";
    }

    public static function connect(): Database
    {
        if (!isset(self::$connection)) {
            self::$connection = new Database();
        }

        return self::$connection;
    }

    public function __clone()
    {
        throw new Exception("Can't clone a singleton");
    }
}
