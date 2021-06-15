<?php

namespace App\Repositories;

use Core\Model;
use Core\SessionHandler;

class BookingRepository
{
    public function __construct()
    {
        $this->_db =  Model::getDB();
    }


    public function createBooking($request)
    {
        /** 
         * @comment: hacer un rollback en caso de que una de las dos no entre
         * @Date: 2021-06-05 23:12:22 
         * @return:void  
         */
        $this->_db->query('INSERT INTO bookings (time,date , id_user, id_doctor ) VALUES("' . $request->time . '","' . $request->date . '","' . SessionHandler::getSession("SESSION_USER_ID") . '","' . $request->doctor_id . '")');
        $this->_db->query("UPDATE times  SET status = '1' WHERE time ='$request->time' AND appointment_id ='$request->appointment_id'");
    }

    /** 
     * @comment: show to the patients their bookings 
     * @Date: 2021-06-11 09:38:24 
     * @return:objects  
     */
    public function getPatientBooking()
    {
        $stmt = $this->_db->query("SELECT * FROM bookings where id_user = " . SessionHandler::getSession('SESSION_USER_ID') . "");

        while ($obj = $stmt->fetch_object('\\App\\Models\\booking')) {


            @$result[] = $obj;
        }

        return @($result);
    }

    /** 
     * @comment: show to admin all the bookings 
     * @Date: 2021-06-11 09:39:12 
     * @param: 
     * @param: 
     * @return:arrray of objects 
     */
    public function getAllPatientBookings()
    {

        $date = date('Y-m-d');
        $stmt = $this->_db->query("   SELECT time , date, status , bookings.id , id_user ,id_doctor , a.name as user , b.name as doctor , a.email FROM bookings 
                                    left JOIN users as a ON bookings.id_user= a.id
                                    left JOIN users as b ON bookings.id_doctor= b.id WHERE date = '$date'");

        while ($obj = $stmt->fetch_object('\\App\\Models\\booking')) {


            @$result[] = $obj;
        }

        return @($result);
    }

    /** 
     * @comment:change the status of bookings when patient arrive 
     * @Date: 2021-06-11 09:39:47 
     * @return:bool  
     */
    public function changeStatus($id, $status)
    {
        $status = $this->_db->query("UPDATE bookings  SET status = '$status' WHERE id ='$id'");
        return $status;
    }

    public function getPatientsBookingByParams()
    {
        $date = date('Y-m-d');
        $status = 1;
        $stmt = $this->_db->query(" SELECT time , date, status , bookings.id , id_user ,id_doctor , a.name as user , b.name as doctor , a.email FROM bookings 
                                    left JOIN users as a ON bookings.id_user= a.id
                                    left JOIN users as b ON bookings.id_doctor= b.id WHERE date = '$date' AND status = '$status' AND id_doctor = " . SessionHandler::getSession('SESSION_USER_ID') . "");

        while ($obj = $stmt->fetch_object('\\App\\Models\\booking')) {


            @$result[] = $obj;
        }

        return @($result);
    }

    public function getbooking($id)
    {
        $stmt = $this->_db->query("SELECT * FROM bookings WHERE id = '$id'");

        while ($obj = $stmt->fetch_object('\\App\\Models\\booking')) {


            @$result[] = $obj;
        }

        return @($result);
    }

    public function checkBookingTime()
    {
        $date = date('Y-m-d');

        $stmt = $this->_db->query("SELECT * FROM bookings WHERE id_user = " . SessionHandler::getSession('SESSION_USER_ID') . " AND date = '$date' ORDER BY id DESC ");

        while ($obj = $stmt->fetch_object('\\App\\Models\\booking')) {


            @$result[] = $obj;
        }

        return @($result);
    }
}