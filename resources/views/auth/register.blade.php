@extends('layouts.app')

@section('content')
    <div class="m-2 p-4 text-center">
        <h1 class="text-4xl font-title">Inscrivez-vous </h1>
    </div>
    <div class="flex justify-center items-center text-black">
        <div class="flex flex-wrap justify-center items-center px-8 py-24">
            <div class="w-full max-w-sm">
                <div class="flex flex-col break-words bg-white border border-2 rounded shadow-md">

                    <div class="font-semibold bg-gray-200 text-gray-700 py-3 px-6 mb-0">
                        {{ __('Register') }}
                    </div>

                    <form class="w-full p-6" method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="flex flex-wrap mb-6">
                            <label for="name" class="block text-gray-700 text-sm font-bold mb-2">
                                {{ __('Name') }}:
                            </label>

                            <input id="name" type="text"
                                   class="form-input w-full @error('name')  border-red-500 @enderror" name="name"
                                   value="{{ old('name') }}" required autocomplete="name" autofocus>

                            @error('name')
                            <p class="text-red-500 text-xs italic mt-4">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>

                        {{--NAME--}}
                        <div class="flex flex-row mb-6">
                            <div class="flex flex-wrap mb-6">
                                <label for="genre" class="block text-gray-700 text-sm font-bold mb-2">
                                    {{ __('First Name') }}:
                                </label>
                                <select name="genre" id="genre"
                                        class="form-input w-full @error('genre')  border-red-500 @enderror">
                                    <option selected disabled >Sex</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>

                                @error('genre')
                                <p class="text-red-500 text-xs italic mt-4">
                                    {{ $message }}
                                </p>
                                @enderror
                            </div>
                        </div>


                        {{--address--}}
                        <div class="flex flex-wrap mb-6">
                            <label for="address" class="block text-gray-700 text-sm font-bold mb-2">
                                {{ __('Adresse') }}:
                            </label>


                            <textarea name="address" id="address"
                                      class="form-input w-full @error('address')  border-red-500 @enderror" required
                                      autocomplete="address" autofocus cols="30"
                                      rows="10">{{ old('address') }}</textarea>


                            @error('address')
                            <p class="text-red-500 text-xs italic mt-4">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>


                        {{--Birthday--}}
                        <div class="flex flex-wrap mb-6">
                            <label for="birthday" class="block text-gray-700 text-sm font-bold mb-2">
                                {{ __('BirthDay') }}:
                            </label>

                            <input id="birthday" type="date"
                                   class="form-input w-full @error('birthday')  border-red-500 @enderror"
                                   name="birthday"
                                   value="{{ old('birthday') }}" required autocomplete="birthday" autofocus>

                            @error('birthday')
                            <p class="text-red-500 text-xs italic mt-4">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>


                        {{--                        EMAIL--}}
                        <div class="flex flex-wrap mb-6">
                            <label for="email" class="block text-gray-700 text-sm font-bold mb-2">
                                {{ __('E-Mail Address') }}:
                            </label>

                            <input id="email" type="email"
                                   class="form-input w-full @error('email') border-red-500 @enderror" name="email"
                                   value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                            <p class="text-red-500 text-xs italic mt-4">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>

                        {{--                        PASSWORD--}}

                        <div class="flex flex-wrap mb-6">
                            <label for="password" class="block text-gray-700 text-sm font-bold mb-2">
                                {{ __('Password') }}:
                            </label>

                            <input id="password" type="password"
                                   class="form-input w-full @error('password') border-red-500 @enderror" name="password"
                                   required autocomplete="new-password">

                            @error('password')
                            <p class="text-red-500 text-xs italic mt-4">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>

                        <div class="flex flex-wrap mb-6">
                            <label for="password-confirm" class="block text-gray-700 text-sm font-bold mb-2">
                                {{ __('Confirm Password') }}:
                            </label>

                            <input id="password-confirm" type="password" class="form-input w-full"
                                   name="password_confirmation" required autocomplete="new-password">
                        </div>

                        <div class="flex flex-wrap">
                            <button type="submit"
                                    class="inline-block align-middle text-center select-none border font-bold whitespace-no-wrap py-2 px-4 rounded text-base leading-normal no-underline text-gray-100 bg-blue-500 hover:bg-blue-700">
                                {{ __('Register') }}
                            </button>

                            <p class="w-full text-xs text-center text-gray-700 mt-8 -mb-4">
                                {{ __('Already have an account?') }}
                                <a class="text-blue-500 hover:text-blue-700 no-underline" href="{{ route('login') }}">
                                    {{ __('Login') }}
                                </a>
                            </p>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
