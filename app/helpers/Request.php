<?php

namespace App\Helpers;

class Request
{
    public static function getAll($is_array = false)
    {

        $result =  [];
        if (count($_GET) > 0) $result['get'] = $_GET;
        if (count($_POST) > 0) $result['post'] = $_POST;

        $result['file'] = $_FILES;
        return json_decode(json_encode($result), $is_array);
    }

    //return data we specified
    public static function getData(string $key)
    {
        $object = new static;
        $data = $object->getAll();

        return $data->$key;
    }

    public static function hasData($key)
    {

        return (array_key_exists($key, self::getAll((true)))) ? true : false;
    }

    /**the same as the getSingleData */
    public static function returnData(string $key, string $value)
    {
        $object = new static;
        $data = $object->getAll();

        return isset($data->$key->$value) ? $data->$key->$value : '';
    }

    public static function refreshData()
    {
        $_GET = [];
        $_POST = [];
        $_FILES = [];
    }
}