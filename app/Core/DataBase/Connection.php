<?php

namespace App\Core\DataBase;
use App\Core\DataBase\Connection\ConnectionInterface;
use PDO;

class Connection implements ConnectionInterface
{
    public static $instance;

    public function Connection()
    {
        if(is_null(self::$instance))
        {
            self::$instance = new PDO ("mysql:host=localhost;dbname=chtroom;", "root", "");
        }
        return self::$instance;
    }
}