<div @class(['hidden' => $this->step != 11])>
    <span class="text-gray-700">{{ $customerEmail ?? "" }} E-Posta adresine 6 haneli bir kod gönderdik. Lütfen gönderdiğimiz kodu aşağıdaki alana girerek e-postanı doğrula.</span>
    <div class="grid grid-cols-1 md:grid-cols-7 mt-5 gap-x-6">
        <div class="col-span-3 col-start-3">
            <x-form-input wire:model="verificationCode" name="verificationCode" maxlength="6" label="Doğrulama Kodu" id="verification_code" />
            @if($isVerified == 429)
                <p class="mt-2 text-sm text-red-600">Çok fazla yanlış kod girişi yaptınız. Lütfen 1 dakika sonra tekrar deneyin.</p>
            @elseif($isVerified == 400)
                <p class="mt-2 text-sm text-red-600">Doğrulama kodunu yanlış girdiniz.</p>
            @endif
        </div>
    </div>
</div>
