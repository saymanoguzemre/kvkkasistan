<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Datashare extends Model
{
    use HasFactory;

    public function datasharesForms()
    {
        return $this->hasMany(DatashareForm::class);
    }
}
