@extends('layouts.app')

@section('title', 'Interview History')

@section('main-content')
    <div class="relative">
        <img src="{{ asset('/images/double-ribbon.png') }}" alt="" class="fixed top-0 right-0 z-0">
        <img src="{{ asset('/images/triangular-ribbon.png') }}" alt="" class="fixed top-80 overflow-hidden w-96">
    </div>
    
    <main class="relative flex justify-center">
        <div class="flex flex-col justify-center items-center absolute bg-white drop-shadow-lg inset-y-24 w-3/6 h-fit py-10 px-6 rounded-xl">
            <h3 class="text-black font-bold text-2xl mb-3">Interview History</h3>
            <div class="grid grid-cols-2 gap-x-10 my-3">
                <p class="font-medium align-middle">Username: Adipati_Dolken</p>
    
                <p class="font-medium align-middle">
                    Field: Data Scientist
                </p>
                
                <p class="font-medium mt-3 align-middle">
                    Time: 5th Jan 2023 11:00-12:00
                </p>

                <p class="font-medium mt-3 align-middle">
                    Meeting Link: bit.ly/interview
                </p>
            </div>
            <hr class="h-px my-5 bg-blue-300 border-0 w-11/12">
            <div class="grid grid-cols-2 gap-x-10 mt-3">
                <p class="font-medium align-middle">Username: Adipati_Dolken</p>
    
                <p class="font-medium align-middle">
                    Field: Data Scientist
                </p>
                
                <p class="font-medium mt-3 align-middle">
                    Time: 5th Jan 2023 11:00-12:00
                </p>

                <p class="font-medium mt-3 align-middle">
                    Meeting Link: bit.ly/interview
                </p>
            </div>
            <hr class="h-px my-5 bg-blue-300 border-0 w-11/12">
            <div class="grid grid-cols-2 gap-x-10 mt-3">
                <p class="font-medium align-middle">Username: Adipati_Dolken</p>
    
                <p class="font-medium align-middle">
                    Field: Data Scientist
                </p>
                
                <p class="font-medium mt-3 align-middle">
                    Time: 5th Jan 2023 11:00-12:00
                </p>

                <p class="font-medium mt-3 align-middle">
                    Meeting Link: bit.ly/interview
                </p>
            </div>
        </div>
    </main>
@endsection