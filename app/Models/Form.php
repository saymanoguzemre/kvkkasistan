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

    public function datashares()
    {
        return $this->hasManyThrough(Datashare::class, DatashareForm::class, 'form_id', 'id', 'id', 'datashare_id');
    }

    public function infopurposes()
    {
        return $this->hasManyThrough(Infopurpose::class, FormInfopurpose::class, 'form_id', 'id', 'id', 'infopurpose_id');
    }

    public function datacategories()
    {
        return $this->hasManyThrough(Datacategory::class, DatacategoryForm::class, 'form_id', 'id', 'id', 'datacategory_id');
    }
}
