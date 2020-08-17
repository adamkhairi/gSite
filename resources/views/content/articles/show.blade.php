@extends('layouts.app')

@section('')
{{--    <div class="p-16"></div>--}}

{{--    <section>--}}

{{--        <div class="flex justify-center flex-wrap">--}}
{{--            <div class="flex flex-col md:w-2/2 w-100 px-6 h-full overflow-hidden  ">--}}

{{--                <div class="pb-4 col-span-8 ">--}}
{{--                    <div class="max-w-xl rounded overflow-hidden shadow-lg bg-white">--}}

{{--                        <img class="w-full" src="{{$post->img}}" alt="Sunset in the mountains">--}}
{{--                        <p><span class="vacation-card-price">{{$post->created_at}}</span></p>--}}
{{--                        <div class="px-6 py-4">--}}
{{--                            <div class="relative">--}}
{{--                                <h1 class="font-title text-2xl mb-2 text-black">{{$post->title}}</h1>--}}
{{--                                <p class="pr-6 text-black">{{$post->body}}</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <h1 class="font-title text-4xl text-white text-center ">Comments</h1>--}}
{{--                <div class="flex flex-col justify-center items-center">--}}

{{--                    @foreach($post->comments as $comment)--}}
{{--                        <div--}}
{{--                            class="inline-grid max-w-xs sm:max-w-xs lg:max-w-lg lg:flex bg-black rounded-lg border shadow-lg pb-6 lg:pb-0 w-full">--}}
{{--                            <div class="w-full lg:w-2/3 p-4">--}}

{{--                                --}}{{--                                <h1>{{$comment->user_id}}</h1>--}}
{{--                                --}}{{--GET USER NAME USING ID FROM Comment --}}
{{--                                <h1>{{$comment->getUser($comment->user_id)->name}}</h1>--}}
{{--                                <div class="inline-grid">--}}

{{--                                    <p class="text-sm my-4 text-white opacity-75">{{($comment->body)}}</p>--}}

{{--                                </div>--}}
{{--                            </div>--}}

{{--                        </div>--}}
{{--                    @endforeach--}}
{{--                </div>--}}


{{--                @auth--}}
{{--                    <div class="flex justify-center flex-wrap items-center">--}}
{{--                        <form class="w-full max-w-lg p-6" method="post" action="--}}
{{--                            {{route('comment.store',[$post->id])}}--}}
{{--                            ">--}}

{{--                            <div class="flex flex-wrap -mx-3 mb-6">--}}
{{--                                <div class="w-full px-3">--}}
{{--                                    <input type="hidden" name="_token" value="{{Session::token()}}">--}}
{{--                                    <input type="hidden" name="post_id" value="{{$post->id}}">--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="flex flex-wrap -mx-3 mb-6">--}}
{{--                                <div class="w-full px-3">--}}
{{--                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"--}}
{{--                                           for="body">--}}
{{--                                        Message*--}}
{{--                                    </label>--}}
{{--                                    <textarea--}}
{{--                                        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"--}}
{{--                                        placeholder="Message" name="message" id="body" cols="30" rows="10"></textarea>--}}
{{--                                    <div class="flex flex-wrap -mx-3 mb-6">--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <button type="submit" class="mr-12 px-4 py-1 rounded btn-gardiant ">Commenter</button>--}}

{{--                        </form>--}}
{{--                    </div>--}}

{{--                    @if(Auth::user()->is_admin)--}}
{{--                        --}}{{--                        <form method="post" action="{{ route('article.update',$post->id) }}">--}}


{{--                        <a href="--}}
{{--                            {{ route('articles.edit', [$post->id]) }}--}}
{{--                            "--}}
{{--                           class="px-4 py-1 m-2 rounded btn-gardiant">--}}
{{--                            Modifier--}}
{{--                        </a>--}}
{{--                        --}}{{--                        </form>--}}
{{--                        <a href="--}}
{{--                            {{route('articles.destroy',[$post->id])}}--}}
{{--                            "--}}
{{--                           class="px-4 py-1 m-2 rounded btn-gardiant">--}}
{{--                            Supprimer--}}
{{--                        </a>--}}

{{--                    @endif--}}
{{--                @else--}}
{{--                    <a href="{{route('user.login')}}" class="px-4 py-1 m-2 ">connecter vous pour commenter</a>--}}
{{--                @endauth--}}

{{--            </div>--}}

{{--        </div>--}}

{{--    </section>--}}

@endsection


@section('content')


    <section>
    {{--        <div class="p-16"></div>--}}

    <!--Title-->
        <div class="text-center pt-16 md:pt-32">
            <h1 class="font-bold break-normal py-2 font-title text-3xl md:text-5xl">{{ $post->title }}</h1>
            <p class="text-sm md:text-base text-teal-500 font-bold">
               Created, {{ $post->created_at }}
            </p>
        </div>

        <!--image-->
        <div class="container w-full max-w-6xl mx-auto bg-white bg-cover mt-8 rounded"
             style="background-image:url('{{ $post->img }}'); height: 75vh;"></div>

        <!--Container-->
        <div class="container max-w-5xl mx-auto -mt-32">

            <div class="mx-0 sm:mx-6">

                <div class="bg-white w-full p-8 md:p-24 text-xl md:text-2xl text-gray-800 leading-normal"
                     >

                    <!--Post Content-->


                    <p class="py-6">
                        {{$post->body}}
                    </p>


                    <blockquote class="border-l-4 border-teal-500 italic my-8 pl-8 md:pl-12">Thank you.
                    </blockquote>


                    <!--/ Post Content-->

                </div>

                <!--Author-->
                <div class=" w-full items-center font-sans p-8 md:p-24">

                    <hr class="border-b border-gray-200">
                    <h1 class="font-title text-4xl text-white text-center p-3">Comments</h1>
                    <div class="flex flex-col justify-center items-center w-full">

                        @foreach($post->comments as $comment)
                            <div
                                class="inline-grid max-w-xs sm:max-w-xs lg:max-w-lg lg:flex bg-black rounded-lg border shadow-lg pb-6 lg:pb-0 w-full">
                                <div class="w-full lg:w-2/3 p-4">

                                    {{--                                <h1>{{$comment->user_id}}</h1>--}}
                                    {{--GET USER NAME USING ID FROM Comment --}}
                                    <h4 class="text-sm">{{$comment->getUser($comment->user_id)->name}}</h4>
                                    <div class="px-2">

                                        <p class="text-sm my-4 text-white opacity-75">{{($comment->body)}}</p>

                                    </div>
                                </div>

                            </div>
                        @endforeach
                    </div>

                    {{--                    <div class="flex-1">--}}
                    {{--                        <p class="text-base font-bold text-base md:text-xl leading-none">Ghostwind CSS</p>--}}
                    {{--                        <p class="text-gray-600 text-xs md:text-base">Tailwind CSS version of Ghost's Casper theme by <a--}}
                    {{--                                class="text-gray-800 hover:text-teal-500 no-underline border-b-2 border-teal-500"--}}
                    {{--                                href="https://www.tailwindtoolbox.com">TailwindToolbox.com</a></p>--}}
                    {{--                    </div>--}}
                    {{--                    <div class="justify-end">--}}
                    {{--                        <button--}}
                    {{--                            class="bg-transparent border border-gray-500 hover:border-teal-500 text-xs text-gray-500 hover:text-teal-500 font-bold py-2 px-4 rounded-full">--}}
                    {{--                            Read More--}}
                    {{--                        </button>--}}
                    {{--                    </div>--}}
                </div>
                <!--/Author-->

            </div>

            <hr class="border-b border-gray-200 py-4">

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
                                    Add comment
                                </label>
                                <textarea
                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                    placeholder="comment" name="message" id="body" cols="30" rows="3"></textarea>
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

    </section>
@endsection
@section('script')
@endsection
