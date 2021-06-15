<?php

namespace App\Services;
 use App\Repositories\RolesRepository;
class RoleService
{
    protected $_rolesRepository;
    public $errors = [];

    public function __construct()
    {
        $this->_rolesRepository = new RolesRepository;
    }


    public function getAll()
    {
        return  $this->_rolesRepository->getAll();
    }

   
}