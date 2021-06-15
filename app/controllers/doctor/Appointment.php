<?php

namespace App\Controllers\doctor;

use App\Helpers\Redirect;
use \Core\View;
use \App\Services\AppointmentService;

class Appointment extends \Core\Controller
{

    protected  $_appointmentService;

    public function __construct()
    {

        $this->_appointmentService =  new AppointmentService;
    }

    public function createAction()
    {
        $data = $this->_appointmentService->createAppointment();

        View::bladeRenderTemplate('doctor/appoinmentsTable', compact("data"));
    }

    public function checkAppointmentAction()
    {
        $times = $this->_appointmentService->checkAppointment();
        View::bladeRenderTemplate('doctor/checkAppointment', ['times' => $times]);
    }

    public function updateAppointmentAction()
    {
        $this->_appointmentService->updateAppointment();
        Redirect::to('doctor/get-appointments');
    }
    public function getAllAction()
    {
        $appoinments = $this->_appointmentService->getAllAppointment();
        View::bladeRenderTemplate('doctor/doctorAppointments', ["appointments" => $appoinments]);
    }
}