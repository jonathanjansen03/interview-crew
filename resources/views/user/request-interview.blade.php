@extends('layouts.app')

@section('title', 'Request Interview')

@section('main-content')
    <div class="relative">
        <img src="{{ asset('/images/double-ribbon.png') }}" alt="" class="fixed top-0 right-0 h-fit z-0">
        <img src="{{ asset('/images/triangular-ribbon.png') }}" alt="" class="fixed top-80 overflow-hidden w-96">
    </div>
    
    <main class="relative flex justify-center">
        <div class="flex flex-col justify-center absolute bg-white drop-shadow-lg inset-y-14 w-2/5 h-fit py-10 px-6 rounded-xl">
            <h3 class="text-black font-bold text-2xl text-center">Interview Schedule Request</h3>

            <form action="/store" method="POST" enctype="multipart/form-data" class="flex flex-col">
                @csrf
                <div class="flex flex-col mt-5">
                    <label for="title" class="font-medium">Title</label>
                    <input type="text" id="title" name="title" class="border px-2 py-1 rounded-lg bg-slate-200 focus:border-sky-500 focus:outline-none">
                </div>

                <div class="flex mt-5 gap-x-5 items-center">
                    <div class="flex flex-col">
                        <label for="date" class="font-medium">Date and Time</label>
                        <input type="date" class="border px-2 py-1 rounded-lg bg-slate-200 focus:border-sky-500 focus:outline-none" id="date" name="date">
                    </div>

                    <div class="flex flex-col">
                        <label for="interview-shift" class="font-medium">Field</label>
                        <select name="interview_shift" id="interview_shift" class="border px-2 py-1 rounded-lg bg-slate-200 focus:border-sky-500 focus:outline-none h-9 w-56">
                            <option value="1">07:00 - 09:00</option>
                            <option value="2">09:00 - 11:00</option>
                            <option value="3">11:00 - 13:00</option>
                            <option value="4">13:00 - 15:00</option>
                            <option value="5">15:00 - 17:00</option>
                            <option value="6">17:00 - 19:00</option>
                        </select>
                    </div>
                </div>

                <div class="flex flex-col mt-5">
                    <label for="interview-field" class="font-medium">Field</label>
                    <select name="field_id" id="interview-field" class="border px-2 py-1 rounded-lg bg-slate-200 focus:border-sky-500 focus:outline-none">
                        @foreach($fields as $field)
                            <option value="{{$field->id}}">{{$field->name}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="flex flex-col mt-5">
                    <label for="link" class="font-medium">Meeting Link</label>
                    <input type="text" id="link" name="link" class="border px-2 py-1 rounded-lg bg-slate-200 focus:border-sky-500 focus:outline-none">
                </div>

                <div class="flex justify-center">
                    <button type="submit" class="w-3/5 flex items-center justify-center px-1 py-0 border border-transparent text-base font-medium rounded-md mt-7 text-white bg-blue-800 hover:bg-blue-900 duration-200 md:py-2 md:text-lg md:px-14">
                        Submit
                    </button>
                </div>
            </form>
            @if (\Session::has('errors'))
                    <div class="flex items-center text-center justify-center">
                        <div style="text-align: center;">
                            <h1 style="text-align: center; color: red;">
                                {{ \Session::get('errors') }}
                            </h1>
                        </div>
                    </div>
                @elseif (\Session::has('success'))
                    <div class="flex items-center text-center justify-center">
                        <div style="text-align: center;">
                            <h1 style="text-align: center; color: green;">
                                {{ \Session::get('success') }}
                            </h1>
                        </div>
                    </div>
                @endif
        </div>
    </main>
@endsection