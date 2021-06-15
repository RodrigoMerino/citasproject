<?php

namespace App\Controllers\Admin;

use \Core\View;
use App\Models\Category;
use App\Services\UserService;

class Home extends \Core\Controller
{
    protected $_userService;
    function __construct()
    {
        $this->_userService = new UserService;
    }

    public function AdminAction()
    {
        $doctor = $this->_userService->getAll();
        View::bladeRenderTemplate('home/index',  ['doctors' => $doctor]);
    }
}
