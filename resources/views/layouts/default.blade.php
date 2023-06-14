<!doctype html>
<html lang="en">
<head>
    @vite(['resources/js/app.js'])
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<header class="container"> <a href="{{route('group.index')}}" class="btn btn-success mx1"> На головну сторінку </a>
    <a href="{{route('caretaker.list')}}" class="btn btn-primary mx1"> Список опікунів </a>
</header>
<main class="py-4">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-10">
                @yield('content')
            </div>
        </div>
    </div>
    </main>
</div>
</body>
</html>

