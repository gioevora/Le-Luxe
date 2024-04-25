<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Waxing extends Model
{
    protected $fillable = ['title', 'female_price', 'male_price'];

    protected $table = 'waxing';
}
