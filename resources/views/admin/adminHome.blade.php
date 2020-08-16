@extends('layouts.app')
@section('content')
    <div class="p-16"></div>

    @auth()
        @if(auth()->user()->is_admin)
            <div class="h-screen p-4">
                <h1 class="text-center text-5xl"> Admin Home Page</h1>
            </div>



        @else
            <div class="h-screen p-4">
                <h1 class="text-center font-bold"> You don't have permission to access this page </h1>
            </div>
        @endif
    @endauth


@endsection
