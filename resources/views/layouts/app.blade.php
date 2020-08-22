<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>

    <script src="{{ asset('js/jquery.min.js') }}" defer></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/navbar.js') }}" defer></script>
    <script src="{{ asset('js/main.js') }}" defer></script>

    <script src="https://kit.fontawesome.com/8ac7442e81.js" crossorigin="anonymous"></script>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link href="{{ mix('css/main.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100 h-screen antialiased leading-none">
@include('layouts.navBar')

<div id="app">
    {{--        <nav class="bg-blue-900 shadow mb-8 py-6">--}}
    {{--            <div class="container mx-auto px-6 md:px-0">--}}
    {{--                <div class="flex items-center justify-center">--}}
    {{--                    <div class="mr-6">--}}
    {{--                        <a href="{{ url('/') }}" class="text-lg font-semibold text-gray-100 no-underline">--}}
    {{--                            {{ config('app.name', 'Laravel') }}--}}
    {{--                        </a>--}}
    {{--                    </div>--}}
    {{--                    <div class="flex-1 text-right">--}}
    {{--                        @guest--}}
    {{--                            <a class="no-underline hover:underline text-gray-300 text-sm p-3" href="{{ route('login') }}">{{ __('Login') }}</a>--}}
    {{--                            @if (Route::has('register'))--}}
    {{--                                <a class="no-underline hover:underline text-gray-300 text-sm p-3" href="{{ route('register') }}">{{ __('Register') }}</a>--}}
    {{--                            @endif--}}
    {{--                        @else--}}
    {{--                            <span class="text-gray-300 text-sm pr-4">{{ Auth::user()->name }}</span>--}}

    {{--                            <a href="{{ route('logout') }}"--}}
    {{--                               class="no-underline hover:underline text-gray-300 text-sm p-3"--}}
    {{--                               onclick="event.preventDefault();--}}
    {{--                                    document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>--}}
    {{--                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">--}}
    {{--                                {{ csrf_field() }}--}}
    {{--                            </form>--}}
    {{--                        @endguest--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </nav>--}}

    @yield('content')
</div>
@yield('content1')
@yield('content2')
@yield('content3')
@yield('content4')


@include('layouts.footer')
@yield('scripts')

</body>
</html>
