<?php

namespace App\Repositories;

use Core\Model;

class RolesRepository
{
    protected $_db;

    function __construct()
    {
        $this->_db = Model::getDB();
    }

    public function getAll()
    {
        try {
            $stmt = $this->_db->query('SELECT id,name FROM roles WHERE name != "paciente"');

            while ($obj = $stmt->fetch_object('\\App\\Models\\role')) {
                // $result[] = [$obj->id, $obj->name];

                $result[] = $obj;
            }

            return $result;
        } catch (MYSQLI_DOException $e) {
            echo $e->getMessage();
        }
    }
}