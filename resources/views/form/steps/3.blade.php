<div @class(['hidden' => $this->step != 3])>
    <x-form-label label="Hangi kategorilerde veri işlediğinizi aşağıdaki kategorilere göre yanlarındaki kutucukları seçerek belirtiniz." />
    <table class="w-full mt-4">
        <thead class="">
            <tr>
                <th @class(['w-1/4' => $has_personal, 'w-1/2' => !$has_personal, 'text-left'])>Veri kategorisi</th>
                <th @class(['w-1/4' => $has_personal, 'w-1/2' => !$has_personal, 'text-left'])>Müşteri</th>
                <th @class(['w-1/4' => $has_personal, 'w-1/2 hidden' => !$has_personal, 'text-left'])>Personel</th>
            </tr>
        </thead>
        <tbody class="divide-y dark:divide-slate-600">
            @foreach ($dataCategories as $dc)
                <tr>
                    <td class="font-medium py-2">
                        <span class="peer" data-tooltip-target="tooltip-{{ Str::slug($dc->name, '-') }}" data-tooltip-placement="right">
                            {{ $dc->name }}
                            <svg class="w-4 inline-block cursor-pointer" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="#004ED8" d="M464 256A208 208 0 1 0 48 256a208 208 0 1 0 416 0zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zm169.8-90.7c7.9-22.3 29.1-37.3 52.8-37.3h58.3c34.9 0 63.1 28.3 63.1 63.1c0 22.6-12.1 43.5-31.7 54.8L280 264.4c-.2 13-10.9 23.6-24 23.6c-13.3 0-24-10.7-24-24V250.5c0-8.6 4.6-16.5 12.1-20.8l44.3-25.4c4.7-2.7 7.6-7.7 7.6-13.1c0-8.4-6.8-15.1-15.1-15.1H222.6c-3.4 0-6.4 2.1-7.5 5.3l-.4 1.2c-4.4 12.5-18.2 19-30.6 14.6s-19-18.2-14.6-30.6l.4-1.2zM224 352a32 32 0 1 1 64 0 32 32 0 1 1 -64 0z"/></svg>
                        </span>
                        <div class="peer-hover:opacity-100 peer-hover:visible relative tooltip invisible">
                            <div id="tooltip-{{ Str::slug($dc->name, '-') }}" role="tooltip" class="absolute z-10 inline-block px-3 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg shadow-sm first-letter:capitalize">
                                {{ $dc->info }}
                            </div>
                        </div>

                    </td>
                    <td>
                        <x-form-checkbox wire:model.defer="musteri.{{ $dc->id }}" name="musteri.{{ $dc->id }}" id="{{ Str::slug($dc->name, '_') }}_musteri" value="1" />
                    </td>
                    @if($has_personal)
                        <td>
                            <x-form-checkbox wire:model.defer="personel.{{ $dc->id }}" name="personel.{{ $dc->id }}" id="{{ Str::slug($dc->name, '_') }}_personel"  value="1" />
                        </td>
                    @endif
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
