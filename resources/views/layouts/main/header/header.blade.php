<nav class="w-full text-white dark:bg-slate-900 flex p-4 items-center justify-between z-[60]">
    <a href="/">
        <div class="inline-flex space-x-2 mr-4">
            <div class="h-8 w-auto">
              <img class="h-full " src="{{ asset('public/img/logo/logo_color.png') }}" alt="">
            </div>
            <span class="hidden md:block text-slate-900 dark:text-slate-100 font-bold text-2xl">{{ env('APP_NAME') }}</span>
        </div>
    </a>
    <ul class="hidden md:flex space-x-2 dark:text-slate-100 text-slate-900">
        <li><x-responsive-nav-link :active="request()->routeIs('homepage')" href="/">Anasayfa</x-responsive-nav-link></li>
        <li><x-responsive-nav-link :active="request()->routeIs('blog')" href="/blog">Blog</x-responsive-nav-link></li>
        <li><x-responsive-nav-link href="/">Fiyatlandırma</x-responsive-nav-link></li>
        <li><x-responsive-nav-link :active="request()->routeIs('contact')" href="/contact">İletişim</x-responsive-nav-link></li>
    </ul>
    <div class="space-x-1 hidden md:block">
        @auth
            <div class="inline-block">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">
                            <div>{{ Auth::user()->name }}</div>

                            <div class="ml-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('customer.orders')">Siparişlerim</x-dropdown-link>
                        <x-dropdown-link :href="route('profile.edit')">Profil Bilgilerim</x-dropdown-link>
                    </x-slot>
                </x-dropdown>
            </div>
            <x-form method="POST" action="/logout" class="inline-block">
                <button type="submit" class="px-6 py-2 border border-red-600 bg-red-600  text-slate-100 rounded-full">Çıkış Yap</button>
            </x-form>
        @else
            <a href="/register" class="px-6 py-2 border rounded-full dark:text-slate-100 text-slate-900">Üye Ol</a>
            <a href="/login" class="px-6 py-2 border border-blue-600 bg-blue-600  text-slate-100 rounded-full">Giriş Yap</a>
        @endauth

    </div>



    <button class="rounded-full bg-blue-600 p-2 md:hidden">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"
            class="h-6 w-6 text-slate-100">
            <path fill-rule="evenodd"
                d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10zm0 5.25a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75a.75.75 0 01-.75-.75z"
                clip-rule="evenodd"></path>
        </svg>
    </button>
</nav>
