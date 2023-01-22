<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>InterviewCrew | @yield('title')</title>
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
</head>
<body>
    <div class="relative bg-gray-50 min-h-screen">
        {{-- nanti pake if else, kalo udah login ganti ke user navbar --}}
        @guest 
            @include('includes.guest-navbar')
        @endguest 
        @auth
            @include('includes.user-navbar')
        @endauth
         
        @yield('main-content')
    </div>

    <footer class="fixed bg-white inset-x-0 bottom-0 py-3 text-center">
        <span class="text-black font-semibold">
            &#169; InterviewCrew, All Rights Reserved
        </span>
    </footer>
    <script src="{{ asset('/js/app.js') }}"></script>
</body>
</html>