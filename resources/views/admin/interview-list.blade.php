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

            @foreach ($interviews as $i)
                <div class="grid grid-cols-2 gap-x-10 my-3">
                    <p class="font-medium align-middle">
                        Username: {{ $i->user->username }}
                    </p>
                    <p class="font-medium align-middle">
                        Field: {{ $i->field->name }}
                    </p>
                    <p class="font-medium mt-3 align-middle">
                        Time: {{ $i->date }}
                    </p>
                    <p class="font-medium mt-3 align-middle">
                        Meeting Link: {{ $i->link }}
                    </p>
                    <div class="flex justify-center col-span-2">
                        <button type="submit" class="w-2/6 flex items-center justify-center py-2 px-0 border border-transparent text-sm font-medium rounded-md mt-5 text-white bg-blue-800 hover:bg-blue-900 duration-200">
                            Download CV
                        </button>
                    </div>
                </div>
                <hr class="h-px my-5 bg-blue-300 border-0 w-11/12">
            @endforeach
            
            {{ $interviews->links() }}
        </div>
    </main>
@endsection