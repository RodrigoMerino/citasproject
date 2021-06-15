<?php

namespace App\Controllers\Admin;

use Core\View;
use \App\Services\RoleService;
use \App\Services\UserService;
use App\Helpers\Redirect;

class Doctor extends \Core\Controller
{
    protected  $_roleService;
    protected  $_userService;

    public function __construct()
    {

        $this->_roleService =  new RoleService;
        $this->_userService =  new UserService;
    }


    public function getAllAction()
    {
        $doctor = $this->_userService->getAll();
        View::bladeRenderTemplate('admin/doctorTable',  ['doctors' => $doctor]);
    }


    public function createAction()
    {

        $val = $this->_userService->createDoctor();

        /** 
         * @comment: llamando roles 
         * @Date: 2021-05-24 10:30:39 
         * @return:array object
         */
        $roles = $this->_roleService->getAll();
        View::bladeRenderTemplate('admin/doctorRegister', ['roles' => $roles, "val" => $val]);
    }

    public function editAction()
    {
        $this->_userService->editDoctor();
    }


    public function deleteAction($id)
    {

        $this->_userService->deleteDoctor($id);
        Redirect::to("admin/get-doctors");
    }
}