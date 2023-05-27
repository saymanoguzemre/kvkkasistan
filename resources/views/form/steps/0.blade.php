<form action="{{ route('form.store') }}" id="kvkkasistanForm" method="POST" enctype="multipart/form-data">
@csrf
<div @class(['hidden' => $this->step != 0])>
    <x-form-group class="mt-0" name="companyType" label="Şirket Türü*" inline>
        <x-form-radio wire:model="companyType" class="mt-0" wire:click="companyType(false)" id="company_type_1" type="radio" value="0" name="companyType" label="Gerçek Kişi" />
        <x-form-radio wire:model="companyType" class="mt-0" wire:click="companyType(true)" id="company_type_0" type="radio" value="1" name="companyType" label="Tüzel Kişi" />
    </x-form-group>

    <x-form-input wire:model="companyName" name="companyName" label="{{ $companyType == false ? 'Şahıs Adı Soyadı' : 'Şirket Adı ve Ünvanı' }}" id="company_name" />

    @if($companyType == true)
        <x-form-input wire:model="companyNameShort" label="dokümanlarda Tercih Edilen Firma Adı Kısaltması" name="companyNameShort" id="company_name_short" />
    @endif

    <div class="grid md:grid-cols-2 md:gap-x-6">
        <x-form-input wire:model="taxNo" label="Vergi No*" name="taxNo" id="tax_no" />
        <x-form-input wire:model="taxOffice" label="Vergi Dairesi*" name="taxOffice" id="tax_office" />
        <x-form-input wire:model="tradingNo" label="Ticaret/Esnaf Sicil No*" name="tradingNo" id="trading_no" />
        <x-form-input wire:model="mersisNo" label="Mersis No*" name="mersisNo" id="mersis_no" />
    </div>
    <x-form-label class="col-span-2" label="Logo" for="logo" />
    <input class="block w-full text-sm text-gray-900 border border-gray-300  rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="file_input_help"  id="logo" type="file">
</div>
