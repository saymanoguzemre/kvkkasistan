<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    use HasFactory;

    public function town()
    {
        return $this->belongsTo(Town::class);
    }
    
    public function city()
    {
        return $this->town->city;
    }
}
