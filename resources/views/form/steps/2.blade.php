<div @class(['hidden' => $this->step != 2])>
    <div class="col-span-2 grid grid-cols-2 gap-4 border-b pb-4">
        {{-- @livewire('town-dropdown') --}}

        <div class="grid grid-cols-2 col-span-2 gap-4">
            <div class="input-group col-span-1">
                <x-form-select label="İl" name="city" wire:model="city" class="form-input-text select2 w-full">
                    <option value="">---İl---</option>
                    @foreach($cities as $city)
                        <option value={{ $city->id }}>{{ $city->city }}</option>
                    @endforeach
                </x-form-select >
            </div>
            @if(count($cities) > 0)
                <div class="input-group col-span-1">
                    <x-form-select label="İlçe" name="town" wire:model="town" class="form-input-text select2 w-full">
                        <option value="">---İlçe---</option>
                        @foreach($towns as $town)
                            <option value={{ $town->id }}>{{ $town->town }}</option>
                        @endforeach
                    </x-form-select >
                </div>
            @endif
        </div>


        <div class="input-group col-span-2">
            <label for="address" class="form-input-label block">Açık Adres*</label>
            <x-form-textarea wire:model="address" class="form-input-text w-full" name="address" id="address" rows="2"></x-form-textarea>
        </div>
    </div>

    <x-form-input wire:model="telNo" label="Telefon No*" name="telNo" id="tel_no" />

    <x-form-group>
        <div class="grid md:grid-cols-2 md:gap-x-6">
            <x-form-label class="col-span-2" label="Kep Adresi Var Mı?*"/>
            <x-form-radio wire:model="mailType" wire:click="mailType(false)" id="has_kep_address_0" value="0" name="hasKepAddress" label="Yok" />
            <x-form-radio wire:model="mailType" wire:click="mailType(true)" id="has_kep_address_1" value="1" name="hasKepAddress" label="Var"/>
        </div>
    </x-form-group>

    <x-form-input wire:model="mailAddress" type="email" label="{{ $mailType == false ? 'Kurumsal E-Posta Adresi' : 'KEP Adresi' }}*" name="mailAddress" id="mail_address" />
</div>
