<x-guest-layout>
    <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
        Henüz e-posta adresinizi doğrulamadığınızı görüyoruz. Devam edebilmek için lütfen e-posta adresinizi doğrulayın.
    </div>

    @if (session('status') == 'verification-link-sent')
        <div class="mb-4 font-medium text-sm text-green-600 dark:text-green-400">
            E-Posta adresinize yeni bir doğrulama linki gönderildi. Lütfen göndermiş olduğumuz e-posta'da bulunan linke tıklayarak doğrulamayı yapın.
        </div>
    @endif

    <div class="mt-4 flex items-center justify-between">
        <form method="POST" action="{{ route('verification.send') }}">
            @csrf

            <div>
                <x-primary-button>
                    Doğrulama Linki Gönder
                </x-primary-button>
            </div>
        </form>

        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <button type="submit" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                Çıkış Yap
            </button>
        </form>
    </div>
</x-guest-layout>
