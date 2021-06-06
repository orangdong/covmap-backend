<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.meta')

    <title>@yield('title') | Dashboard CovMap</title>

    {{-- Favicon --}}
    {{-- <link rel="apple-touch-icon" sizes="180x180" href="{{asset('assets/img/apple-touch-icon.png')}}"> --}}
    {{-- <link rel="shortcut icon" type="image/x-icon" href="{{asset('/assets/img/favicon.png')}}"> --}}

    @stack('before-style')

    {{-- style --}}
    @include('includes.style')

    @stack('after-style')
</head>
<body style="font-family: 'Poppins', sans-serif;">
    @include('includes.header')
    <div class="h-full w-full px-8 py-20" style="background-color: #000000;">
        @yield('content')
    </div>
    @include('includes.footer')
    
    @stack('before-script')
   

    {{-- script --}}
    @include('includes.script')

    @stack('after-script')
</body>
</html>