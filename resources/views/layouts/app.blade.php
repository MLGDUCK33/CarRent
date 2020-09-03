<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.green.min.css"/>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!-- FONTAWESOME -->
    <script src="https://kit.fontawesome.com/f973d2a7d1.js" crossorigin="anonymous"></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css">
</head>
<body data-spy="scroll" data-target="#navbarResponsive">
<div id="app">
    <nav class="navbar navbar-expand-md navbar-dark fixed-top">
        <a class="navbar-brand" href="{{Route("home")}}">
            <img src="../images/car-logo.png">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto" id="navbar-homepage">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">HOME</a>
                    <div class="dropdown-menu nav-dropdown-menu layout-dropdown"
                         aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item nav-dropdown-item" href="{{Route("home")}}#home">START</a>
                        <a class="dropdown-item nav-dropdown-item" href="{{Route("home")}}#home-about">ABOUT</a>
                        <a class="dropdown-item nav-dropdown-item" href="{{Route("home")}}#home-our-cars">OUR CARS</a>
                        <a class="dropdown-item nav-dropdown-item" href="{{Route("home")}}#home-partners">PARTNERS</a>
                        <a class="dropdown-item nav-dropdown-item" href="{{Route("home")}}#home-contact">CONTACT</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{Route("about")}}">ABOUT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{Route("our-cars")}}">OUR CARS</a>
                </li>
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{Route("login")}}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{Route("register")}}">Register</a>
                    </li>
                @else
                    @if (Auth::user()->permission == 'admin')
                        <li class="nav-item">
                            <a class="nav-link" href="{{Route("panel")}}">PANEL</a>
                        </li>
                    @endif
                    <li class="nav-item">
                        <a class="nav-link logout" href="{{Route("logout")}}"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                @endguest
            </ul>
        </div>
    </nav>
    <main>
        @yield('content')
    </main>
    <div id="footer" class="footer">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center">
                <img class="footer-img" src="../images/car-logo.png">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab eveniet illum libero magnam numquam,
                    omnis quasi quia quidem repellat tempore!</p>
                <h2>CONTACT US</h2>
                <a class="footer-a" href="#"><i class="fab fa-facebook footer-icon"></i></a>
                <a class="footer-a" href="#"><i class="fab fa-instagram footer-icon"></i></a>
                <a class="footer-a" href="#"><i class="fab fa-twitter footer-icon"></i></a>
            </div>
        </div>
    </div>
</div>

</body>
</html>
