<?php

namespace App\Services;

use App\Helpers\Redirect;
use App\Helpers\Request;
use App\Repositories\BookingRepository;

class BookingService
{
    protected $_bookingRepository;

    function __construct()
    {
        $this->_bookingRepository = new BookingRepository;
    }

    public function createBooking()
    {
        if (Request::hasData('post')) {

            $request = Request::getData('post');
            $Check = $this->_bookingRepository->checkBookingTime();
            if ($Check) {
                return var_dump($Check);
            }
            $user = $this->_bookingRepository->createBooking($request);
            return $user;
        }
    }


    public function getPatientBooking()
    {
        $patientBooking = $this->_bookingRepository->getPatientBooking();
        return $patientBooking;
    }

    public function getallPatientBookings()
    {
        $bookings = $this->_bookingRepository->getallPatientBookings();
        return $bookings;
    }

    public function getBooking($id)
    {
        $bookings = $this->_bookingRepository->getBooking($id);
        return $bookings;
    }

    public function changeStatus($id)
    {
        $getstatus = $this->getBooking($id);
        foreach ($getstatus as $status) {
            // if it is not false
            if ($status->status = !$status->status) {

                $status = $this->_bookingRepository->changeStatus($id, $status->status);
            } else {
                $status = $this->_bookingRepository->changeStatus($id, $status->status);
            }
            return $status;
        }
    }
    public function getPatientBookingsbyParams()
    {
        $patientBooking = $this->_bookingRepository->getPatientsBookingByParams();
        return $patientBooking;
    }
}