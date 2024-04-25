<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hairs extends Model
{
    protected $fillable = ['title', 'price'];

    protected $table = 'hairs';
}
