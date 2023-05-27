<div @class(['hidden' => $this->step != 2])>
    <x-form-input wire:model="website" label="Web Sitesi" name="website" id="website" />
    <x-form-input wire:model="court" label="Uyuşmazlık Halinde Başvurulacak Mahkeme*" name="court" id="court" />
    <x-form-input wire:model="subjectTitle" label="Bilgisi işlenen kişilerin statüsü/hitap şekli" name="subjectTitle" id="subject_title" placeholder="Örn: Müşteri, Hasta, Öğrenci" />{{-- HOVERDA İ --}}

    <x-form-group>
        <div class="grid md:grid-cols-2 md:gap-x-6">
            <x-form-label class="col-span-2" label="Bordrolu çalışanınız var mı?*"/>
            <x-form-radio wire:model="hasPersonal" wire:click="hasPersonal(false)" id="has_personal_0" value="0" name="hasPersonal" label="Yok" />
            <x-form-radio wire:model="hasPersonal" wire:click="hasPersonal(true)" id="has_personal_1" value="1" name="hasPersonal" label="Var"/>
        </div>
    </x-form-group>
</div>
