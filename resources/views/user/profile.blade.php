@extends('layouts.app')

@section('content')
    <div>
        <div id="header" class="w-full  h-64">
            <h1 class=" text-center font-title text-5xl pt-24">Profile</h1>
        </div>


        <div class=" bg-white p-2">


            <img src="/img/account.png" width="120"
                 class="rounded-full border border-gray-300 shadow-lg bg-white mx-auto text-center  -mt-20" alt="">

            <h1 class="text-center text-2xl text-black font-title pt-4">Full Name</h1>

        </div>


        <div class="p-8 mt-10 mx-auto flex flex-col md:grid grid-cols-6 gap-4 container">
            <!--        ********** Aside *********-->
            <div class="w-2/3 sm:w-full mx-auto  col-span-2 lg:col-span-1 p-2 bg-gray-900 rounded-md ">
                <div>
                    <h1 class=" text-2xl p-2 lg:pl-4">Personal</h1>
                    <div class="pl-4 lg:pl-6">

                        <div id="p-detail-btn" class="flex items-center hover:bg-black justify-center sm:justify-start">

                            <i class="fas fa-user-circle text-2xl p-2"></i>
                            <h3 class="pl-2">Profile</h3>
                        </div>
                        <div id="p-edit-btn" class="flex items-center hover:bg-black justify-center sm:justify-start">

                            <i class="fas fa-arrow-alt-circle-up text-2xl p-2"></i>
                            <h3 class="pl-2">Edit</h3>
                        </div>
                    </div>
                </div>

                <div>
                    <h1 class=" text-2xl p-2 lg:pl-4">News</h1>
                    <div class="pl-4 lg:pl-6">
                        <div id="p-notify-btn" class="flex items-center hover:bg-black justify-center sm:justify-start">

                            <i class="fas fa-bell text-2xl p-2"></i>
                            <h3 class="pl-2">Notifications</h3>
                        </div>
                        <div id="p-msg-btn" class="flex items-center hover:bg-black justify-center sm:justify-start">

                            <i class="fas fa-envelope text-2xl p-2"></i>
                            <h3 class="pl-2">Messages</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-2/3 sm:w-full mx-auto row-span-1 row-start-2 col-span-1 lg:col-span-1 p-2 bg-gray-900 rounded-md ">
                <h3 class="pl-2"><i class="fas fa-play-circle text-2xl"></i> Atelier En Direct</h3>

            </div>

            <!--       ********* Page content ********-->
            <!--       ****** Details ******-->
            <section id="detailSec"
                     class="row-span-2 col-span-4 col-start-2 lg:col-span-5 p-2 bg-gray-900 rounded-md">
                <h1 class="font-title text-4xl pb-0 text-center">Details</h1>

                <div class="w-full md:w-2/3 lg:w-2/4 mx-auto border border-white md:px-8 rounded-lg">
                    <!--                Email *******-->
                    <div class="flex">
                        <h4 class="pr-6 p-2">Email</h4>
                        <span class="p-2">:</span>
                        <p class="p-2">Example@email.com</p>
                    </div>

                    <!--                Phone *******-->
                    <div class="flex">
                        <h4 class="pr-6 p-2">Tel</h4>
                        <span class="p-2">:</span>
                        <p class="p-2">+212 6 66 66 66 66</p>
                    </div>

                    <!--                Username *******-->
                    <div class="flex">
                        <h4 class="pr-6 p-2">Nom d'utilisateur</h4>
                        <span class="p-2">:</span>
                        <p class="p-2">Username</p>
                    </div>

                    <!--                Address *******-->
                    <div class="flex">
                        <h4 class="pr-6 p-2">Adresse Postale</h4>
                        <span class="p-2">:</span>
                        <p class="p-2">Adresse, rue, ville, Payer</p>
                    </div>
                </div>

                <div class="flex justify-center flex-wrap pt-4">
                    <button class="px-8 py-2 btn-gardiant rounded m-2 ">
                        <i class="fas fa-edit pr-4"> </i>Edit Account
                    </button>
                    <button class="px-8 py-2 btn-gardiant rounded m-2 ">
                        <i class="fas fa-trash-alt pr-4"> </i>Delete Account
                    </button>

                </div>
            </section>

            <!--       ****** Notifications ******-->
            <section id="notifSec"
                     class=" hidden row-span-2 col-start-2 col-span-4  lg:col-span-5 p-2 bg-gray-900 rounded-md">
                <h1 class="font-title text-4xl pb-0 text-center">Notifications</h1>
                <div class="container p-2 border border-white rounded-lg">
                    <a href=""
                       class="flex w-full flex-wrap justify-center md:w-4/6 hover:bg-gray-700 rounded items-center mx-auto border-b p-2 border-white">

                        <i class="fas fa-user-circle text-4xl m-2 "></i>
                        <div class="flex-col p-2">
                            <p>Notification , Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque, ipsa.</p>
                            <p class="pl-2">Le 10/10/2020</p>
                        </div>
                    </a>


                    <a href=""
                       class="flex w-full flex-wrap justify-center md:w-4/6 hover:bg-gray-700 rounded items-center mx-auto border-b p-2 border-white">

                        <i class="fas fa-user-circle text-4xl m-2 "></i>
                        <div class="flex-col p-2">
                            <p>Notification , Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque, ipsa.</p>
                            <p class="pl-2">Le 10/10/2020</p>
                        </div>
                    </a>


                    <a href=""
                       class="flex w-full flex-wrap justify-center md:w-4/6 hover:bg-gray-700 rounded items-center mx-auto border-b p-2 border-white">

                        <i class="fas fa-user-circle text-4xl m-2 "></i>
                        <div class="flex-col p-2">
                            <p>Notification , Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque, ipsa.</p>
                            <p class="pl-2">Le 10/10/2020</p>
                        </div>
                    </a>

                </div>


            </section>

            <section id="editSec"
                     class=" hidden row-span-2 col-start-2 col-span-4  lg:col-span-5 p-2 bg-gray-900 rounded-md">
                editttttt
            </section>

            <section id="msgSec"
                     class=" hidden row-span-2 col-start-2 col-span-4  lg:col-span-5 p-2 bg-gray-900 rounded-md">
                messaaage
            </section>
        </div>

    </div>
@endsection

