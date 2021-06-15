<?php

namespace App\Controllers\doctor;

use App\Helpers\Redirect;
use Core\View;
use App\Services\BookingService;
use App\Services\PrescriptionService;
use Core\SessionHandler;

class Prescription
{
    protected $_bookingService;
    protected $__prescriptionService;

    public function __construct()
    {
        $this->_bookingService = new BookingService();
        $this->_prescriptionService = new PrescriptionService();
    }

    public function getPatientsAction()
    {
        $patients = $this->_bookingService->getPatientBookingsbyParams();
        View::bladeRenderTemplate('doctor/patientTable', compact('patients'));
    }

    public function createPrescriptionAction()
    {
        $this->_prescriptionService->createPrescription();
        Redirect::back();
    }

    public function getPatientPrescriptionAction($id, $date)
    {
        $patients = $this->_prescriptionService->getPatientPrescription($id, $date);
        View::bladeRenderTemplate('doctor/patientPrescription', ["patients" => $patients, "date" => $date]);
    }

    public function getPrescriptionsAction()
    {
        $prescriptions = $this->_prescriptionService->getPrescriptions();
        View::bladeRenderTemplate('doctor/prescriptions', ["prescriptions" => $prescriptions]);
    }
}