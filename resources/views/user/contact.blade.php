@extends('layouts.app')
@section('content')
<div class="p-16"></div>
    <section class="container mx-auto ">
        <h1 class="font-title text-4xl text-center ">Contactez nous</h1>
        <div class="flex justify-center flex-wrap items-center">
            <form class="w-full max-w-lg p-6">
                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                               for="first-name">
                            Nom
                        </label>
                        <input
                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                            id="first-name" type="text" placeholder="Prénom">

                    </div>
                    <div class="w-full md:w-1/2 px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                               for="last-name">
                            Prénom
                        </label>
                        <input
                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="last-name" type="text" placeholder="Nom">
                    </div>
                </div>
                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="email">
                            Email
                        </label>
                        <input
                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="email" type="email" placeholder="Example@mail.com">
                    </div>
                </div>
                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="message">
                            Email
                        </label>
                        <textarea
                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            placeholder="Message" name="message" id="" cols="30" rows="10"></textarea>
                        <button type="submit" class="mr-12 px-4 py-1 rounded btn-gardiant ">Envoyer
                        </button>
                    </div>
                </div>
            </form>

            <img src="/img/banner_img.png" class="hidden md:flex w-full md:w-1/2" alt="kid-gamer">

        </div>

    </section>

@endsection

