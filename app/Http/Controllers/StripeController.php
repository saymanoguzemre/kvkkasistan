<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Stripe\Charge;
use Stripe\Stripe;

class StripeController extends Controller
{
    public function stripe($referenceNo)
    {
        return view('stripe', ['referenceNo' => $referenceNo]);
    }

    public function stripePost(Request $request, $referenceNo)
    {

        $form = Form::where('referenceNo', $referenceNo);
        $form->update(['isPaid' => true]);

        Session::flash('success', 'Ödeme başarılı');

        return redirect()->to(route('customer.orders'));
    }
}
