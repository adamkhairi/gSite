@extends('layouts.app')

@section('content')


@endsection

@section('content1')
    <section
        class="flex md:flex-row justify-around items-center p-6 text-center flex-col-reverse container h-screen mx-auto">


        <div class="flex flex-col items-center">
            <div class="my-4">
                <h1 class="text-4xl font-bold mb-6 font-title">Commencer</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore, quis.</p>
            </div>
            <div class="my-4">
                @if (Route::has('login'))
                    <a href="{{ route('login') }}" id="loginBtnHero" class="btn-gardiant px-4 py-1 m-2 rounded">Se
                        connecter</a>


                @endif
                @if (Route::has('register'))
                    <a href="{{ route('register') }}" id="registerBtn" class="btn-gardiant px-4 py-1 m-2 rounded">Inscrivez-vous</a>

                @endif
            </div>

        </div>
        <div>
            <img src="/img/banner_img.png" alt="">
        </div>

    </section>
@endsection

@section('content2')
    <section class="container mx-auto ">


        <h1 class="text-4xl text-center font-title">Activity</h1>

        <div class="owl-carousel my-20">
            <div class="text-center">
                <div class=" w-full lg:flex">
                    <div
                        class="h-48 lg:h-auto lg:w-48 flex-none bg-cover rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden"
                        style="background-image: url('https://tailwindcss.com/img/card-left.jpg')"
                        title="Woman holding a mug">
                    </div>
                    <div
                        class="border-r border-b border-l border-grey-light lg:border-l-0 lg:border-t lg:border-grey-light bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
                        <div class="mb-8 text-gray-900">
                            <p class="text-sm text-grey-dark flex items-center">
                                Members only
                            </p>
                            <div class="text-black font-bold text-xl mb-2">Can coffee make you a better developer?</div>
                            <p class="text-grey-darker text-base">Lorem ipsum dolor sit amet, consectetur adipisicing
                                elit.
                                Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium
                                nihil.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <div class=" w-full lg:flex">
                    <div
                        class="h-48 lg:h-auto lg:w-48 flex-none bg-cover rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden"
                        style="background-image: url('https://tailwindcss.com/img/card-left.jpg')"
                        title="Woman holding a mug">
                    </div>
                    <div
                        class="border-r border-b border-l border-grey-light lg:border-l-0 lg:border-t lg:border-grey-light bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
                        <div class="mb-8 text-gray-900">
                            <p class="text-sm flex items-center">
                                Members only
                            </p>
                            <div class="text-black font-bold text-xl mb-2">Can coffee make you a better developer?</div>
                            <p class="text-base">Lorem ipsum dolor sit amet, consectetur adipisicing
                                elit.
                                Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium
                                nihil.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <div class=" w-full lg:flex">
                    <div
                        class="h-48 lg:h-auto lg:w-48 flex-none bg-cover rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden"
                        style="background-image: url('https://tailwindcss.com/img/card-left.jpg')"
                        title="Woman holding a mug">
                    </div>
                    <div
                        class="border-r border-b border-l border-grey-light lg:border-l-0 lg:border-t lg:border-grey-light bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
                        <div class="mb-8 text-gray-900">
                            <p class="text-sm flex items-center">
                                Members only
                            </p>
                            <div class="text-black font-bold text-xl mb-2">Can coffee make you a better developer?</div>
                            <p class="text-grey-darker text-base">Lorem ipsum dolor sit amet, consectetur adipisicing
                                elit.
                                Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium
                                nihil.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('content3')
    <section class="w-full mt-16">

        <h1 class="text-4xl text-center font-title mb-16">Articles</h1>
        <div class="flex justify-center">
            <div class="flex flex-col md:w-3/6 w-100 px-6 h-full overflow-hidden">
                <div class="pb-4 col-span-8">
                    <div class="lg:flex justify-center items-center">
                        <img class="pr-6 md:w-2/4 img-art" src="img/article1.png" alt="">
                        <div class="relative">
                            <h1 class="font-title text-2xl mb-2">uncomming fighter</h1>
                            <p class="pr-6">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates, velit
                                ipsa accusamus sunt alias sit blanditiis possimus totam fuga similique cum maxime esse
                                eos quos quasi. Impedit minima quas voluptas.</p>
                            <a class="float-right btn-gardiant rounded px-4 py-1 m-2 relative bottom-0 right-0"
                               href="#">voir plus...</a></div>
                    </div>

                </div>
                <div class="pb-4 col-span-8">
                    <div class="lg:flex justify-center items-center">
                        <img class="pr-6 md:w-2/4 img-art" src="img/article2.png" alt="">
                        <div class="relative">
                            <h1 class="font-title text-2xl mb-2">uncomming fighter</h1>
                            <p class="pr-6">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates, velit
                                ipsa accusamus sunt alias sit blanditiis possimus totam fuga similique cum maxime esse
                                eos quos quasi. Impedit minima quas voluptas.</p>
                            <a class="float-right btn-gardiant rounded px-4 py-1 m-2 relative bottom-0 right-0"
                               href="#">voir plus...</a></div>
                    </div>

                </div>
                <div class="pb-4 col-span-8">
                    <div class="lg:flex justify-center items-center">
                        <img class="pr-6 md:w-2/4 img-art" src="img/article3.png" alt="">
                        <div class="relative">
                            <h1 class="font-title text-2xl mb-2">uncomming fighter</h1>
                            <p class="pr-6">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates, velit
                                ipsa accusamus sunt alias sit blanditiis possimus totam fuga similique cum maxime esse
                                eos quos quasi. Impedit minima quas voluptas.</p>
                            <a class="float-right btn-gardiant rounded px-4 py-1 m-2 relative bottom-0 right-0"
                               href="#">voir plus...</a></div>
                    </div>

                </div>
            </div>
            <div class="my-auto">
                <img class="hidden lg:block pl-10" src="img/580b57fcd9996e24bc43c297.png" alt=""
                     style="width: 25vw">
            </div>
        </div>

    </section>

@endsection

@section('content4')
    <section class="mt-20">
        <h1 class="text-4xl text-center font-title">Qui somme-nous ?</h1>
        <p class="text-center mt-2 mb-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, omnis
            sapiente. Illum pariatur ut
            vel!</p>
        <div class="flex justify-center items-center">
            <div class="text-center " id="header">
                <video id="exporevideo"
                       autoplay
                       loop
                       preload="auto"
                       muted
                       playsinline
                >
                    <source src="img/vid1.mp4" type="video/mp4"/>
                </video>

            </div>

        </div>
    </section>

@endsection

@section('content5')
    <section class="container mx-auto mt-20">
        <h1 class="font-title text-4xl text-center">Contactez nous</h1>
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
                            id="first-name" type="text" placeholder="Nom">

                    </div>
                    <div class="w-full md:w-1/2 px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                               for="last-name">
                            Prénom
                        </label>
                        <input
                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="last-name" type="text" placeholder="Doe">
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
                        <button type="submit" class="mr-12 px-4 py-1 rounded btn-gardiant "
                        >Envoyer !
                        </button>
                    </div>
                </div>
            </form>

            <img src="img/banner_img.png" class="hidden md:flex w-full md:w-1/2" alt="">

        </div>

    </section>
@endsection
