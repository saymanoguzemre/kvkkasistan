<?php

namespace App\Http\Controllers\Document;

use App\Http\Controllers\Controller;
use App\Models\Form;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class VariableController extends Controller
{
    public $form;

    public function __construct(Form $form)
    {
        $this->form = $form;
    }

    public function assign($text)
    {

        $text = Str::of($text)
            ->replace('$$SEHIR$$',$this->form->town->city->city)
            ->replace('$$TICARETNO$$',$this->form->tradingNo)
            ->replace('$$ADRES$$',$this->form->address)
            ->replace('$$MERSIS$$',$this->form->mersisNo)
            ->replace('$$VERGIDAIRE$$',$this->form->taxOffice)
            ->replace('$$VERGINO$$',$this->form->taxNo)
            ->replace('$$TITLE$$',$this->form->companyName)
            ->replace('$$BRAND$$',$this->form->companyNameShort)
            #->replace('$$PERSONELVERIKATEGORI$$','')
            #->replace('$$VERIAMAC$$','')
            #->replace('$$AKTARIM$$','')
            ->replace('$$MAIL$$',$this->form->email)
            ->replace('$$EPOSTA$$',$this->form->email)
            #->replace('$$MUSTERIVERIKATEGORI$$','')
            ->replace('$$SITE$$',$this->form->website)
            ->replace('$$SİTE$$',$this->form->website);


        return $text;
    }
}
