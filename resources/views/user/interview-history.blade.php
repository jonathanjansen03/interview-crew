@extends('layouts.app')

@section('title', 'Interview History')

@section('main-content')
    <div class="relative">
        <img src="{{ asset('/images/double-ribbon.png') }}" alt="" class="fixed top-0 right-0 z-0">
        <img src="{{ asset('/images/triangular-ribbon.png') }}" alt="" class="fixed top-80 overflow-hidden w-96">
    </div>
    
    <main class="relative flex flex-col justify-center items-center">
        <div class="flex flex-col justify-center items-center relative bg-white drop-shadow-lg inset-y-6 w-4/6 h-fit p-6 rounded-xl">
            <h3 class="text-black font-bold text-2xl mb-3">Interview History</h3>
            @foreach($interviews as $interview)
                <div class="grid grid-cols-2 gap-x-10 my-3">
                    <p class="font-medium align-middle">
                        Username: {{Auth::user()->username}}
                    </p>
                    <p class="font-medium align-middle">
                        Field: {{$interview->field->name}}
                    </p>
                    <p class="font-medium mt-3 align-middle">
                        Time: {{$interview->date}}
                    </p>
                    <p class="font-medium mt-3 align-middle">
                        Meeting Link: {{$interview->link}}
                    </p>
                    <div class="flex justify-center col-span-2">
                        <a href="/download-cv" class="w-2/6 flex items-center justify-center py-2 px-0 border border-transparent text-sm font-medium rounded-md mt-5 text-white bg-blue-800 hover:bg-blue-900 duration-200">
                            Download CV
                        </a>
                    </div>
                </div>
                <hr class="h-px my-5 bg-blue-300 border-0 w-[95%]">
            @endforeach

            {{ $interviews->links() }}
        </div>
    </main>
@endsection