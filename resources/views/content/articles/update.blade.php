@extends('layouts.app')

@section('content')
<section class="container mx-auto mt-20" >
        <h1 class="font-title text-4xl text-write text-center ">Modifier un article</h1>
        <div class="flex justify-center flex-wrap items-center">
            <form class="w-full max-w-lg p-6" method="post" action="{{route('post.update',['id'=>$post->id])}}" enctype="multipart/form-data">
                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="text">
                            titre
                        </label>
                        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                             value="{{$post->title}}"  id="title" type="text" name="title" placeholder="titre">
                     <input type="hidden" name="_token" value="{{Session::token()}}" >
                            </div>
                </div>

                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="message">
                            description
                        </label>
                        <textarea
                                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                 placeholder="Message" name="body"  id="body" cols="30" rows="10">{{$post->body}}</textarea>
                                  <div class="flex flex-wrap -mx-3 mb-6">
                                       </div>  </div>
                </div>
                 <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full px-3">
                       <img src="{{URL::to('images/'.$post->file)}}" alt="" class="src">
                    </div>
                      </div>
                       <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="file">
                            photo
                        </label>
                        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                               name="file" type="file" placeholder="">
                    </div>
</div>

                        <button type="submit" class="mr-12 px-4 py-1 rounded btn-gardiant ">Ajouter</button>


            </form>
        </div>
</section>


@endsection

@section('script')
@endsection
