<div @class(['hidden' => $this->step != 7])>
    <x-form-label label="Verilerin saklanacağı süreyi belirtin. Örn: 1 Yıl" />
    <div class="grid grid-cols-1 md:grid-cols-2 mt-5 gap-6">
        <div>
            <x-form-input wire:model.defer="dataStorageTime" type="number" min="1" step="1" label="" name="dataStorageTime" id="data_storage_time" />
        </div>
        <div>
            <x-form-select wire:model.defer="dataStorageTimeType" label="" name="dataStorageTimeType" id="data_storage_time_type" class="form-input-text select2 w-full">
                <option value="1">Gün</option>
                <option value="2" selected>Ay</option>
                <option value="3">Yıl</option>
            </x-form-select>
        </div>
    </div>
</div>
</form>
