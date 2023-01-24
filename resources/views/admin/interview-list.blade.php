@extends('layouts.app')

@section('title', 'Interview List')

@section('main-content')
    <div class="relative">
        <img src="{{ asset('/images/double-ribbon.png') }}" alt="" class="fixed top-0 right-0 z-0">
        <img src="{{ asset('/images/triangular-ribbon.png') }}" alt="" class="fixed top-80 overflow-hidden w-96">
    </div>
    
    <main class="relative flex justify-center">
        <div class="flex flex-col justify-center items-center relative bg-white drop-shadow-lg w-4/6 h-fit p-6 rounded-xl my-6">
            <h3 class="text-black font-bold text-2xl mb-3">Interview List</h3>
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
                <button type="submit" class="w-4/6 flex items-center justify-center py-2 px-0 border border-transparent text-sm font-medium rounded-md mt-5 text-white bg-blue-800 hover:bg-blue-900 duration-200">
                    Download CV
                </button>
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
                <button type="submit" class="w-4/6 flex items-center justify-center py-2 px-0 border border-transparent text-sm font-medium rounded-md mt-5 text-white bg-blue-800 hover:bg-blue-900 duration-200">
                    Download CV
                </button>
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
                <button type="submit" class="w-4/6 flex items-center justify-center py-2 px-0 border border-transparent text-sm font-medium rounded-md mt-5 text-white bg-blue-800 hover:bg-blue-900 duration-200">
                    Download CV
                </button>
            </div>
            <hr class="h-px my-5 bg-blue-300 border-0 w-11/12">
            
            {{ $interviews->links() }}
        </div>
    </main>
@endsection