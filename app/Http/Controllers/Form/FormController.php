<?php

namespace App\Http\Controllers\Form;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Document\DocumentAssignController;
use App\Models\DatacategoryForm;
use App\Models\DatashareForm;
use App\Models\DatastorageForm;
use App\Models\Form;
use App\Models\FormInfopurpose;
use Carbon\Carbon;
use Illuminate\Foundation\Http\FormRequest;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('form.form');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(FormRequest $request)
    {
        $formcount = Form::whereDate('created_at', today())->count();
        $form = new Form();


        $form->referenceNo = 'KF' . date('dmY') . str_pad($formcount+1,4,'0',STR_PAD_LEFT);
        $form->customer_id = auth()->user()->id;
        $form->town_id = $request->town;
        $form->address = $request->address;
        $form->companyType = $request->companyType;
        $form->companyName = $request->companyName;
        $form->companyNameShort = $request->companyNameShort;
        $form->taxNo = $request->taxNo;
        $form->taxOffice = $request->taxOffice;
        $form->tradeRegisterNo = $request->tradingNo;
        $form->mersisNo = $request->mersisNo;
        $form->hasKepAddress = $request->mailType;
        $form->email = $request->mailAddress;
        $form->phone = str_replace(['(', ')', ' '], '', $request->telNo);
        $form->website = $request->website;
        $form->court = $request->court;
        $form->titleOfRespect = $request->subjectTitle;
        $form->hasEmployee = $request->hasPersonal;
        $form->logo = $request->logoPath;
        $form->dataStorageTime = $request->dataStorageTime;
        $form->dataStorageTimeType = $request->dataStorageTimeType;
        $form->isPaid = 0;
        $form->orderType = $request->orderType ?? 1;

        $form->save();

        (new DocumentAssignController($form))->assign();

        foreach ($request->musteri as $key => $dcc) {
            if($dcc == 1 || $dcc == true || $dcc == '1')
            {
                $customerData = new DatacategoryForm;
                $customerData->type = 0;
                $customerData->form_id = $form->id;
                $customerData->datacategory_id = $key;
                $customerData->save();
            }
        }
        foreach ($request->personal as $key => $dcp) {
            if($dcp == 1 || $dcp == true || $dcp == '1')
            {
                $personelData = new DatacategoryForm;
                $personelData->type = 1;
                $personelData->form_id = $form->id;
                $personelData->datacategory_id = $key;
                $personelData->save();
            }
        }
        foreach ($request->infopurpose as $key => $ip) {
            if($ip == 1 || $ip == true || $ip == '1')
            {
                $infoPurpose = new FormInfopurpose;
                $infoPurpose->form_id = $form->id;
                $infoPurpose->infopurpose_id = $key;
                $infoPurpose->save();
            }
        }
        foreach ($request->datashare as $key => $ds) {
            if($ds == 1 || $ds == true || $ds == '1')
            {
                $dataShare = new DatashareForm;
                $dataShare->form_id = $form->id;
                $dataShare->datashare_id = $key;
                $dataShare->save();
            }
        }
        foreach ($request->datastorage as $key => $dst) {
            if($dst == 1 || $dst == true || $dst == '1')
            {
                $dataStorage = new DatastorageForm;
                $dataStorage->form_id = $form->id;
                $dataStorage->datastorage_id = $key;
                $dataStorage->save();
            }
        }



        return $form;
    }

    /**
     * Display the specified resource.
     */
    public function show(Form $form)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Form $form)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(FormRequest $request, Form $form)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Form $form)
    {
        //
    }
}
