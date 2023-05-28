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
        $form = Form::where('referenceNo', $referenceNo)->first();
        switch ($form->orderType) {
            case 1: $price = 100; break;
            case 2: $price = 200; break;
            case 3: $price = 300; break;
            default: $price = 100; break;
        }
        return view('stripe', ['referenceNo' => $referenceNo, 'price' => $price]);
    }

    public function stripePost(Request $request, $referenceNo)
    {

        $form = Form::where('referenceNo', $referenceNo);
        $form->update(['isPaid' => true]);

        Session::flash('success', 'Ödeme başarılı');

        return redirect()->to(route('customer.orders'));
    }
}
