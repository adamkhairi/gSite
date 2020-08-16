@extends('layouts.app')

@section('content')
    <div class="p-16"></div>

    <section>

        <div class="flex justify-center flex-wrap">
            <div class="flex flex-col md:w-2/2 w-100 px-6 h-full overflow-hidden  ">

                <div class="pb-4 col-span-8 ">
                    <div class="max-w-xl rounded overflow-hidden shadow-lg bg-white">

                        <img class="w-full" src="{{$post->img}}" alt="Sunset in the mountains">
                        <p><span class="vacation-card-price">{{$post->created_at}}</span></p>
                        <div class="px-6 py-4">
                            <div class="relative">
                                <h1 class="font-title text-2xl mb-2 text-black">{{$post->title}}</h1>
                                <p class="pr-6 text-black">{{$post->body}}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <h1 class="font-title text-4xl text-white text-center ">commentaire</h1>
                @foreach($post->comments as $comment)
                    <div
                        class="inline-grid max-w-xs sm:max-w-xs lg:max-w-lg lg:flex bg-black rounded-lg border shadow-lg pb-6 lg:pb-0">
                        <div class="w-full lg:w-2/3 p-4">
                            <h1>{{$comment->user_id}}</h1>
                            <div class="inline-grid">

                                <p class="text-sm my-4 text-white opacity-75">{{($comment->body)}}</p>

                            </div>
                        </div>

                    </div>
                @endforeach


                @auth
                    <div class="flex justify-center flex-wrap items-center">
                        <form class="w-full max-w-lg p-6" method="post" action="
                            {{route('comment.store',[$post->id])}}
                            ">

                            <div class="flex flex-wrap -mx-3 mb-6">
                                <div class="w-full px-3">
                                    <input type="hidden" name="_token" value="{{Session::token()}}">
                                    <input type="hidden" name="post_id" value="{{$post->id}}">
                                </div>
                            </div>

                            <div class="flex flex-wrap -mx-3 mb-6">
                                <div class="w-full px-3">
                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                           for="body">
                                        Message*
                                    </label>
                                    <textarea
                                        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                        placeholder="Message" name="message" id="body" cols="30" rows="10"></textarea>
                                    <div class="flex flex-wrap -mx-3 mb-6">
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="mr-12 px-4 py-1 rounded btn-gardiant ">Commenter</button>

                        </form>
                    </div>

                    @if(Auth::user()->is_admin)
                        {{--                        <form method="post" action="{{ route('article.update',$post->id) }}">--}}


                        <a href="
                            {{ route('articles.edit', [$post->id]) }}
                            "
                           class="px-4 py-1 m-2 rounded btn-gardiant">
                            Modifier
                        </a>
                        {{--                        </form>--}}
                        <a href="
                            {{route('articles.destroy',[$post->id])}}
                            "
                           class="px-4 py-1 m-2 rounded btn-gardiant">
                            Supprimer
                        </a>

                    @endif
                @else
                    <a href="{{route('user.login')}}" class="px-4 py-1 m-2 ">connecter vous pour commenter</a>
                @endauth

            </div>

        </div>


        {{--        <div class="text-left bg-gray-400 lg:w-1/3 w-5/6">--}}
        {{--            <form class="w-full max-w-sm" action="{{route('posts.search')}}" method="post">--}}
        {{--                <div class="flex items-center border-b border-red-500 py-2">--}}
        {{--                    <input--}}
        {{--                        class="appearance-none bg-transparent border-none w-full text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none"--}}
        {{--                        type="search" name="search" placeholder="Rechercher" aria-label="">--}}
        {{--                    <input type="hidden" name="_token" value="{{Session::token()}}">--}}
        {{--                    <button--}}
        {{--                        class="flex-shrink-0 bg-white hover:bg-red-600 border-write hover:bg-red-600 text-sm border-4 text-white py-1 px-2 rounded"--}}
        {{--                        type="button">--}}
        {{--                        <img class="" src="img/recherche.svg" alt="">--}}
        {{--                    </button>--}}

        {{--                </div>--}}
        {{--            </form>--}}
        {{--            <div class="bg-white p-3 mt-1">--}}
        {{--                @include('layouts.sidebar')--}}
        {{--            </div>--}}
        {{--        </div>--}}

    </section>





@endsection

@section('script')
@endsection
