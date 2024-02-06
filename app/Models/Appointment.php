<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;
    protected $fillable = ['slot_id', 'doctor_id', 'patient_id', 'package_id', 'trx_id', 'status', 'payment_status'];

    /**
     * Get the user that owns the Appointment
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function slot()
    {
        return $this->belongsTo(Slot::class, 'slot_id', 'id');
    }

    /**
     * Get the user that owns the Appointment
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'doctor_id', 'id');
    }

    /**
     * Get the user that owns the Appointment
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function package()
    {
        return $this->belongsTo(Package::class, 'package_id', 'id');
    }
}
