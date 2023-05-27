<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class DatashareForm extends Pivot
{
    public $timestamps = false;

    public function form()
    {
        return $this->belongsTo(Form::class);
    }

    public function datashares()
    {
        return $this->belongsTo(Datashare::class);
    }
}
