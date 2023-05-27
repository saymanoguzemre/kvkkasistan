<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\Form;
use Illuminate\Http\Request;

class CustomerPageController extends Controller
{


    public function orders()
    {
        return view('customer.orders', ['orders' => Form::where('customer_id', auth()->user()->id)->get()]);
    }

    public function order($referenceNo)
    {
        return $referenceNo;
    }

    public function orderPay($referenceNo)
    {
        $form = Form::where('referenceNo', $referenceNo)->first();
        return $form;
    }

    public function deneme()
    {
        return auth('admin')->logout();
        return auth('admin')->user();
    }
}
