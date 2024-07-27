<form action="{{ route('form.store') }}" id="kvkkasistanForm" method="POST" enctype="multipart/form-data">
@csrf
<div @class(['hidden' => $this->step != 0])>
    <x-form-group class="mt-0 mb-8" name="orderType" label="Satın almak istediğiniz paket" inline>
        <x-form-radio wire:model.defer="orderType" class="mt-0" id="order_type_1" type="radio" value="1" name="orderType" label="Temel Paket" />
        <x-form-radio wire:model.defer="orderType" class="mt-0" id="order_type_2" type="radio" value="2" name="orderType" label="Standart Paket" />
        <x-form-radio wire:model.defer="orderType" class="mt-0" id="order_type_3" type="radio" value="3" name="orderType" label="Gelişmiş Paket" />
    </x-form-group>
    <table class="w-full">
        <thead class="">
            <tr>
                <th class="w-3/6 text-left"></th>
                <th class="w-1/6 text-left">Temel</th>
                <th class="w-1/6 text-left">Standart</th>
                <th class="w-1/6 text-left">Gelişmiş</th>
            </tr>
        </thead>
        <tbody class="divide-y dark:divide-slate-600">
            <tr>
                <td class="font-medium py-2">Aydınlatma Metinleri</td>
                <td>
                    <x-pricing-tick />
                </td>
                <td>
                    <x-pricing-tick />
                </td>
                <td>
                    <x-pricing-tick />
                </td>
            </tr>
            <tr>
                <td class="font-medium py-2">İlgili Kişi Başvuru Formu</td>
                <td>
                    <x-pricing-tick />
                </td>
                <td>
                    <x-pricing-tick />
                </td>
                <td>
                    <x-pricing-tick />
                </td>
            </tr>
            <tr>
                <td class="font-medium py-2">Açık Rıza Metinleri</td>
                <td>
                    <x-pricing-tick />
                </td>
                <td>
                    <x-pricing-tick />
                </td>
                <td>
                    <x-pricing-tick />
                </td>
            </tr>
            <tr>
                <td class="font-medium py-2">Doküman Kullanım Rehberi</td>
                <td>
                    <x-pricing-tick />
                </td>
                <td>
                    <x-pricing-tick />
                </td>
                <td>
                    <x-pricing-tick />
                </td>
            </tr>
            <tr>
                <td class="font-medium py-2">Bülten Üyeliği</td>
                <td>
                    <x-pricing-tick />
                </td>
                <td>
                    <x-pricing-tick />
                </td>
                <td>
                    <x-pricing-tick />
                </td>
            </tr>
            <tr>
                <td class="font-medium py-2">Çerez Politikası</td>
                <td>
                    <x-pricing-x />
                </td>
                <td>
                    <x-pricing-tick />
                </td>
                <td>
                    <x-pricing-tick />
                </td>
            </tr>
            <tr>
                <td class="font-medium py-2">Çerez Rehberi</td>
                <td>
                    <x-pricing-x />
                </td>
                <td>
                    <x-pricing-tick />
                </td>
                <td>
                    <x-pricing-tick />
                </td>
            </tr>
            <tr>
                <td class="font-medium py-2">Politikalar</td>
                <td>
                    <x-pricing-x />
                </td>
                <td>
                    <x-pricing-tick />
                </td>
                <td>
                    <x-pricing-tick />
                </td>
            </tr>
            <tr>
                <td class="font-medium py-2">Özel Nitelikli Veri Politikaları</td>
                <td>
                    <x-pricing-x />
                </td>
                <td>
                    <x-pricing-tick />
                </td>
                <td>
                    <x-pricing-tick />
                </td>
            </tr>
            <tr>
                <td class="font-medium py-2">Gizlilik Sözleşmeleri</td>
                <td>
                    <x-pricing-x />
                </td>
                <td>
                    <x-pricing-tick />
                </td>
                <td>
                    <x-pricing-tick />
                </td>
            </tr>
            {{-- <tr>
                <td class="font-medium py-2">Veri Envanteri</td>
                <td>
                    <x-pricing-x />
                </td>
                <td>
                    <x-pricing-x />
                </td>
                <td>
                    <x-pricing-tick />
                </td>
            </tr> --}}
            {{-- <tr>
                <td class="font-medium py-2">Risk Analizi</td>
                <td>
                    <x-pricing-x />
                </td>
                <td>
                    <x-pricing-x />
                </td>
                <td>
                    <x-pricing-tick />
                </td>
            </tr> --}}

            <tr>
                <td class="font-medium py-2">KVK Uyum Rehberi</td>
                <td>
                    <x-pricing-x />
                </td>
                <td>
                    <x-pricing-x />
                </td>
                <td>
                    <x-pricing-tick />
                </td>
            </tr>
        </tbody>
    </table>
</div>
