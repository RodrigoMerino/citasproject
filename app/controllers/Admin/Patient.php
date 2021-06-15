<?php

namespace App\Controllers\Admin;

use App\Helpers\Redirect;
use App\Services\BookingService;
use Core\View;

class Patient
{
    protected $_bookingService;
    function __construct()
    {
        $this->_bookingService = new BookingService();
    }


    public function getAllAction()
    {
        $bookings = $this->_bookingService->getallPatientBookings();

        View::bladeRenderTemplate("admin/patientTable", compact('bookings'));
    }

    public function changeStatusAction($id)
    {
        $this->_bookingService->changeStatus($id);
        Redirect::to("admin/get-patients");
    }
}