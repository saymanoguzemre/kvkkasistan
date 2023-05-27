<?php

namespace App\Http\Livewire\Formwizard;

use App\Http\Controllers\Customer\CustomerController;
use App\Http\Controllers\Form\FormController;
use App\Http\Requests\Form\FormStoreRequest;
use App\Models\City;
use App\Models\Customer;
use App\Models\Datacategory;
use App\Models\Datashare;
use App\Models\Datastorage;
use App\Models\Infopurpose;
use App\Models\Town;
use Illuminate\Support\Facades\File;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Str;

class Formwizard extends Component
{
    use WithFileUploads;

    public int $step = 0;
    public bool $has_personal = false;
    public $infopurposes;
    public $datashares;
    public $physicalDatastorages;
    public $electronicDatastorages;
    public $dataCategories;

    public bool $companyType = false;
    public bool $hasKepAddress, $hasPersonal, $mailType;
    public $towns=[];
    public $cities=[];

    public int $isVerified;
    public int $dataStorageTime = 6;
    public int $dataStorageTimeType = 2;

    public $logo, $city, $town, $privacyPolicy, $consentForm, $logoPath;

    public string $companyName, $companyNameShort, $taxNo, $taxOffice, $tradingNo,$mersisNo, $address, $telNo, $mailAddress,$website,
    $court, $subjectTitle, $fullName, $customerEmail, $password, $passwordAgain, $verificationCode, $registeredPassword;

    public array $musteri = [1=>0,2=>0,3=>0,4=>0,5=>0,6=>0,7=>0,8=>0,9=>0,10=>0,11=>0,12=>0,13=>0,14=>0,15=>0,16=>0,17=>0,18=>0,19=>0,20=>0,21=>0,22=>0,23=>0];
    public array $personel = [1=>0,2=>0,3=>0,4=>0,5=>0,6=>0,7=>0,8=>0,9=>0,10=>0,11=>0,12=>0,13=>0,14=>0,15=>0,16=>0,17=>0,18=>0,19=>0,20=>0,21=>0,22=>0,23=>0];
    public array $infopurpose = [1=>0,2=>0,3=>0,4=>0,5=>0,6=>0,7=>0,8=>0,9=>0,10=>0,11=>0,12=>0,13=>0,14=>0,15=>0,16=>0,17=>0,18=>0,19=>0,20=>0,21=>0,22=>0,23=>0,24=>0,25=>0,26=>0,27=>0,28=>0,29=>0,30=>0,31=>0,32=>0,33=>0,34=>0,35=>0,36=>0,37=>0,38=>0,39=>0,40=>0,41=>0,42=>0,43=>0,44=>0,45=>0,46=>0,47=>0,48=>0,49=>0,50=>0,51=>0,52=>0];
    public array $datashare = [1=>0,2=>0,3=>0,4=>0,5=>0,6=>0,7=>0,8=>0];
    public array $datastorage = [1=>0,2=>0,3=>0,4=>0,5=>0,6=>0,7=>0,8=>0,9=>0,10=>0,11=>0];



    public array $step_titles = [
        0 => 'Şirket Bilgileri',
        1 => 'Adres Bilgileri',
        2 => 'Kurumsal Bilgiler',
        3 => 'İşlenen Veri Bilgileri',
        4 => 'İşlenen Veri Bilgileri',
        5 => 'İşlenen Veri Bilgileri',
        6 => 'İşlenen Veri Bilgileri',
        7 => 'Veri Saklama Süresi',
        8 => 'Üyelik Bilgileri',
        9 => 'Giriş Yap',
        10 => 'E-Postanı Doğrula',
    ];

    public function mount()
    {
        $this->infopurposes = Infopurpose::all();
        $this->datashares = Datashare::all();
        $this->physicalDatastorages = Datastorage::where('type', false)->get();
        $this->electronicDatastorages = Datastorage::where('type', true)->get();
        $this->cities = City::orderBy('id')->get();
        $this->dataCategories = Datacategory::all();
    }

    public function rules()
    {
        return (new FormStoreRequest())->rules();
    }

    protected $validationAttributes = [
        'companyName' => 'Ad'
    ];



    public function render()
    {
        $steps = File::files(base_path('/resources/views/form/steps/'));
        if(!empty($this->city)) {
            $this->towns = Town::where('city_id', $this->city)->get();
        }
        return view('livewire.formwizard.formwizard', ['companyType' => $this->companyType, 'steps' => $steps]);
    }

    public function companyType(bool $companyType)
    {
        $this->companyType = $companyType;
    }

    public function mailType(bool $mailType)
    {
        $this->mailType = $mailType;
    }

    public function hasPersonal(bool $has_personal)
    {
        $this->has_personal = $has_personal;
    }

    public function nextStep()
    {
        if($this->step == 0)
        {
            $this->validateOnly('companyName');
            $this->validateOnly('companyType');
            $this->validateOnly('companyNameShort');
            $this->validateOnly('taxNo');
            $this->validateOnly('taxOffice');
            $this->validateOnly('tradingNo');
            $this->validateOnly('mersisNo');
            $this->validateOnly('logo');
        }
        else if($this->step == 1)
        {
            $this->validateOnly('city');
            $this->validateOnly('town');
            $this->validateOnly('address');
            $this->validateOnly('telNo');
            $this->validateOnly('mailAddress');
            $this->validateOnly('mailType');
        }
        else if($this->step == 2)
        {
            $this->validateOnly('website');
            $this->validateOnly('court');
            $this->validateOnly('subjectTitle');
            $this->validateOnly('hasPersonal');
        }
        else if($this->step == 7)
        {
            if(Auth::check())
            {
                if(Auth::user()->email_verified_at == null) {
                    $this->step == 9;
                }
                else
                {
                    $this->saveForm();
                }
            }
        }
        else if($this->step == 8)
        {
            $this->validateOnly('fullName');
            $this->validateOnly('customerEmail');
            $this->validateOnly('password');
            $this->validateOnly('passwordAgain');
            $this->validateOnly('consentForm');
            $this->validateOnly('privacyPolicy');

            if(Customer::where('email', $this->customerEmail)->count() == 0) {
                $customerAccountRequest = Request::create('', 'POST');
                $customerAccountRequest->setMethod('POST');
                $customerAccountRequest->request->add(['fullName' => $this->fullName, 'customerEmail' => $this->customerEmail, 'password' => $this->password, 'passwordAgain' => $this->passwordAgain, 'consentForm' => $this->consentForm, 'privacyPolicy' => $this->privacyPolicy]);
                (new CustomerController())->store($customerAccountRequest);
                $this->step++;
            }
        }
        else if($this->step == 9)
        {
            $this->validateOnly('registeredPassword');

            if(!$this->tryLogin()) return;
            else $this->step++;
        }
        else if($this->step == 10)
        {
            $this->validateOnly('verificationCode');
            $this->isVerified = (new CustomerController())->verifyByEmail($this->verificationCode, $this->customerEmail);

            if($this->isVerified != 200) {
                $this->verificationCode = "";
                return;
            }

            $this->saveForm();
        }

        $this->step++;

    }

    public function prevStep()
    {
        if($this->step > 0)
            $this->step--;
    }

    public function saveForm(): void
    {
        if($this->logo != null)
            $this->logoPath = $this->logo->storeAs('customer-logos/'.Auth::user()->id, Str::uuid());
        else $this->logoPath = null;
        $formRequest = FormStoreRequest::create('', 'POST');
        $formRequest->setMethod('POST');
        $formRequest->request->add([
            /* STEP 0 */
            'companyType' => $this->companyType,
            'companyName' => $this->companyName,
            'companyNameShort' => $this->companyNameShort ?? null,
            'taxNo' => $this->taxNo,
            'taxOffice' => $this->taxOffice,
            'tradingNo' => $this->tradingNo,
            'mersisNo' => $this->mersisNo,
            'logoPath' => $this->logoPath,
            /* STEP 0 */

            /* STEP 1 */
            'town' => $this->town,
            'address' => $this->address,
            'telNo' => $this->telNo,
            'mailType' => $this->mailType,
            'mailAddress' => $this->mailAddress,
            /* STEP 1 */

            /* STEP 2 */
            'website' => $this->website ?? null,
            'court' => $this->court,
            'subjectTitle' => $this->subjectTitle,
            'hasPersonal' => $this->hasPersonal,
            /* STEP 2 */

            /* STEP 3 */
            'personal' => $this->personel,
            'musteri' => $this->musteri,
            /* STEP 3 */

            /* STEP 4 */
            'infopurpose' => $this->infopurpose,
            /* STEP 4 */

            /* STEP 5 */
            'datashare' => $this->datashare,
            /* STEP 5 */

            /* STEP 6 */
            'datastorage' => $this->datastorage,
            /* STEP 6 */

            /* STEP 6 */
            'dataStorageTime' => $this->dataStorageTime,
            'dataStorageTimeType' => $this->dataStorageTimeType,
            /* STEP 6 */
        ]);
        (new FormController)->store($formRequest);
    }

    public function tryLogin(): bool
    {
        $executed = RateLimiter::attempt(
            'try-verify:'.request()->ip(),
            $perMinute = 5,
            function() {
                if(Auth::attempt(['email' => $this->customerEmail, 'password' => $this->registeredPassword]))
                {
                    RateLimiter::clear('try-verify:'.request()->ip());
                    return 200;
                }
                else return 400;
            }
        );
        if($executed == 200)
            return true;
        elseif($executed == 400)
            $this->addError('registeredPassword', 'Hatalı şifre');

        else
            $this->addError('registeredPassword', 'Çok fazla giriş denemesi yapıldı. Lütfen 1 dakika bekleyip tekrar deneyin.');

        return false;
    }
}
