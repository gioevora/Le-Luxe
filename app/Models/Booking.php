<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = [
        'fullname', 'contact', 'email', 'date', 'time', 'fax', 'services', 'message',
    ];


}
