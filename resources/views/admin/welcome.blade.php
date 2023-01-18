@extends('layouts.app')

@section('title', 'Welcome')

@section('main-content')
    <main class="relative flex justify-center align-middle">
        <div class="flex flex-col justify-center align-middle absolute bg-white drop-shadow-lg inset-y-60 w-1/4 h-64 px-6 rounded-xl">
            <h3 class="text-black font-bold text-2xl text-center">Welcome Admin!</h3>

            <div class="flex flex-col">
                <div class="flex flex-col align-middle">
                    <button type="submit" class="w-full flex items-center justify-center px-1 py-0 border border-transparent text-base font-medium rounded-md mt-5 text-white bg-blue-800 hover:bg-blue-900 duration-200 md:py-2 md:text-lg md:px-14">
                        Create Job Field
                    </button>
                    <button type="submit" class="w-full flex items-center justify-center px-1 py-0 border border-transparent text-base font-medium rounded-md mt-5 text-white bg-blue-800 hover:bg-blue-900 duration-200 md:py-2 md:text-lg md:px-14">
                        Edit Profile
                    </button>
                </div>
            </div>
        </div>
    </main>
@endsection