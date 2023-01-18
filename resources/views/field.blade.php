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
        <div class="block3">
            <form action="/field" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="box3">
                    <div class="mb-3 form-group">
                        <label for="field" class="form-label">Create Job Field</label>
                        <input type="text" class="form-control" id="field" name="field" placeholder="">
                    </div>
                    <button class="btn btn-outline-dark" id="button3">Add</button> 
                </div>
            </form>
        </div>
    </div>
</body>
</html>
