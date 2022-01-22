<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Happy Book Store')</title>
     <!-- Scripts -->
     <script src="{{ asset('js/app.js') }}" defer></script>

     <!-- Styles -->
     <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <header class="text-center text-white">
        <div class = "container-lg-1 py-1 bg-primary">
            <h1 class="display-4 font-weight-bold mb-2">Happy Book Store</h1>
        </div>
    </header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="height: 10vh">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNavDropdown">
            <ul class="navbar navbar-primary" style="list-style-type: none">
                <li class="nav-item {{request()->routeIs('home')?'active':''}}">
                    <a class="nav-link" href="{{route('home')}}">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-expanded="false">
                        Category
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="{{route('fiction')}}">Fiction</a>
                        <a class="dropdown-item" href="{{route('science')}}">Science</a>
                        <a class="dropdown-item" href="{{route('computer')}}">Computer</a>
                    </div>
                </li>
                <li class="nav-item {{request()->routeIs('about')?'active':''}}">
                    <a class="nav-link" href="{{route('about')}}">About</a>
                </li>
             </ul>
        </div>
    </nav>

    @yield('content')


        <footer class="text-center text-white fixed-bottom bg-primary" style="position: absolute">
            <div class = "container"></div>
                <div class="text-center">
                    &copy; Happy Book Store 2021
                </div>
        </footer>
</body>
</html>
