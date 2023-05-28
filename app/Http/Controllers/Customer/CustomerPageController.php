<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\Form;
use Illuminate\Http\Request;
use Stripe\Charge;
use Stripe\Stripe;

class CustomerPageController extends Controller
{


    public function orders()
    {
        return view('customer.orders', ['orders' => Form::where('customer_id', auth()->user()->id)->get()]);
    }

    public function order($referenceNo)
    {
        $form = Form::where('referenceNo', $referenceNo)->first();
        $documents = $form->documents;
        return view('customer.order', ['documents' => $documents]);
    }
}
