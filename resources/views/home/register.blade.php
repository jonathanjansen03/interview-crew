@extends('layouts.app')

@section('title', 'Register')

@section('main-content')
<main id="register" class="relative flex justify-center bg-[url('/images/interview.png')] bg-cover bg-no-repeat h-screen">
    <div class="flex flex-col justify-center absolute bg-white drop-shadow-lg inset-y-14 w-fit h-fit py-10 px-6 rounded-xl">
        <h3 class="text-black font-bold text-2xl text-center">Register</h3>

        <form action="/register" method="POST" class="flex flex-col mt-5">
            @csrf 
            <div class="flex flex-col">
                <label for="update-name" class="font-medium">Full Name</label>
                <input type="text" id="update-name" name="full_name" class="border px-2 py-1 rounded-lg bg-slate-200 focus:border-sky-500 focus:outline-none">
            </div>

            <div class="flex flex-col mt-5">
                <label for="update-username" class="font-medium">Username</label>
                <input type="text" id="update-name" name="username" class="border px-2 py-1 rounded-lg bg-slate-200 focus:border-sky-500 focus:outline-none">
            </div>

            <div class="flex mt-5 gap-x-5">
                <div class="flex flex-col">
                    <label for="update-username" class="font-medium">Password</label>
                    <input type="password" name="password" id="update-name" class="border px-2 py-1 rounded-lg bg-slate-200 focus:border-sky-500 focus:outline-none">
                </div>

                <div class="flex flex-col">
                    <label for="update-username" class="font-medium">Confirm Password</label>
                    <input type="password" name="confirm_password" id="update-name" class="border px-2 py-1 rounded-lg bg-slate-200 focus:border-sky-500 focus:outline-none">
                </div>
            </div>


            <div class="flex flex-col mt-5">
                <label for="update-email" class="font-medium">Email</label>
                <input type="text" id="update-email" name="email" class="border px-2 py-1 rounded-lg bg-slate-200 focus:border-sky-500 focus:outline-none">
            </div>

            <div class="flex flex-col mt-5">
                <label for="update-phone" class="font-medium">Phone</label>
                <input type="text" id="update-phone" name="phone" class="border px-2 py-1 rounded-lg bg-slate-200 focus:border-sky-500 focus:outline-none">
            </div>

            <div class="flex flex-col items-center">
                <button type="submit" class="w-3/5 flex items-center justify-center px-1 py-0 border border-transparent text-base font-medium rounded-md mt-7 text-white bg-blue-800 hover:bg-blue-900 duration-200 md:py-2 md:text-lg md:px-14">
                    Submit
                </button>
                <p class="text-sm font-medium mt-3">
                    Already have an account? <a href="" class="underline">Sign in here</a>
                </p>
            </div>
        </form>
    </div>
</main>
@endsection