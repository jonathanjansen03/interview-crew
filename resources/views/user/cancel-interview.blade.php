@extends('layouts.app')

@section('title', 'Cancel Interview')

@section('main-content')
    <div class="relative">
        <img src="{{ asset('/images/double-ribbon.png') }}" alt="" class="fixed top-0 right-0 z-0">
        <img src="{{ asset('/images/triangular-ribbon.png') }}" alt="" class="fixed top-80 overflow-hidden w-96">
    </div>

    <main class="relative flex justify-center">
        <div class="flex flex-col justify-center absolute bg-white drop-shadow-lg inset-y-28 w-2/6 h-fit py-7 px-6 rounded-xl">
            <h3 class="text-black font-bold text-2xl text-center">Cancel Interview Request</h3>

            <p class="font-medium mt-5">
                {{-- nanti ganti {{title}} on {{date and time}} --}}
                <span class="font-semibold">Google Software Engineer Mock Interview</span> on 
                <span class="font-semibold">Mon, 16 Jan 2022 12:00</span>
            </p>

            <form action="" class="flex flex-col mt-5">
                <div class="flex flex-col">
                    <label for="cancel-reason" class="font-medium">Reason</label>
                    <textarea name="cancel-reason" id="cancel-reason" class="border px-2 py-1 rounded-lg bg-slate-200 focus:border-sky-500 focus:outline-none" rows="5"></textarea>
                </div>

                <div class="flex justify-center">
                    <button type="submit" class="w-3/5 flex items-center justify-center px-1 py-0 border border-transparent text-base font-medium rounded-md mt-7 text-white bg-blue-800 hover:bg-blue-900 duration-200 md:py-2 md:text-lg md:px-14">
                        Submit
                    </button>
                </div>
            </form>
        </div>
    </main>
@endsection