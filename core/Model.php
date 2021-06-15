<?php

namespace Core;

use App\Config\Config;
use mysqli;

class Model
{

    public static function getDB()
    {
         $db = null;

        if ($db === null) {
            $db = new mysqli(Config::DB_HOST,Config::DB_USER,Config::DB_PASSWORD, Config::DB_NAME);;
            // Check connection
            if ($db->connect_error) {
                die("Connection failed: " . $db->connect_error);
            }
        }

        return $db;
    }
}
