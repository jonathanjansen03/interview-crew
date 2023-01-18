<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>InterviewCrew | Landing Page</title>
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
</head>
<body>
    <div class="relative bg-gray-50">
        <div class="relative bg-white shadow">
            <div class="max-w-7xl mx-auto px-4 sm:px-6">
                <div class="flex justify-between items-center py-6 md:justify-start md:space-x-10">
                    <div class="flex justify-start lg:w-0 lg:flex-1">
                        <a href="#">
                        <span class="sr-only">Logo</span>
                        <img class="h-8 w-auto sm:h-10" src="{{ asset('/images/logo.png') }}" alt="">
                        </a>
                    </div>
                    <div class="-mr-2 -my-2 md:hidden">
                        <button type="button" class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500" aria-expanded="false">
                            <span class="sr-only">Open menu</span>
                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                        </button>
                    </div>
                    <div class="hidden md:flex items-center justify-end md:flex-1 lg:w-0">
                        <button type="button" class="whitespace-nowrap text-base font-medium text-gray-500 hover:text-blue-800">
                        Sign in
                        </button>
                        <button type="button" class="ml-8 whitespace-nowrap inline-flex items-center justify-center px-4 py-2 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-blue-800 hover:bg-blue-900">
                        Sign up
                        </button>
                    </div>
                </div>
            </div>
      
            <div class="absolute top-0 inset-x-0 z-10 p-2 transition transform origin-top-right md:hidden">
                <div class="rounded-lg shadow-lg ring-1 ring-black ring-opacity-5 bg-white divide-y-2 divide-gray-50">
                    <div class="pt-5 pb-6 px-5">
                        <div class="flex items-center justify-between">
                            <div>
                                <img class="h-8 w-auto" src="{{ asset('/images/logo.png') }}" alt="Logo">
                            </div>
                            <div class="-mr-2">
                                <button type="button" class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                                <span class="sr-only">Close menu</span>
                                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="py-6 px-5 space-y-6">
                        <div>
                            <button type="button" class="w-full flex items-center justify-center px-4 py-2 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-blue-600 hover:bg-blue-700">
                                Sign up
                            </button>
                            <p class="mt-6 text-center text-base font-medium text-gray-500">
                                Existing customer?
                                <button type="button" class="text-blue-600 hover:text-blue-500">
                                Sign in
                                </button>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      
        <main class="lg:relative">
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
                            <button type="button" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-blue-800 hover:bg-blue-900 md:py-4 md:text-lg md:px-14">
                                Sign up
                            </button>
                        </div>
                        <div class="mt-3 rounded-md shadow sm:mt-0 sm:ml-3">
                            <button type="button" href="#" class="w-full flex items-center justify-center px-4 py-3 border border-blue-800 text-base font-medium rounded-md text-blue-800 bg-white hover:bg-gray-100 md:py-4 md:text-lg md:px-10">
                                How it works
                            </button>
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
                    <img src="{{asset('/images/triangular-ribbon.png') }}" alt="" class="absolute z-0 w-72">
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
                                        <button type="button" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-blue-800 hover:bg-blue-900 md:py-4 md:text-lg md:px-14 mt-10">
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

        <footer class="relative bg-white inset-x-0 bottom-0 py-3 text-center">
            <span class="text-black font-semibold">
                &#169; InterviewCrew, All Rights Reserved
            </span>
        </footer>
    </div>
</body>
</html>