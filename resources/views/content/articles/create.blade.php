@extends('layouts.app')



@section('content')
    <div class="p-16"></div>
    <section class="container mx-auto">

        <h1 class="font-title text-4xl text-write text-center ">Ajouter un article</h1>


        @auth
            @if(Auth::user()->is_admin)


                <div class="flex justify-center flex-wrap items-center">
                    <form class="w-full max-w-lg p-6" method="post" action="{{ route('articles.store')  }}"
                          enctype="multipart/form-data" >

                        @csrf
                        <div class="flex flex-wrap -mx-3 mb-6">
                            <div class="w-full px-3">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                       for="title">
                                    Titre
                                </label>
                                <input
                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                    id="title" type="text" name="title" placeholder="Title">
                                <input type="hidden" name="_token" value="{{Session::token()}}">
                            </div>
                        </div>

                        <div class="flex flex-wrap -mx-3 mb-6">
                            <div class="w-full px-3">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                       for="body">
                                    description
                                </label>
                                <textarea
                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                    placeholder="Message" name="body" id="body" cols="30" rows="10"></textarea>
                                <div class="flex flex-wrap -mx-3 mb-6">
                                </div>
                            </div>
                        </div>
                        <div class="w-full px-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="img">
                                photo
                            </label>
                            <input
                                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                name="img" type="file" id="img" placeholder="">
                        </div>

                        <button type="submit" class="mr-12 px-4 py-1 rounded btn-gardiant ">Ajouter</button>


                    </form>
                </div>


            @endif

        @else
            <div class="text-center h-screen flex justify-center items-center">
                <a href="{{

                    route('articles.index')
                 }}">
                    Go Back
                </a>
            </div>
        @endauth


    </section>


@endsection
