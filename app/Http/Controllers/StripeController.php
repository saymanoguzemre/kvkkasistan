<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Stripe\Charge;
use Stripe\Stripe;

class StripeController extends Controller
{
    public function stripe()
    {
        return view('stripe');
    }

    public function stripePost(Request $request)
    {
        Stripe::setApiKey(env('STRIPE_SECRET'));
        Charge::create ([
                "amount" => 100*100,
                "currency" => "INR",
                "source" => $request->stripeToken,
                "description" => "This payment is testing purpose of techsolutionstuff",
        ]);

        Session::flash('success', 'Payment Successfull!');

        return back();
    }
}
