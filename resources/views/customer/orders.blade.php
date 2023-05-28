@extends('layouts.main.master')
@section('content')

<div class="container mx-auto mt-5">
    <div class="relative shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Sipariş Numarası
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Şirket Adı
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Sipariş Türü
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Sipariş Tarihi
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Ödeme
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <span class="sr-only">İşlemler</span>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($orders as $form)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $form->referenceNo }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $form->companyName }}
                        </td>
                        <td class="px-6 py-4">
                            @switch($form->orderType)
                                @case(1)
                                    Temel
                                    @break
                                @case(2)
                                    Standart
                                    @break
                                @case(3)
                                    Gelişmiş
                                    @break
                            @endswitch
                            Paket
                        </td>
                        <td class="px-6 py-4">
                            {{ $form->created_at->format('d.m.Y H:m') }}
                        </td>
                        <td class="px-6 py-4">
                            @switch($form->isPaid)
                                @case(0)
                                    <a data-tooltip-target="payment-{{ $form->referenceNo }}" class="peer text-blue-600 font-semibold underline" href="{{ route('order.pay',['referenceNo' => $form->referenceNo]) }}">ÖDENMEDİ</a>
                                    <div class="peer-hover:opacity-100 peer-hover:visible relative tooltip invisible">
                                        <div role="tooltip" class="absolute z-10 inline-block px-3 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg shadow-sm first-letter:capitalize">
                                            Ödeme sayfasına gitmek için tıklayın
                                        </div>
                                    </div>
                                @break
                                @case(1)
                                    ÖDENDİ
                                @break
                            @endswitch
                        </td>
                        <td class="px-6 py-4 text-right">
                            <a href="{{ route('order.show', ['referenceNo' => $form->referenceNo]) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">İncele</a>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</div>

@endsection

@section('js')
    @if (Session::has('success'))
        <script>
            toastr.success('Ödeme Başarılı')
        </script>
    @endif
@endsection
