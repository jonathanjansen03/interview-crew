@extends('layouts.app')

@section('title', 'Profile')

@section('main-content')
    <div class="relative">
        <img src="{{ asset('/images/double-ribbon.png') }}" alt="" class="fixed top-0 right-0 z-0">
        <img src="{{ asset('/images/triangular-ribbon.png') }}" alt="" class="fixed top-80 overflow-hidden w-96">
    </div>
    
    <main class="relative flex justify-center">
        <div class="flex flex-col justify-center absolute bg-white drop-shadow-lg inset-y-40 w-2/6 h-fit py-10 px-6 rounded-xl">
            {{-- ntar diganti {{username}} --}}
            <h3 class="text-black font-bold text-2xl">Adipati_Dolken</h3>

            <hr class="mt-5">

            <p class="font-medium mt-5">
                {{-- ntar diganti {{email}} --}}
                Email: adipatidlkn@gmail.com
            </p>

            {{-- ntar diganti {{phone}} --}}
            <p class="font-medium mt-5">
                Phone: 081382869278
            </p>

            <div class="flex">
                <a href="/edit-profile" class="2xl:w-2/6 xl:w-2/6 lg:w-3/6 md:3/4 flex items-center justify-center border border-transparent text-base font-medium rounded-md mt-7 text-white bg-blue-800 hover:bg-blue-900 duration-200 py-2 md:text-lg px-4">
                    Edit Profile
                </a>
            </div>
        </div>
    </main>
@endsection