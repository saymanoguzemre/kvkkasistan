<form action="">
    <div @class(['hidden' => $this->step != 8])>
        <x-form-label label="Dokümanlarına ulaşabilmen ve ödeme işlemini yapabilmen için üye olman gerekiyor." />
        <div class="grid grid-cols-1 md:grid-cols-2 mt-5 gap-x-6">
            <div class="col-span-2">
                <x-form-input wire:model="fullName" name="fullName" label="Adın Soyadın" id="full_name" />
            </div>
            <div class="col-span-2">
                <x-form-input wire:model="customerEmail" type="email" label="E-Posta Adresin" name="customerEmail" id="customer_email" />
            </div>
            <div>
                <x-form-input wire:model="password" type="password" label="Şifren" name="password" id="password" />
            </div>
            <div>
                <x-form-input wire:model="passwordAgain" type="password" label="Şifre Tekrar" name="passwordAgain" id="password_again" />
            </div>
            <div class="col-span-2 mt-4">
                <x-form-checkbox wire:model="consentForm" value="1" label="Açık Rıza Onay Formu'nu okudum, kabul ediyorum." name="consentForm" id="consent_form" />
                <x-form-checkbox wire:model="privacyPolicy" value="1" label="Aydınlatma Beyanı'nı okudum, kabul ediyorum." name="privacyPolicy" id="privacy_policy" />
            </div>
        </div>
    </div>
</form>
