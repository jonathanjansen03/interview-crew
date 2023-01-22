@extends('layouts.app')

@section('title', 'Interview History')

@section('main-content')
    <div class="relative">
        <img src="{{ asset('/images/double-ribbon.png') }}" alt="" class="fixed top-0 right-0 z-0">
        <img src="{{ asset('/images/triangular-ribbon.png') }}" alt="" class="fixed top-80 overflow-hidden w-96">
    </div>
    
    <main class="relative flex justify-center">
        <div class="flex flex-col justify-center items-center absolute bg-white drop-shadow-lg inset-y-12 w-4/6 h-fit py-10 px-6 rounded-xl">
            <h3 class="text-black font-bold text-2xl mb-3">Interview History</h3>
            @foreach($interviews as $interview)
            <div class="grid grid-cols-2 gap-x-10 my-3">
                <p class="font-medium align-middle">Username: {{Auth::user()->full_name}}</p>
    
                <p class="font-medium align-middle">
                    Field: {{$interview->field}}
                </p>
                
                <p class="font-medium mt-3 align-middle">
                    Time: {{$interview->date}}
                </p>

                <p class="font-medium mt-3 align-middle">
                    Meeting Link: {{$interview->link}}
                </p>
            </div>
            <hr class="h-px my-5 bg-blue-300 border-0 w-11/12">
            @endforeach
        </div>
    </main>
@endsection