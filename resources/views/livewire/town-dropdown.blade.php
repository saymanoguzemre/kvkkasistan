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
