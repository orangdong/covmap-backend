<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>
        {{-- Favicon --}}
        <link rel="apple-touch-icon" sizes="180x180" href="{{asset('assets/img/logo.png')}}">
        <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/img/logo.png')}}">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body style="font-family: 'Poppins', sans-serif;" class="antialiased">
        <x-jet-banner />

        <div style="background-color: #000000;" class="min-h-screen">
            {{-- @livewire('navigation-menu') --}}

            <!-- Page Heading -->
            @if (isset($header))
                <header style="background-color: #000000;">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        @stack('modals')

        @livewireScripts
    </body>
</html>
