<?php

namespace App\Services;

use Core\View;
use App\Helpers\Request;
use Core\SessionHandler;
use App\Helpers\Redirect;
use App\Repositories\UserRepository;
use App\Validators\RequestValidation;

class UserService
{

    protected $_userRepository;
    public $errors = [];

    public function __construct()
    {
        $this->_userRepository = new UserRepository;
    }


    public function getAll()
    {
        return  $this->_userRepository->getAll();
    }

    public function createUser()
    {

        if (Request::hasData('post')) {

            $request = Request::getData('post');
            $rules = [
                'name' => ['fieldRequired' => true],
                'password' => ['fieldRequired' => true],
                'email' => ['fieldRequired' => true],

            ];

            $validate = new RequestValidation;
            $validate->abide($_POST, $rules);

            if ($validate->hasError()) {
                $errors = ["error" => $validate->getErrorMsg()];
                return $errors;
            }

            Request::refreshData();
            Redirect::to("login");

            return  $this->_userRepository->createUser($request);
        }
    }
    public function createDoctor()
    {

        if (Request::hasData('post')) {
            $request = Request::getData('post');


            $rules = [
                'name' => ['fieldRequired' => true],
                'password' => ['fieldRequired' => true],
                'email' => ['fieldRequired' => true],
                'education' => ['fieldRequired' => true],
                'address' => ['fieldRequired' => true],
                'department' => ['fieldRequired' => true],
                'phone' => ['fieldRequired' => true],
                'role_id' => ['fieldRequired' => true]
            ];

            $validate = new RequestValidation;
            $validate->abide($_POST, $rules);

            if ($validate->hasError()) {
                $errors = ["error" => $validate->getErrorMsg()];
                return $errors;
            }
            Request::refreshData();
            return  $this->_userRepository->createDoctor($request);
        }
    }

    public function editDoctor()
    {

        if (Request::hasData('post')) {

            $request = Request::getData('post');

            return  $this->_userRepository->editDoctor($request);
        }
    }


    public function deleteDoctor($id)
    {



        return  $this->_userRepository->deleteDoctor($id);
    }

    public function getDoctor()
    {
        $doctors = array_slice($this->_userRepository->getDoctors(), 0, 5);
        return $doctors;
    }

    public function login()
    {
        if (Request::hasData('post')) {

            $request = Request::getData('post');

            $rules = [
                'name' => ['fieldRequired' => true],
                'password' => ['fieldRequired' => true],

            ];

            $validate = new RequestValidation;
            $validate->abide($_POST, $rules);

            if ($validate->hasError()) {
                $errors = ["error" => $validate->getErrorMsg()];
                return $errors;
            }
            $user = $this->_userRepository->loginUser($request);

            if ($user) {
                if (!password_verify($request->password, $user->password)) {
                } else {

                    SessionHandler::addSession("SESSION_USER_ID", $user->id);
                    SessionHandler::addSession("SESSION_USER_NAME", $user->name);
                    $this->redirectUser($user->role_id);
                }
            }
        }
    }

    public function logout()
    {
        if (isAuthenticated()) {
            SessionHandler::removeSession("SESSION_USER_NAME");
            SessionHandler::removeSession("SESSION_USER_ID");
        }
        Redirect::to(" ");
    }

    public function checkCurrentUser()
    {
        return $this->_userRepository->checkCurrentUser();
    }

    public function redirectUser($user)
    {
        switch ($user) {
            case '1':
                Redirect::to("admin/get-doctors");

                break;
            case '2':
                Redirect::to("doctor/create-schedule");

                break;
            case '3':
                Redirect::to("my-bookings");

                break;

            default:
                Redirect::to(" ");
                break;
        }
    }


    public function editProfile()
    {

        if (Request::hasData('post')) {

            $request = Request::getData('post');
            return $this->_userRepository->editProfile($request);
        }
    }

    public function checkCurrentDoctor($id)
    {
        return $this->_userRepository->checkCurrentDoctor($id);
    }
}