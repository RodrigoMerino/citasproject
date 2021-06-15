<?php

namespace App\Services;

use App\Helpers\Request;
use App\Validators\RequestValidation;
use App\Repositories\AppointmentRepository;

class AppointmentService
{
    protected $_appointmentRepository;

    public function __construct()
    {
        $this->_appointmentRepository = new AppointmentRepository;
    }

    public function createAppointment()
    {
        if (Request::hasData('post')) {
            $request = Request::getData('post');

            $rules = [
                'date' => ['fieldRequired' => true],

            ];

            $validate = new RequestValidation;
            $validate->abide($_POST, $rules);

            if ($validate->hasError()) {
                $errors = ["error" => $validate->getErrorMsg()];
                return $errors;
            }
            $check = $this->_appointmentRepository->uniqueDate($request->date);
            if ($check) {
                return ["dateUnique" => "la fecha ya existe"];
            }
            return  $this->_appointmentRepository->createAppointment($request);
        }
    }

    public function checkAppointment()
    {
        if (Request::hasData('post')) {

            $request = Request::getData('post');

            return  $this->_appointmentRepository->checkAppointment($request);
        }
    }

    public function updateAppointment()
    {
        if (Request::hasData('post')) {

            $request = Request::getData('post');

            return  $this->_appointmentRepository->updateAppointment($request);
        }
    }

    public function getAllAppointment()
    {


        return  $this->_appointmentRepository->getAllAppointments();
    }

    public function newPatientAppointment($doctorid, $date)
    {
        return  $this->_appointmentRepository->newPatientAppointment($doctorid, $date);
    }
}