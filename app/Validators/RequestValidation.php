<?php

namespace App\Validators;

use Core\Model;


class RequestValidation
{


    private static $error = [];
    private static $error_msg = [
        'uniqueValidation' => 'El :attribute  ya existe, por favor intente con otro.',
        'fieldRequired' => 'El :attribute es requerido',
        'minLength' => 'El :attribute  debe tener un minimo de :policy caracteres',
        'charactersAllowValidation' => 'EL :attribute campo no puede contener numeros',
        'maxLength' => 'El :attribute  debe tener un maximo de :policy caracteres',
        'emailValidation' => 'La direccion de correo no es valida',
    ];


    public function abide(array $data, array $policies)
    {
        foreach ($data as $columnName => $value) {
            if (in_array($columnName, array_keys($policies))) {

                self::doValitadation([

                    'column' => $columnName,
                    'value' => $value,
                    'policies' => $policies[$columnName]
                ]);
            }
        }
    }

    private static function doValitadation(array $data)
    {

        $column = $data['column'];
        foreach ($data['policies'] as $rule => $policy) {
            $valid = call_user_func_array([self::class, $rule], [$column, $data['value'], $policy]);

            if (!$valid) {
                self::setError(
                    str_replace([':attribute', ':policy', '_'], [$column, $policy, ' '], self::$error_msg[$rule]),
                    $column
                );
            }
        }
    }

    public static function uniqueValidation(String $column, string $value, string $policy): bool
    {
        $db =  Model::getDB();

        if ($value != null && !empty(trim($value))) {
            return $db->query("SELECT * FROM  $policy  WHERE   $column  =" . $value . "");
        }
        return true;
    }


    public  static function fieldRequired(String $column,  $value, bool $policy)
    {

        return $value != null && !empty(trim($value));
    }


    public static function minLength(String $column,  $value, bool $policy)
    {

        if ($value != null && !empty(trim($value))) {
            //podemos meter otro if para esto
            return strlen(trim($value)) >= $policy;
        }
        return true;
    }



    public static function emailValidation(String $column,  $value, bool $policy)
    {

        if ($value != null && !empty(trim($value))) {
            return filter_var($value, FILTER_VALIDATE_EMAIL);
        }
        return true;
    }



    public static function charactersAllowValidation(String $column,  $value, bool $policy)
    {
        if ($value != null && !empty(trim($value))) {
            if (!preg_match('', $value)) {
                return false;
            }
            return true;
        }
    }

    private static function setError($error, $key = null)
    {
        if ($key) {

            self::$error[$key][] = $error;
        } else {
            self::$error[] = $error;
        }
    }
    public function  hasError()
    {
        return count(self::$error) > 0 ? true : false;
    }


    public function getErrorMsg()
    {
        return self::$error;
    }

    public static function radioButton(String $column,  $value, bool $policy)
    {
        return $value(empty($value)) ? FALSE : TRUE;
    }
}