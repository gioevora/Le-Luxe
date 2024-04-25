<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Nails extends Model
{
    protected $fillable = ['title', 'price', 'service'];
    public function services()
    {
        return $this->belongsToMany(Service::class);
    }
}
