@extends('layouts.main.master')
@section('content')
    <div class="text-slate-900 dark:text-slate-100 items-center bg-white dark:bg-slate-900">
        <div class="h-screen relative flex justify-center w-full bg-cover"
            style="background-image: url('/public/img/hero/landing.jpg')">
            <div class="absolute inset-0 bg-white opacity-40"></div>
            <div class="w-full relative z-50 p-4 space-y-4 max-w-xl flex items-center text-center mt-8 flex-col">
                <h1 class="lg:text-7xl text-5xl  dark:text-slate-900 font-bold leading-tight" id="hero-landing-title">
                    KVKK metinleri oluşturmanın <br><span class="text-blue-600">en</span><span class="text-blue-600" id="hero-landing-title-subtext">ucuz yolu.</span>
                </h1>
                <a href="/form" class="bg-blue-600 w-full  md:w-auto py-3 px-8 rounded-md text-lg text-slate-100">Hemen başla</a>
                <button id="scroll-to-pricing" class="bg-white w-full  md:w-auto py-3 px-8 rounded-md text-lg text-slate-500">Fiyatlandırma</button>
            </div>
        </div>
    </div>
    <div class="bg-white py-8 md:py-32 dark:bg-slate-900 dark:text-slate-100 text-slate-900 p-4">
        <div class="container mx-auto">
            <div class="text-center space-y-3">
                <h2 class="text-3xl font-bold ">Sadece birkaç adımda
                    <span class="text-blue-600"> kullanıma hazır KVKK metinleri</span>
                </h2>
                <p class="text-slate-600">KVKK kanunlarına uygun metinlere, çok uygun fiyatlar karşılığında hemen kullanmaya başlayabilirsin.</p>
            </div>
            <ul class="grid md:grid-cols-3 gap-4 mt-16">
                <li class="flex">
                    <h4>
                        <span class="text-2xl font-bold">1</span>
                    </h4>
                    <div class="ml-4">
                        <h3 class="text-lg font-semibold">Soruları cevapla</h3>
                        <p class="mt-2 text-gray-500 dark:text-gray-400">Metinlerin ihtiyaçlarına uygun olması için soruları eksiksiz cevapla.</p>
                    </div>
                </li>
                <li class="flex">
                    <h4>
                        <span class="text-2xl font-bold">2</span>
                    </h4>
                    <div class="ml-4">
                        <h3 class="text-lg font-semibold">Ödemeyi yap</h3>
                        <p class="mt-2 text-gray-500 dark:text-gray-400">KVKK uygunluğun için bir servet ödemene gerek yok.</p>
                    </div>
                </li>
                <li class="flex">
                    <h4>
                        <span class="text-2xl font-bold">3</span>
                    </h4>
                    <div class="ml-4">
                        <h3 class="text-lg font-semibold">KVKK metinlerin hazır</h3>
                        <p class="mt-2 text-gray-500 dark:text-gray-400">KVKK metinlerini hemen kullanmaya başla!</p>
                    </div>
                </li>
            </ul>
            <div class="flex justify-center items-center">
                <div class="mt-16 w-full max-w-xs">
                    <a class="bg-blue-600 w-full px-6 py-3 text-white text-lg hover:bg-blue-700 rounded-full" href="/register">@auth Siparişlerini Gör @else Üyelik oluştur @endauth</a>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-slate-100 py-8 md:py-32 dark:bg-slate-900 dark:text-slate-100 text-slate-900 px-4" id="pricing">
        <div class="container mx-auto">
            <div class="">
                <h2 class="text-3xl font-medium">İhtiyacına yönelik paketler </h2>
                <p class="mt-4  font-light text-gray-500 dark:text-gray-400">Sana en uygun olanı seç.</p>
            </div>
            <div class="my-8">
                <ul class="grid md:grid-cols-4  gap-y-16 md:gap-4">
                    <li></li>
                    <li
                        class="flex flex-col gap-2 bg-slate-100 dark:bg-transparent dark:border dark:border-slate-600 py-6 px-4 rounded-xl">
                        <h3 class="text-2xl font-semibold">Temel Paket</h3>
                        <p class="text-slate-700 dark:text-slate-400 font-light">En temel gereksinimler</p>
                        <span class="">
                            <span class="text-4xl">100₺ </span>
                        </span>
                        <a href="/form?type=1" class="bg-slate-700 text-slate-100 px-6 py-2 rounded-lg">Seç</a>
                    </li>
                    <li
                        class="flex flex-col gap-2 bg-slate-100 dark:bg-transparent dark:border dark:border-slate-600 py-6 px-4 rounded-xl">
                        <h3 class="text-2xl font-semibold">Standart Paket</h3>
                        <p class="text-slate-700 dark:text-slate-400 font-light">İhtiyacın olan her şey</p>
                        <span class="">
                            <span class="text-4xl">200₺ </span>
                        </span>
                        <a href="/form?type=2" class="bg-slate-700 text-slate-100 px-6 py-2 rounded-lg">Seç</a>
                    </li>
                    <li
                        class="flex flex-col gap-2 bg-slate-100 dark:bg-transparent dark:border dark:border-slate-600 py-6 px-4 rounded-xl">
                        <h3 class="text-2xl font-semibold">Gelişmiş Paket</h3>
                        <p class="text-slate-700 dark:text-slate-400 font-light">Tam destek</p>
                        <span class="">
                            <span class="text-4xl">300₺ </span>
                        </span>
                        <a href="/form?type=3" class="bg-slate-700 text-slate-100 px-6 py-2 rounded-lg">Seç</a>
                    </li>
                </ul>
            </div>
            <table class="w-full">
                <thead class="">
                    <tr>
                        <th class="w-1/4 text-left"></th>
                        <th class="w-1/4 text-left">Temel</th>
                        <th class="w-1/4 text-left">Standart</th>
                        <th class="w-1/4 text-left">Gelişmiş</th>
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
                        <td class="font-medium py-2">Bilgi Güvenliği Yönetimi</td>
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
    </div>
@endsection

@section('js')
    <script src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script>
    <script src="/js/homepage/homepage.js"></script>
@endsection
