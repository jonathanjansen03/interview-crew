@extends('layouts.app')

@section('title', 'Welcome')

@section('main-content')
    <div class="relative">
        <img src="{{ asset('/images/double-ribbon.png') }}" alt="" class="fixed top-0 right-0 z-0">
        <img src="{{ asset('/images/triangular-ribbon.png') }}" alt="" class="fixed top-80 overflow-hidden w-96">
    </div>

    <main class="relative flex justify-center items-center">
        <div class="flex flex-col justify-center absolute bg-white drop-shadow-lg inset-y-40 w-1/4 h-fit py-10 px-6 rounded-xl">
            <h3 class="text-black font-bold text-2xl text-center">Welcome Admin!</h3>

            <div class="flex flex-col">
                <div class="flex flex-col">
                    <a href="/create-job-field">
                        <button type="submit" class="w-full flex items-center justify-center px-1 py-0 border border-transparent text-base font-medium rounded-md mt-5 text-white bg-blue-800 hover:bg-blue-900 duration-200 md:py-2 md:text-lg md:px-14">
                            Create Job Field
                        </button>
                    </a>
                    <a href="/edit-profile" type="submit" class="w-full flex items-center justify-center px-1 py-0 border border-transparent text-base font-medium rounded-md mt-5 text-white bg-blue-800 hover:bg-blue-900 duration-200 md:py-2 md:text-lg md:px-14">
                        Edit Profile
                    </a>
                    <a href="/interview-list" class="w-full flex items-center justify-center px-1 py-0 border border-transparent text-base font-medium rounded-md mt-5 text-white bg-blue-800 hover:bg-blue-900 duration-200 md:py-2 md:text-lg md:px-14">
                        Interview List
                    </a >
                </div>
            </div>
        </div>
    </main>
@endsection