<?php

namespace App\Controllers\Admin;

use App\Helpers\Request;
use App\Models\Category;
use \Core\View;
use \Core\SessionHandler;
use \App\Services\UserService;

class Admin extends \Core\Controller
{

    protected  $_categoryService;
    public $table = 'categories';

    public function __construct()
    {

        $this->_categoryService =  new UserService;
    }


    public function HomeAction()
    {

        $doctor = $this->_userService->getAll();
        View::bladeRenderTemplate('home/index',  ['doctors' => $doctor]);
    }
}
