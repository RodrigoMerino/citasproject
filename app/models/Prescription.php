<?php
namespace App\Models;

class Prescription
{
    public $id;
    public $desease;
    public $symptoms;
    public $date;
    public $medicine;
    public $procedure_medicine;
    public $feedback;
    public $signature;
    public $user_id;
    public $doctor_id;
}