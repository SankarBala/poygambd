<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{env("APP_NAME", "poygambd.com")}}</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
          integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
          crossorigin="anonymous"/>

    <link rel="stylesheet" href="{{asset('css/app.css')}}"/>

    <title>Hello, world!</title>

</head>

<body class="bg-light">
<div class="top-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">

                <div class="d-flex justify-content-between py-1 px-5">

                    <div class="text-light">
                        <ul class="social-link">
                            <li class=""><a href=""><i class="fab fa-facebook-square"></i></a></li>
                            <li class=""><a href=""><i class="fab fa-twitter-square"></i></a></li>
                            <li class=""><a href=""><i class="fab fa-instagram-square"></i></a></li>
                            <li class=""><a href=""><i class="fab fa-youtube-square"></i></a></li>
                        </ul>
                    </div>
                    <div class="text-light pt-1">
                        <ul class="auth-link">
                            @guest
                                <li class=""><a class="" href="{{route('login')}}">{{__('Login')}}</a></li>
                                <li class=""><a class="" href="{{route('register')}}">{{__('Register')}}</a></li>
                            @else
                                <li class=""><a class="" href="/">My account</a></li>
                                <li class="">
                                    <a class="" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                </li>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            @endguest
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">

    <div class="row p-2">
        <div class="col-md-2 logo-wrapper text-center">
            <img class="m-3 logo img-responsive" src="storage/images/logo/cube.png"/>
        </div>
        <div class="col-md-10 text-center text-md-right my-auto">
            <nav class="main-nav p-2 mr-5">
                <ul class="">
                    <li class=""><a class="" href="{{route('welcome')}}">Home</a></li>
                    <li class=""><a class="" href="{{route('service')}}">Service</a></li>
                    <li class=""><a class="" href="{{route('about')}}">About</a></li>
                    <li class=""><a class="" href="{{route('contact')}}">Contact</a></li>

                </ul>
            </nav>
        </div>
    </div>
</div>


@yield('content')


<div class="container-fluid mt-4 p-5 bg-dark">
    <div class="row">
        <div class="col-md-3 text-white">
            <h2 class="pb-3">Poyganbd.com</h2>
            <hr class="bg-white"/>
            <p class="text-justify">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat debitis nobis, blanditiis harum quod
                natus.
            </p>
        </div>
        <div class="col-md-2 text-white">
            <h2 class="pb-3">Services</h2>
            <hr class="bg-white"/>
            <ul class="">
                <li>Something</li>
                <li>Something</li>
                <li>Something</li>
                <li>Something</li>
                <li>Something</li>
                <li>Something</li>
            </ul>
        </div>
        <div class="col-md-2 text-white">
            <h2 class="pb-3">Poyganbd.com</h2>
            <hr class="bg-white"/>
            <p class="text-justify">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat debitis nobis, blanditiis harum quod
                natus.
            </p>
        </div>
        <div class="col-md-5 text-white">
            <h2 class="pb-3">Contact us</h2>
            <hr class="bg-white"/>
            <div class="row">

                <div class="col-md-4">
                    <a href="tel://0170000000" class="text-white">017-0000-0000</a>
                    <br/>
                    <a href="mailto://username@server.tld" class="text-white">username@server.tld</a>
                    <address class="text-white">
                        Village, Upazilla, District
                    </address>
                </div>
                <div class="col-md-8">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12186.182937444117!2d90.4435854384347!3d24.762085257057276!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x375651d540b86fb9%3A0x273e7a211a08b84f!2zQ1VCRSBMSU1JVEVEIC0g4KaV4Ka_4KaJ4KasIOCmsuCmv-CmruCmv-Cmn-Cnh-CmoQ!5e0!3m2!1sbn!2sbd!4v1610377829565!5m2!1sbn!2sbd"
                        width="100%" height="250" frameborder="0" style="border:0;" allowfullscreen=""
                        aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container-fluid footer-bottom">
    <div class="row">
        <div class="col-12">
            <p class="text-white text-center my-auto p-2">Developed by <a href="http://cube.com.bd"> Cube
                    Limited</a></p>
        </div>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>

</html>
