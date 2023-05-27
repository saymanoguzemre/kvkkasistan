<div @class(['hidden' => $this->step != 5])>
    <x-form-label label="Verilerin paylaşılacağı kişileri aşağıdan seçiniz." />
    <ul>
        @foreach ($datashares as $datashare)
        <li class="my-1">
            <x-form-checkbox wire:model.defer="datashare.{{ $datashare->id }}" label="{{ $datashare->datashare }}" name="datashare.{{ $datashare->id }}" id="datashare_{{ $datashare->id }}" />
        </li>
        @endforeach
    </ul>

</div>
