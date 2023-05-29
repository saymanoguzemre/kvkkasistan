<?php

namespace App\Http\Requests\Form;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class FormStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'orderType' => 'required',
            'companyName' => 'required',
            'companyType' => 'required|boolean',
            'companyNameShort' => '',
            'taxNo' => 'required',
            'taxOffice' => 'required',
            'tradingNo' => 'required',
            'mersisNo' => 'required|digits:16',
            'logo' => 'nullable|image|max:65536',
            'city' => 'required',
            'town' => 'required',
            'address' => 'required',
            'telNo' => 'required|regex:/^\(5\d{2}\) \d{3} \d{4}$/',
            'mailAddress' => 'required|email',
            'mailType' => 'required|boolean',
            'hasKepAddress' => 'required|boolean',
            'website' => 'nullable|string',
            'court' => 'required|string',
            'subjectTitle' => 'required|string',
            'hasPersonal' => 'required|boolean',
            'fullName' => 'required|string',
            'customerEmail' => 'required|email',
            'password' => ['required', 'string', 'min:8', 'max:64', Password::min(8)->mixedCase()->numbers()->symbols()->letters()],
            'passwordAgain' => 'required|same:password',
            'consentForm' => 'required|accepted',
            'privacyPolicy' => 'required|accepted',
            'verificationCode' => 'required|string|digits:6',
            'registeredPassword' => 'required|string',
        ];
    }
}
