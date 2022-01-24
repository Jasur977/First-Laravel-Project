<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Shop Homepage - Start Bootstrap Template</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{asset('css/shop-homepage.css')}}" rel="stylesheet" />
</head>
<body>
<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#!">Start Bootstrap</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ url('/home')}}">
                        Home
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item"><a class="nav-link" href="{{ url('about')}}">About</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('services')}}">Services</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('contact')}}">Contact</a></li>
                @guest
                <li class="nav-item"><a class="nav-link" href="{{ url('login')}}">Login</a></li>
                @endguest
                @auth
                    <li class="nav-item"><a class="nav-link" href="{{ route('products.index')}}">Products</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('categories.index')}}">Categories</a></li>
                    <li class="nav-item"><a class="nav-link" href="#" onclick="document.getElementById('logout-form').submit()">Log Out</a></li>
                    <form action="{{ route('logout')}}" method="POST" id="logout-form">
                        @csrf
                    </form>
                    @endauth
            </ul>
        </div>
    </div>
</nav>
<!-- Page Content-->
<div class="container">
    <div class="row">
        @yield('content')

    </div>
</div>
<!-- Footer-->
<footer class="py-5 bg-dark">
    <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2021</p></div>
</footer>
<!-- Bootstrap core JS-->
<script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- Core theme JS-->

</body>
</html>
