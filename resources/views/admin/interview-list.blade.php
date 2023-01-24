@extends('layouts.app')

@section('title', 'Interview List')

@section('main-content')
    <div class="relative">
        <img src="{{ asset('/images/double-ribbon.png') }}" alt="" class="fixed top-0 right-0 z-0">
        <img src="{{ asset('/images/triangular-ribbon.png') }}" alt="" class="fixed top-80 overflow-hidden w-96">
    </div>
    
    <main class="relative flex justify-center">
        <div class="flex flex-col justify-center items-center absolute bg-white drop-shadow-lg inset-y-[4.5rem] w-3/6 h-fit p-6 rounded-xl">
            <h3 class="text-black font-bold text-2xl mb-3">Interview List</h3>
            <div class="grid grid-cols-2 gap-x-10 my-3">
                <p class="font-medium align-middle">Username: Adipati_Dolken</p>
    
                <p class="font-medium align-middle">
                    Field: Data Scientist
                </p>
                
                <p class="font-medium mt-3 align-middle">
                    Time: 5th Jan 2023 11:00-12:00
                </p>

                <p class="font-medium mt-3 align-middle">
                    Meeting Link: bit.ly/interview
                </p>
            </div>
            <hr class="h-px my-5 bg-blue-300 border-0 w-11/12">
            <div class="grid grid-cols-2 gap-x-10 mt-3">
                <p class="font-medium align-middle">Username: Adipati_Dolken</p>
    
                <p class="font-medium align-middle">
                    Field: Data Scientist
                </p>
                
                <p class="font-medium mt-3 align-middle">
                    Time: 5th Jan 2023 11:00-12:00
                </p>

                <p class="font-medium mt-3 align-middle">
                    Meeting Link: bit.ly/interview
                </p>
            </div>
            <hr class="h-px my-5 bg-blue-300 border-0 w-11/12">
            <div class="grid grid-cols-2 gap-x-10 mt-3">
                <p class="font-medium align-middle">Username: Adipati_Dolken</p>
    
                <p class="font-medium align-middle">
                    Field: Data Scientist
                </p>
                
                <p class="font-medium mt-3 align-middle">
                    Time: 5th Jan 2023 11:00-12:00
                </p>

                <p class="font-medium mt-3 align-middle">
                    Meeting Link: bit.ly/interview
                </p>
            </div>
            <hr class="h-px my-5 bg-blue-300 border-0 w-11/12">
            <div class="bg-white px-4 flex items-center justify-between sm:px-6 w-full" aria-label="Pagination">
                <div class="hidden sm:block">
                    <p class="text-sm font-medium text-gray-700">
                        Showing
                        <span class="font-bold">1</span>
                        to
                        <span class="font-bold">10</span>
                        of
                        <span class="font-bold">20</span>
                        results
                    </p>
                </div>
                <div class="flex-1 flex justify-between sm:justify-end">
                    <a href="#" class="relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-100 duration-200">
                        Previous
                    </a>
                    <a href="#" class="ml-3 relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-100 duration-200">
                        Next
                    </a>
                </div>
            </div>
        </div>
    </main>
@endsection