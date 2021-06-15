<?php

namespace App\Helpers;

class Redirect
{
    public static function to($page)
    {
        header("location: http://appointments.testenv:8080/$page");
    }
    
    /**
     * Redirect to same page
     */
    public static function back()
    {
        $uri = $_SERVER['REQUEST_URI'];
        header("location: $uri");
    }
}
 