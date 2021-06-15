<?php

namespace App\Repositories;

use Core\Model;
use Core\SessionHandler;

class PrescriptionRepository
{
    protected $_db;

    function __construct()
    {
        $this->_db = Model::getDB();
    }

    public function createPrescription($request)
    {
        $this->_db->query('INSERT INTO prescriptions (desease,symptoms,date,medicine,procedure_medicine,feedback, signature,user_id,doctor_id )
         VALUES("' .
            $request->disease . '","' .
            $request->symptoms . '","' .
            $request->date . '","' .
            $request->medicine . '","' .
            $request->usage_medication . '","' .
            $request->feedback . '","' .
            $request->signature . '","' .
            $request->user_id . '","' .
            $request->doctor_id . '"
            )
            
            ');
    }

    public function checkIfPrescriptionExists($bookingUser, $doctor_id)
    {
        $prescription = $this->_db->query('SELECT * FROM prescriptions WHERE  user_id = ' . $bookingUser . ' AND doctor_id = ' . $doctor_id . '');
        while ($obj = $prescription->fetch_object('\\App\\Models\\Prescription')) {
            @$result[] = $obj;
        }
        return @($result);
    }

    public function getPatientPrescription($userId, $date)
    {
        $prescription = $this->_db->query('SELECT * FROM prescriptions WHERE  user_id = ' . $userId . ' AND date = "' . $date . '"');
        $result = $prescription->fetch_object('\\App\\Models\\Prescription');

        return @($result);
    }

    public function getPrescriptions()
    {
        // CAMBIAR EL ID POR EL DOCTOR ID
        $prescription = $this->_db->query("SELECT prescriptions.id as id, desease, symptoms, medicine, procedure_medicine , feedback ,signature, date, user_id , doctor_id, a.name as user, b.name as doctor, a.email FROM prescriptions 
                                            JOIN users as a ON prescriptions.user_id= a.id
                                            JOIN users as b ON prescriptions.doctor_id= b.id WHERE doctor_id =" . SessionHandler::getSession('SESSION_USER_ID') . "");

        while ($obj = $prescription->fetch_object('\\App\\Models\\Prescription')) {
            @$result[] = $obj;
        }
        return @($result);
    }

    public function myPrescriptions()
    {
        return $this->getPrescriptions();
    }
}