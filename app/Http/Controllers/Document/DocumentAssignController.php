<?php

namespace App\Http\Controllers\Document;

use App\Http\Controllers\Controller;
use App\Models\Document;
use App\Models\Form;
use Illuminate\Http\Request;

class DocumentAssignController extends Controller
{
    public $form;

    public function __construct(Form $form)
    {
        $this->form = $form;
    }

    public function assign()
    {
        $documents = Document::where('active', 1);
        if($this->form->orderType == 1)
        {
            $documents->whereIn('documenttype_id', [1,2,3,4,5,6,]);
        }
        elseif($this->form->orderType == 2)
        {
            $documents->whereIn('documenttype_id', [1,2,3,4,5,6,7,8,9,10,11]);
        }
        elseif($this->form->orderType == 3)
        {
            $documents->whereIn('documenttype_id', [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16]);
        }
        $documents->get();
    }
}
