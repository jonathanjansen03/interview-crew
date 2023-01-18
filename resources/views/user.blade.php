<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Profile Page</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('public/assets') }}" rel="stylesheet">

</head>
<body>
    <div class="box2">
        <div class="block5">
            <div class="box3">
                <center>
                    <button type="button" class="btn btn-secondary" disabled>Member</button><br>
                    <label class="username">{{Auth::user()->name}}</label><br>
                    <label>Email: <label>{{Auth::user()->email}}</label></label><br>
                    <label>Phone: <label>{{Auth::user()->phone}}</label></label>
                </center>
                <a type="button" class="btn btn-outline-dark" href="/update" id="button3">Edit Profile</a>
            </div>
        </div>
    </div>
</body>
</html>
