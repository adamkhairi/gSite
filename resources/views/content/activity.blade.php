@extends('layouts.app')

@section('content')
    <!-- <div class="flex flex-wrap"> -->
    <div id="header" class="w-full  h-64">
        <h1 class=" text-center font-title text-5xl pt-24">Activités</h1>
    </div>


    <!-- carousel -->
    <section class="container mx-auto">


        <div class="pt-8">
            <h1 class="pb-3 text-2xl font-title border-b-2 border-bg-white">Videos</h1>
        </div>

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
    <section class="container mx-auto">
        <div class="pt-8">
            <h1 class="pb-3 text-2xl font-title border-b-2 border-bg-white">live stream</h1>
        </div>
        <div class="flex flex-row justify-center items-center p-2 ">
            <div class="">
                <video class="" id=""
                       autoplay
                       loop
                       preload="auto"
                       muted
                       playsinline
                >
                    <source src="img/vid1.mp4" type="video/mp4"/>
                </video>
            </div>
            <div class="w-11/12 grid grid-rows-2 grid-cols-2 gap-4 p-4">

                <video id=""
                       autoplay
                       loop
                       preload="auto"
                       muted
                       playsinline
                       class="col-start-1"
                >
                    <source src="img/vid1.mp4" type="video/mp4"/>
                </video>


                <video id=""
                       autoplay
                       loop
                       preload="auto"
                       muted
                       playsinline
                       class="col-start-2"

                >
                    <source src="img/vid1.mp4" type="video/mp4"/>
                </video>


                <video id=""
                       autoplay
                       loop
                       preload="auto"
                       muted
                       playsinline
                       class="col-start-1"

                >
                    <source src="img/vid1.mp4" type="video/mp4"/>
                </video>


                <video id=""
                       autoplay
                       loop
                       preload="auto"
                       muted
                       playsinline
                       class="col-start-2"

                >
                    <source src="img/vid1.mp4" type="video/mp4"/>
                </video>

            </div>

        </div>
    </section>


    <section class="w-full mt-16 w-40"></section>

    <section id="lastSecAct">
        <section class="container mx-auto">


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
                                <div class="text-black font-bold text-xl mb-2">Can coffee make you a better developer?
                                </div>
                                <p class="text-grey-darker text-base">Lorem ipsum dolor sit amet, consectetur
                                    adipisicing
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
                                <div class="text-black font-bold text-xl mb-2">Can coffee make you a better developer?
                                </div>
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
                                <div class="text-black font-bold text-xl mb-2">Can coffee make you a better developer?
                                </div>
                                <p class="text-grey-darker text-base">Lorem ipsum dolor sit amet, consectetur
                                    adipisicing
                                    elit.
                                    Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium
                                    nihil.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
@endsection

