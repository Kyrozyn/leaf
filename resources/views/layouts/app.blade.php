<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @livewireStyles
<body>

<div class="container mx-auto px-5 lg:px-10 py-1">
    <!-- navbar -->
    @include('layouts.navigation')
    <div class="md:flex">
        <!-- menuleft -->
        @yield('menuleft')

        <div class="grid w-full">
            @yield('message')
            @yield('content')
        </div>
    </div>
    @if(session()->has('KataKunci'))
    <div class="md:hidden fixed bottom-0 flex flex-col space-y-2 w-full left-0">
	        <div class="bottom-0 py-8 mx-auto">
                <ul class="menu items-stretch px-3 shadow-lg bg-base-100 horizontal rounded-box">
                    <li class="bordered">
                        <a>
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 512 512">
                                <path d="M512 295.222l-256-198.713-256 198.714v-81.019l256-198.713 256 198.714zM448 288v192h-128v-128h-128v128h-128v-192l192-144z"></path>
                            </svg>
                        </a>
                    </li>
                    <li class="">
                        <a>
                            <svg width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z"/>  <line x1="9" y1="12" x2="15" y2="12" />  <line x1="12" y1="9" x2="12" y2="15" />  <path d="M4 6v-1a1 1 0 0 1 1 -1h1m5 0h2m5 0h1a1 1 0 0 1 1 1v1m0 5v2m0 5v1a1 1 0 0 1 -1 1h-1m-5 0h-2m-5 0h-1a1 1 0 0 1 -1 -1v-1m0 -5v-2m0 -5" />
                            </svg>
                        </a>
                    </li>
                </ul>
            </div>
    </div>
    @endif
</div>
<!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    @livewireScripts
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <x-livewire-alert::scripts/>
    @yield('scripts')
</body>
</html>
