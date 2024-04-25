<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $fillable = [
        'fname', 'lname', 'address', 'mobile', 'e_mail', 'date', 'time', 'pax', 'service', 'status',
    ];

}
