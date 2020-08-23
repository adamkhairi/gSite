@extends('layouts.app')

@section('content')
    <div class="relative flex justify-center items-center h-screen top-0 z-50 bg-black w-full h-screen">
        <div class="absolute right-0 top-0 p-6 ">
            <a href="{{ url()->previous() }}" id="closeLogin">
                <i class="fas fa-window-close text-white text-4xl"></i>
            </a>
        </div>
        {{--        <div class="flex flex-wrap justify-center">--}}
        {{--            <div class="w-full max-w-sm">--}}
        <div class="md:grid flex justify-center items-center flex-wrap grid-cols-2 gap-2 ">
            <div>
                <div class="font-semibold bg-black text-center text-white py-3 px-6 mb-0">
                    {{ __('Login') }}
                </div>


                <form class="w-full p-6" method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="flex flex-wrap mb-6">
                        <label for="email" class="block text-gray-700 text-sm font-bold mb-2">
                            {{ __('E-Mail Address') }}:
                        </label>

                        <input id="email" type="email"
                               class="form-input bg-gray-200 appearance-none w-1/2 border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500 @error('email') border-red-500 @enderror"
                               name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>

                    <div class="flex flex-wrap mb-6">
                        <label for="password" class="block text-gray-700 text-sm font-bold mb-2">
                            {{ __('Password') }}:
                        </label>

                        <input id="password" type="password"
                               class="form-input bg-gray-200 appearance-none w-1/2 border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500 @error('password') border-red-500 @enderror"
                               name="password" required>

                        @error('password')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>

                    <div class="flex mb-6">
                        <label class="inline-flex items-center text-sm text-gray-700" for="remember">
                            <input type="checkbox" name="remember" id="remember"
                                   class="form-checkbox" {{ old('remember') ? 'checked' : '' }}>
                            <span class="ml-2">{{ __('Remember Me') }}</span>
                        </label>
                    </div>

                    <div class="flex flex-wrap items-center">
                        <button type="submit"
                                class="text-gray-100 font-bold py-2 px-4 rounded-full btn-gardiant focus:outline-none focus:shadow-outline">
                            {{ __('Connexion') }}
                        </button>

                        @if (Route::has('password.request'))
                            <a class="text-sm text-blue-500 hover:text-blue-700 whitespace-no-wrap no-underline ml-auto"
                               href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif

                        @if (Route::has('register'))
                            <p class="w-full text-xs text-center text-gray-700 mt-8 -mb-4">
                                {{ __("Don't have an account?") }}
                                <a class="text-blue-500 hover:text-blue-700 no-underline"
                                   href="{{ route('register') }}">
                                    {{ __('Register') }}
                                </a>
                            </p>
                        @endif
                    </div>
                </form>
            </div>

            <div class="mx-auto my-auto hidden md:block">
                <img src="img/banner_img.png" class="pt-8" alt="">
            </div>
        </div>
    </div>
    {{--        </div>--}}
    {{--    </div>--}}
@endsection
