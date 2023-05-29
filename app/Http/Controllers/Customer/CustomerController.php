<?php

namespace App\Http\Controllers\Customer;

use App\Events\CustomerRegistered;
use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Validation\Rules\Password;

class CustomerController extends Controller
{
    public function store(Request $request): void
    {
        $request->validate([
            'fullName' => 'required|string',
            'customerEmail' => 'required|email|unique:customers,email',
            'password' => ['required', 'string', 'min:8', 'max:64', Password::min(8)->mixedCase()->numbers()->symbols()->letters()],
            'passwordAgain' => 'required|same:password',
            'consentForm' => 'required|accepted',
            'privacyPolicy' => 'required|accepted',
        ]);

        $customer = Customer::create([
            'name' => $request->fullName,
            'email' => $request->customerEmail,
            'password' => Hash::make($request->password),
            'email_verified_at' => now(),
            'ip' => $request->ip(),
        ]);

        event(new CustomerRegistered($customer));

        Auth::login($customer);

        return ;
    }

    public function createVerificationCode(Customer $customer): int
    {
        $verification_code = rand(100000, 999999);
        DB::table('verification_codes')->insert([
            'customer_id' => $customer->id,
            'code' => $verification_code,
            'created_at' => now(),
        ]);

        return $verification_code;
    }

    public function verifyByEmail($verification_code, $customer_email): int
    {
        $customer = Customer::where('email', $customer_email)->first();
        $executed = RateLimiter::attempt(
            'try-verify:'.request()->ip(),
            $perMinute = 5,
            function() use ($customer, $verification_code) {
                $verify = DB::table('verification_codes')->where(['code' => $verification_code, 'customer_id' => $customer->id])->exists();
                if($verify) {
                    return 200;
                }
                return 400;
            }
        );

        if ($executed == false) {
            return 429;
        }
        else if($executed == 400) {
            return 400;
        }
        return 200;
    }
}
