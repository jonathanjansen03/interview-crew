@extends('layouts.app')

@section('title', 'Add Category')

@section('main-content')
    <main class="relative flex justify-center align-middle">
        <div class="flex flex-col justify-center align-middle absolute bg-white drop-shadow-lg inset-y-60 w-1/4 h-64 px-6 rounded-xl">
            <h3 class="text-black font-bold text-xl">Create Job Field</h3>

            <form action="" class="flex flex-col mt-5">
                <label for="job-field-name" class="font-medium">Job Field Name</label>
                <input type="text" id="job-field-name" class="border px-2 py-1 rounded-lg bg-slate-200 focus:border-sky-500 focus:outline-none">

                <div class="flex justify-center">
                    <button type="submit" class="w-3/5 flex items-center justify-center px-1 py-0 border border-transparent text-base font-medium rounded-md mt-5 text-white bg-blue-800 hover:bg-blue-900 duration-200 md:py-2 md:text-lg md:px-14">
                        Create
                    </button>
                </div>
            </form>
        </div>
    </main>
@endsection