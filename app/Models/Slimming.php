<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slimming extends Model
{
    protected $table = 'slimming';
    protected $fillable = ['service', 'price', 'title'];
}
