<?php

namespace Core;

use Exception;

class SessionHandler
{

    //automatizar sesiones
    //agregar session
    public static function addSession(string $name, string $value)
    {

        if ($name != '' && !empty($name && $value != '' && !empty($value))) {
            return $_SESSION[$name] = $value;
        }
        throw new Exception("name and value required");
    }

    //obtener session
    public static function getSession(string $name)
    {
        return $_SESSION[$name];
    }

    //revisar si la session existe
    public static function existSession(string $name)
    {

        if ($name != '' && !empty($name)) {
            return (isset($_SESSION[$name])) ? true : false;
        }
        throw new Exception('name is required');
    }

    //unset session
    public static function removeSession(string $name)
    {
        
        if(self::existSession($name)){
            unset ($_SESSION[$name]);
        }
    }
}
