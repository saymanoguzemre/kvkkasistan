<div @class(['hidden' => $this->step != 7])>
    <x-form-label label="Verilerin saklanacağı ortamları seçiniz." />
    <p class="mt-2">-Elektronik Ortamlar-</p>
    <ul class="grid w-full gap-6 md:grid-cols-2 mt-4">
        @foreach ($electronicDatastorages as $eds)
        <li>
            <input type="checkbox" wire:model.defer="datastorage.{{ $eds->id }}" name="datastorage.{{ $eds->id }}" id="datastorage_{{ $eds->id }}" value="1" class="hidden peer" required="">
            <label for="datastorage_{{ $eds->id }}" class="inline-flex items-center justify-between w-full h-full p-4 text-gray-500 bg-white border-2 border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 peer-checked:border-blue-600 hover:text-gray-600 dark:peer-checked:text-gray-300 peer-checked:text-gray-600 hover:bg-gray-50 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">
                <div class="block">
                    {{-- <div class="w-full text-lg font-semibold"></div> --}}
                    <div class="w-full text-sm">{{ $eds->datastorage }}</div>
                </div>
            </label>
        </li>
        @endforeach
    </ul>
    <p class="mt-2">-Fiziksel Ortamlar-</p>
    <ul class="grid w-full gap-6 md:grid-cols-2 mt-4">
        @foreach ($physicalDatastorages as $pds)
        <li>
            <input type="checkbox" wire:model.defer="datastorage.{{ $pds->id }}" name="datastorage.{{ $pds->id }}" id="datastorage_{{ $pds->id }}" value="1" class="hidden peer" required="">
            <label for="datastorage_{{ $pds->id }}" class="inline-flex items-center justify-between w-full h-full p-4 text-gray-500 bg-white border-2 border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 peer-checked:border-blue-600 hover:text-gray-600 dark:peer-checked:text-gray-300 peer-checked:text-gray-600 hover:bg-gray-50 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">
                <div class="block">
                    {{-- <div class="w-full text-lg font-semibold"></div> --}}
                    <div class="w-full text-sm">{{ $pds->datastorage }}</div>
                </div>
            </label>
        </li>
        @endforeach
    </ul>


</div>
