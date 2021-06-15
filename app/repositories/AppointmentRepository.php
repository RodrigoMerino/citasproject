<?php

namespace App\Repositories;

use Core\Model;
use Core\SessionHandler;

class AppointmentRepository
{

    protected $_db;

    function  __construct()
    {
        $this->_db =  Model::getDB();
    }

    public function createAppointment($request)
    {
        $this->_db->query('INSERT INTO appointments (date,user_id ) VALUES("' . $request->date .  '","' . SessionHandler::getSession("SESSION_USER_ID") . '" )');

        // hacer fetch object
        $getAppointment_id =  $this->_db->query("SELECT id FROM appointments ORDER BY id DESC LIMIT 1")->fetch_array();
        foreach ($getAppointment_id as $id) {

            $appointment_id = $id;
        }
        foreach ($request->time as $time) {
            $defaulStatus = 0;
            $this->_db->query('INSERT INTO times (time,appointment_id,status) VALUES("' .
                $time . '","' .
                $appointment_id . '","' .
                $defaulStatus . '" 
            )');
        }
    }

    public function checkAppointment($request)
    {
        $date = $request->date;
        $appointment = $this->_db->query("SELECT * FROM appointments WHERE date = '$date' AND user_id = " . SessionHandler::getSession("SESSION_USER_ID") . "");
        $appointments = $appointment->fetch_object('\\App\\Models\\Appointment');

        if (!$appointment) {
            echo "date does not exits";
        }


        $time = $this->_db->query("SELECT * FROM times WHERE appointment_id = $appointments->id");
        while ($times = $time->fetch_object('\\App\\Models\\Time')) {
            // $result[] = [$obj->id, $obj->name];


            @$result[] = $times;
        }
        // var_dump($result);

        return  array("date" => $date, "times" => $result, "appointments" => $appointments);
        // var_dump($getAppointment_id);
        //  var_dump($appointment);
    }


    public function updateappointment($request)
    {
        $appointment_id = $request->id;
        $this->_db->query("DELETE FROM times where appointment_id = '$appointment_id'");

        foreach ($request->time as $time) {
            $defaulStatus = 0;
            $this->_db->query('INSERT INTO times (time,appointment_id,status) VALUES("' .
                $time . '","' .
                $appointment_id . '","' .
                $defaulStatus . '" 
            )');
        }
    }

    public function getAllAppointments()
    {
        $doctorAppointments = $this->_db->query("SELECT * FROM appointments WHERE user_id = " . SessionHandler::getSession('SESSION_USER_ID') . "")->fetch_all();
        return $doctorAppointments;
    }


    /** 
     * @comment: cambiar el nombre 
     * @Date: 2021-06-11 09:54:01 
     * @param: 
     * @param: 
     * @return:string  
     */
    public function newPatientAppointment($doctorid, $date)
    {
        $appointment = $this->_db->query("SELECT * FROM appointments WHERE user_id = '$doctorid' AND date ='$date'");
        $user = $appointment->fetch_object('\\App\\Models\\Appointment');



        $times = $this->_db->query("SELECT * FROM times WHERE appointment_id = '$user->id' AND status = '0'");

        while ($obj = $times->fetch_object('\\App\\Models\\Time')) {
            // $result[] = [$obj->id, $obj->name];


            @$result[] = $obj;
        }
        // var_dump($result);

        return @($result);
    }
    public function uniqueDate($date)
    {

        $stmt = $this->_db->query("SELECT * FROM appointments WHERE user_id = " . SessionHandler::getSession('SESSION_USER_ID') . " AND date = '$date'  ");

        while ($obj = $stmt->fetch_object('\\App\\Models\\booking')) {


            @$result[] = $obj;
        }

        return @($result);
    }
}