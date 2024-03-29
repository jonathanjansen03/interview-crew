@extends('layouts.app')

@section('title', 'Profile')

@section('main-content')
    <div class="relative">
        <img src="{{ asset('/images/double-ribbon.png') }}" alt="" class="fixed top-0 right-0 z-0">
        <img src="{{ asset('/images/triangular-ribbon.png') }}" alt="" class="fixed top-80 overflow-hidden w-96">
    </div>
    
    <main class="relative flex justify-center">
        <div class="flex flex-col justify-center absolute bg-white drop-shadow-lg inset-y-44 w-2/6 h-fit p-6 rounded-xl">
            <h3 class="text-black font-bold text-2xl">{{Auth::user()->full_name}}</h3>

            <hr class="mt-5">

            <p class="font-medium mt-5">
                Email: {{Auth::user()->email}}
            </p>

            <p class="font-medium mt-5">
                Phone: {{Auth::user()->phone_number}}
            </p>

            <div class="flex">
                <a href="/edit-profile" class="2xl:w-2/6 xl:w-2/6 lg:w-3/6 md:3/4 flex items-center justify-center border border-transparent text-base font-medium rounded-md mt-7 text-white bg-blue-800 hover:bg-blue-900 duration-200 py-2 md:text-lg px-4">
                    Edit Profile
                </a>
            </div>
        </div>
    </main>
@endsection