@extends('layouts.app')

@section('title', 'Login')

@section('main-content')
<main id="register" class="relative flex justify-center bg-[url('/images/interview.png')] bg-cover bg-no-repeat h-screen">
    <div class="flex flex-col justify-center absolute bg-white drop-shadow-lg inset-y-40 w-96 h-fit py-10 px-6 rounded-xl">
        <h3 class="text-black font-bold text-2xl text-center">Sign In</h3>

        <form action="/login" method="POST" class="flex flex-col">
            @csrf 
            <div class="flex flex-col mt-5">
                <label for="update-username" class="font-medium">Username</label>
                <input type="text" id="update-name" name="username" class="border px-2 py-1 rounded-lg bg-slate-200 focus:border-sky-500 focus:outline-none">
            </div>

            <div class="flex flex-col mt-5">
                <label for="update-username" class="font-medium">Password</label>
                <input type="password" id="update-name" name="password" class="border px-2 py-1 rounded-lg bg-slate-200 focus:border-sky-500 focus:outline-none">
            </div>

            <div class="flex flex-col items-center">
                <button type="submit" class="w-3/5 flex items-center justify-center px-1 py-0 border border-transparent text-base font-medium rounded-md mt-7 text-white bg-blue-800 hover:bg-blue-900 duration-200 md:py-2 md:text-lg md:px-14">
                    Submit
                </button>
                <p class="text-sm font-medium mt-3">
                    Don't have an account? <a href="" class="underline">Register here</a>
                </p>
            </div>
        </form>
    </div>
</main>
@endsection