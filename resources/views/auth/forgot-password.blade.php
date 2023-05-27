<x-guest-layout>
    <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
        {{ __('Parolanızı mı unuttunuz? Sorun değil. Bize e-posta adresinizi bildirin ve size bir parola sıfırlama bağlantısı gönderelim. Bu bağlantıyla yeni bir parola seçebileceksiniz.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="'E-Posta'" />
            <x-form-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                Şifre Sıfırlama Linki
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
