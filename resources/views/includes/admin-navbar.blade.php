<div class="relative bg-white shadow z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6">
        <div class="flex justify-between items-center py-6 md:justify-start md:space-x-10">
            <div class="flex justify-start lg:w-0 lg:flex-1">
                <a href="/home">
                <span class="sr-only">Logo</span>
                <img class="h-8 w-auto sm:h-10" src="{{ asset('/images/logo.png') }}" alt="">
                </a>
            </div>
            <div class="-mr-2 -my-2 md:hidden">
                <button id="toggle-mobile-navbar-btn" type="button" class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500" aria-expanded="false">
                    <span class="sr-only">Open menu</span>
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
                </button>
            </div>
            <div class="hidden md:flex items-center justify-end md:flex-1 lg:w-0" style="gap: 2em;">
                <a href="/welcome-admin" class="whitespace-nowrap text-base font-semibold text-gray-500 hover:text-blue-800 duration-200">
                    Home
                </a>
                <a href="/profile" class="whitespace-nowrap text-base font-semibold text-gray-500 hover:text-blue-800 duration-200">
                    Profile
                </a>
                <a href="/logout" class="whitespace-nowrap text-base font-semibold text-gray-500 hover:text-blue-800 duration-200">
                    Log Out
                </a>
            </div>
        </div>
    </div>

    <div id="mobile-navbar" class="absolute top-0 inset-x-0 z-10 p-2 transition transform origin-top-right md:hidden">
        <div class="rounded-lg shadow-lg ring-1 ring-black ring-opacity-5 bg-white divide-y-2 divide-gray-50">
            <div class="pt-5 pb-6 px-5">
                <div class="flex items-center justify-between">
                    <div>
                        <img class="h-8 w-auto" src="{{ asset('/images/logo.png') }}" alt="Logo">
                    </div>
                    <div class="-mr-2">
                        <button id="x-btn" type="button" class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
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
                    <p class="mt-6 text-center text-base font-medium">
                        <button type="button" class="text-blue-600 hover:text-blue-500 duration-200">
                            Home
                        </button>
                        <button type="button" class="text-blue-600 hover:text-blue-500 duration-200">
                            Profile
                        </button>
                        <button type="button" class="text-blue-600 hover:text-blue-500 duration-200">
                            Log Out
                        </button>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>