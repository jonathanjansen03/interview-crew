@extends('layouts.app')

@section('title', 'Edit Profile')

@section('main-content')
    <div class="relative">
        <img src="{{ asset('/images/double-ribbon.png') }}" alt="" class="fixed top-0 right-0 h-fit z-0">
        <img src="{{ asset('/images/triangular-ribbon.png') }}" alt="" class="fixed top-80 overflow-hidden w-96">
    </div>
    
    <main class="relative flex justify-center">
        <div class="flex flex-col justify-center absolute bg-white drop-shadow-lg inset-y-10 w-fit h-fit p-6 rounded-xl">
            <h3 class="text-black font-bold text-2xl text-center">Edit Profile</h3>

            <form action="edit-profile" method="POST" class="flex flex-col mt-5">
                @csrf 
                <div class="flex flex-col">
                    <label for="update-name" class="font-medium">Full Name</label>
                    <input type="text" value="{{$user->full_name}}" name="full_name" id="update-name" class="border px-2 py-1 rounded-lg bg-slate-200 focus:border-sky-500 focus:outline-none">
                </div>

                <div class="flex flex-col mt-5">
                    <label for="update-username" class="font-medium">Username</label>
                    <input type="text" value="{{$user->username}}" name="username" id="update-name" class="border px-2 py-1 rounded-lg bg-slate-200 focus:border-sky-500 focus:outline-none">
                </div>

                <div class="flex mt-5 gap-x-5">
                    <div class="flex flex-col">
                        <label for="update-username" class="font-medium">Password</label>
                        <input type="password" id="update-name" name="password" class="border px-2 py-1 rounded-lg bg-slate-200 focus:border-sky-500 focus:outline-none">
                    </div>

                    <div class="flex flex-col">
                        <label for="update-username" class="font-medium">Confirm Password</label>
                        <input type="password" id="update-name" name="confirm_password" class="border px-2 py-1 rounded-lg bg-slate-200 focus:border-sky-500 focus:outline-none">
                    </div>
                </div>

                <div class="flex flex-col mt-5">
                    <label for="update-email" class="font-medium">Email</label>
                    <input type="text" value="{{$user->email}}" name="email" id="update-email" class="border px-2 py-1 rounded-lg bg-slate-200 focus:border-sky-500 focus:outline-none">
                </div>

                <div class="flex flex-col mt-5">
                    <label for="update-phone" class="font-medium">Phone</label>
                    <input type="text" value="{{$user->phone_number}}" name="phone" id="update-phone" class="border px-2 py-1 rounded-lg bg-slate-200 focus:border-sky-500 focus:outline-none">
                </div>

                <div class="flex justify-evenly">
                    <a href="/profile" class="flex items-center justify-center px-1 py-0 border border-transparent text-base font-medium rounded-md mt-7 text-white bg-red-600 hover:bg-red-700 duration-200 md:py-2 md:text-lg md:px-14">
                        Cancel
                    </a>
                    <button type="submit" class="flex items-center justify-center px-1 py-0 border border-transparent text-base font-medium rounded-md mt-7 text-white bg-blue-800 hover:bg-blue-900 duration-200 md:py-2 md:text-lg md:px-14">
                        Update
                    </button>
                </div>
            </form>
        </div>
    </main>
@endsection