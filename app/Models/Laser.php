<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laser extends Model
{
    protected $table = 'laser';
    protected $fillable = ['service', 'price', 'title'];
}
