<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;
    protected $fillable = ['slot_id', 'doctor_id', 'patient_id', 'package_id', 'trx_id', 'status', 'payment_status'];
}
