<div @class(['hidden' => $this->step != 9])>
    <span class="text-gray-700"><b>{{ $customerEmail ?? "" }}</b> ile zaten bir kayıt yapılmış. Bu hesap senin ise aşağıdan giriş yap. Senin değil ise geri gidip başka bir e-posta adresi ile kayıt olmayı dene.</span>
    <div class="grid grid-cols-1 md:grid-cols-7 mt-5 gap-x-6">
        <div class="col-span-5 col-start-2">
            <x-form-input wire:model.defer="registeredPassword" name="registeredPassword" type="password" label="Şifre" id="registered_password" />
        </div>
    </div>
</div>
