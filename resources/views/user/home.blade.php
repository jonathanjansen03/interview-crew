@extends('layouts.app')

@section('title', 'Home')

@section('main-content')
    <div class="relative">
        <img src="{{ asset('/images/double-ribbon.png') }}" alt="" class="fixed top-0 right-0 z-0">
        <img src="{{ asset('/images/triangular-ribbon.png') }}" alt="" class="fixed top-80 overflow-hidden w-96">
    </div>

    <div class="flex relative gap-x-16 items-center justify-center mt-4">
        <div id="book-now-card" class="relative flex flex-col bg-white rounded-xl drop-shadow-lg w-2/5 left-10 py-16 pl-12">
            <div class="w-4/5">
                <h1 class="text-4xl font-extrabold">Book your interview schedule now!</h1>
                <p class="text-xl font-medium mt-5">Don't miss this opportunity to practice your interview skills with the experts.</p>
            </div>
            <a href="/request-interview">
                <button type="submit" class="xl:w-1/4 lg:w-1/3 md:w-1/3 flex items-center justify-center border border-transparent text-base font-medium rounded-md mt-7 text-white bg-blue-800 hover:bg-blue-900 duration-200 md:py-2 md:text-lg px-4">
                    Book now
                </button>
            </a>
            <img src="{{ asset('/images/interviewer.png') }}" alt="" class="absolute bottom-0 right-0 w-5/6">
        </div>

        <div class="flex flex-col gap-y-5 w-4/12">
            <div class="flex flex-col bg-white rounded-xl drop-shadow-lg p-8">
                <h3 class="text-2xl font-bold">Most Recent Interview</h3>
                @if($recentInterviews != null)
                    <p class="text-md font-medium mt-3">Date: {{$recentInterviews->date}}</p>
                    <p class="text-md font-medium mt-3">Time: {{$rTime}}</p>
                    <p class="text-md font-medium mt-3">Field: {{$rField}}</p>
                    <a href="/interview-history" class="xl:w-3/5 lg:w-4/5 md:w-full flex items-center justify-center  border border-transparent text-base font-medium rounded-md mt-5 text-white bg-blue-800 hover:bg-blue-900 duration-200 md:py-2 md:text-lg px-4">
                        View Interview History
                    </a>
                @endif
            </div>

            <div class="flex flex-col bg-white rounded-xl drop-shadow-lg p-8">
                <h3 class="text-2xl font-bold">Upcoming Interview</h3>
                @if ($interviews->count() != 0)
                    <p class="text-md font-medium mt-3">Date: {{$interviews[0]->date}}</p>
                    <p class="text-md font-medium mt-3">Time: {{$iTime}}</p>
                    <p class="text-md font-medium mt-3">Field: {{$iField}}</p>
                    <p class="text-md font-medium mt-3">Link: {{$interviews[0]->link}}</p>
                    <a href="/cancel/interview/{{$interviews[0]->id}}" class="xl:w-1/3 lg:w-1/3 md:w-1/3 flex items-center justify-center  border border-transparent text-base font-medium rounded-md mt-5 text-white bg-red-600 hover:bg-red-700 duration-200 md:py-2 md:text-lg px-5">
                        Cancel
                    </a>
                @endif

            </div>
        </div>
    </div>
@endsection