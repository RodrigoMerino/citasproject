<?php

namespace App\Controllers\auth;

use App\Helpers\Redirect;
use Core\View;
use Core\SessionHandler;
use App\Services\UserService;

class Auth extends \Core\Controller
{
    protected $_userService;


    public function __construct()
    {
        if (isAuthenticated()) {
            Redirect::to(" ");
        }

        $this->_userService = new UserService;
    }

    public function registerAction()
    {
        $data = $this->_userService->createUser();
        View::bladeRenderTemplate('auth/register', compact("data"));
    }
    public function loginAction()
    {
        $data = $this->_userService->login();

        View::bladeRenderTemplate('auth/login', compact("data"));
    }


    public function logoutAction()
    {

        $this->_userService->logout();
    }

    // public function redirectUserAction()
    // {
    //     $this->_userService->redirectUser();

    // }
}