<?php

namespace App\Services;

use App\Helpers\Request;
use App\Repositories\PrescriptionRepository;


class PrescriptionService
{
    protected $_PrescriptionRepository;

    public function __construct()
    {
        $this->_PrescriptionRepository = new PrescriptionRepository;
    }

    public function createPrescription()
    {
        if (Request::hasData('post')) {

            $request = Request::getData('post');
            return  $this->_PrescriptionRepository->createPrescription($request);
        }
    }

    public function checkIfPrescriptionExists($bookingUser, $doctor_id)
    {
        return $this->_PrescriptionRepository->checkIfPrescriptionExists($bookingUser, $doctor_id);
    }

    public function getPatientPrescription($userId, $date)
    {
        return $this->_PrescriptionRepository->getPatientPrescription($userId, $date);
    }
    public function getPrescriptions()
    {
        return $this->_PrescriptionRepository->getPrescriptions();
    }

    public function myPrescriptions()
    {
        return $this->_PrescriptionRepository->myPrescriptions();
    }
}