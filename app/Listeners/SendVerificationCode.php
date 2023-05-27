<?php

namespace App\Listeners;

use App\Events\CustomerRegistered;
use App\Http\Controllers\Customer\CustomerController;
use App\Mail\CustomerVerificationCodeMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SendVerificationCode
{
    /**
     * Handle the event.
     */
    public function handle(CustomerRegistered $event): void
    {
        $customer = $event->customer;

        $verificationCode = (new CustomerController)->createVerificationCode($customer);

        Mail::to($customer->email)->send(new CustomerVerificationCodeMail($verificationCode));
    }
}
