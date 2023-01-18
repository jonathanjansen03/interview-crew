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
    <div class="box">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            @foreach($interviews as $interview)
                <div class="card pagination2" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">{{$interview->title}}</h5>
                        <p class="card-text">{{$interview->date}}</p>
                        <p class="card-text">{{$interview->field->name}}</p>
                    </div>
                    <form action="/delete/{{$interview->id}}" method="POST">
                        @csrf
                        @method('delete')
                        <button class="btn btn-outline-danger">Delete Item</button>
                    </form>
                </div>
            @endforeach
            
        </div>
    </div>
</body>
</html>
