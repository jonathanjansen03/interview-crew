@extends('layouts.app')

@section('title', 'Landing')

@section('main-content')
    <main id="landing-main" class="lg:relative mt-10">
        <div class="mx-auto max-w-7xl w-full pt-16 pb-20 text-center lg:py-48 lg:text-left">
            <div class="px-4 lg:w-1/2 sm:px-8 xl:pr-16">
                <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl lg:text-5xl xl:text-6xl">
                    <span class="block xl:inline">Not ready for interview?</span>
                </h1>
                <p class="mt-3 max-w-md mx-auto text-lg text-gray-500 sm:text-xl md:mt-5 md:max-w-3xl">
                    Prepare your interview skills here to achieve your career dreams!
                </p>
                <div class="mt-10 sm:flex sm:justify-center lg:justify-start">
                    <div class="rounded-md shadow">
                        <a href="/register" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-blue-800 hover:bg-blue-900 duration-200 md:py-4 md:text-lg md:px-14">
                            Sign up
                        </a>
                    </div>
                    <div class="mt-3 rounded-md shadow sm:mt-0 sm:ml-3">
                        <a type="button" href="#about-us" class="w-full flex items-center justify-center px-4 py-3 border border-blue-800 text-base font-medium rounded-md text-blue-800 bg-white hover:bg-gray-100 duration-200 md:py-4 md:text-lg md:px-10">
                            How it works
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="relative w-full h-64 sm:h-72 md:h-96 lg:absolute lg:inset-y-0 lg:top-50 lg:right-0 lg:w-1/2 lg:h-full">
            <img class="lg:absolute lg:inset-0 lg:w-full" src="{{ asset('/images/hero-pic.png') }}" alt="">
        </div>

        <section id="about-us" class="relative h-64">
            <div class="absolute top-72 bottom-0 px-72">
                <h1 class="text-center text-4xl font-bold">About Us</h1>
                <p class="text-center text-lg mt-20">
                    InterviewCrew is a platform to help people who are beginners in the world of job interviews. We will be a third party to bring together those who wish to practice their interview skills with our selected people who are experienced in their fields. We hope that in the future people who are still beginners in the world of work can train their soft skills better so that they are better prepared to meet company standards.
                </p>
            </div>

            <div class="relative">
                <img src="{{ asset('/images/triangular-ribbon.png') }}" alt="" class="absolute z-0 w-72">
            </div>
        </section>

        <section id="advantages" class="relative h-64 top-96 pt-32 z-50">
            <h1 class="text-center text-4xl font-bold">Advantages</h1>
            <div class="flex justify-center gap-x-8 px-80 mt-20">
                <div class="flex flex-col items-center bg-blue-300 rounded-xl p-5 w-72">
                    <img src="{{ asset('/images/flexibility.png') }}" alt="" class="w-36">
                    <h5 class="font-bold text-2xl mt-5">Flexibility</h5>
                    <p class="text-center mt-1">
                        Can set the time and fields that are suitable for the user when making an interview request.
                    </p>
                </div>
                <div class="flex flex-col items-center bg-blue-200 rounded-xl p-3 w-72">
                    <img src="{{ asset('/images/free.png') }}" alt="" class="w-36">
                    <h5 class="font-bold text-2xl mt-5">FREE</h5>
                    <p class="text-center">
                        There is no need to pay for training interviews with trusted people of our choice.
                    </p>
                </div>
                <div class="flex flex-col items-center bg-blue-300 rounded-xl p-3 w-72">
                    <img src="{{ asset('/images/professional.png') }}" alt="" class="w-36">
                    <h5 class="font-bold text-2xl mt-5">Professional</h5>
                    <p class="text-center">
                        We have chosen HRD who is trusted and experienced in their field for a long time.
                    </p>
                </div>
            </div>
            <div class="relative">
                <img src="{{ asset('/images/horizontal-ribbon.png') }}" alt="" class="absolute -z-10 w-full -top-36">
            </div>
        </section>

        <section id="reach-out">
            <div class="relative bg-white overflow-hidden top-96 -bottom-96">
                <div class="relative pt-6 pb-12">
                    <section class="mt-16 mx-auto max-w-7xl px-4 sm:mt-24 sm:px-6 lg:mt-32">
                        <div class="lg:grid lg:grid-cols-12 lg:gap-8">
                            <div class="mt-12 relative sm:max-w-lg sm:mx-auto lg:mt-0 lg:max-w-none lg:mx-0 lg:col-span-6 lg:flex lg:items-center">
                                <div class="relative mx-auto w-full rounded-lg shadow-lg">
                                    <img class="w-full" src="{{ asset('/images/reach-out.png') }}" alt="">
                                </div>
                            </div>
                            <div class="flex items-center flex-col justify-center sm:text-center md:max-w-2xl md:mx-auto lg:col-span-6 lg:text-left w-3/5">
                                <p class="mt-3 text-center text-4xl text-black font-semibold">
                                    Reach out to us by being a part of InterviewCrew!
                                    What are you waiting for?
                                </p>
                                <div class="rounded-md shadow">
                                    <button type="button" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-blue-800 hover:bg-blue-900 duration-200 md:py-4 md:text-lg md:px-14 mt-10">
                                        Sign up
                                    </button>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </section>
    </main>
@endsection