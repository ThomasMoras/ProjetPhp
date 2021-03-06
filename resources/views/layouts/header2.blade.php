<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>KiproMeet</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="../assets/css/mainm.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/open-iconic/1.1.1/font/css/open-iconic-bootstrap.min.css">
<!--<link href="{{ asset('css/app.css') }}" rel="stylesheet">-->
</head>
<body class="is-preload">
<header id="header">
    @if(Auth::check())
        <h1><a href="/home">KiproMeet</a></h1>
    @else
        <h1><a href="/">KiproMeet</a></h1>
    @endif
    <nav class="links">
        <ul>
            @if(Auth::check())
                <li ><a href="{{ route('profil') }}">Profile</a></li>
                <li ><a href="{{ route('search') }}">Recherche</a></li>
                <li ><a href="{{ route('conversations') }}">Conversation</a></li>
            @endif
            @if (Auth::guest())
                <li><a href="{{ route('login') }}">Login</a></li>
                <li><a href="{{ route('register') }}">Register</a></li>
            @else
                <div class="pull-right" >
                    <li><a href="#"> {{ Auth::user()->name }}</a></li>
                    <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </div>
            @endif
        </ul>
    </nav>
    <nav class="main">
        <ul>
            <!-- Authentication Links -->
        </ul>
    </nav>

</header>
<div>
    @yield('main')
</div>

</body>
</html>
<script src="../assets/js/jquery.min.js"></script>
<script src="../assets/js/browser.min.js"></script>
<script src="../assets/js/breakpoints.min.js"></script>
<script src="../assets/js/util.js"></script>
<script src="../assets/js/main.js"></script>
<script src="../assets/js/browser.min.js"></script>
<script src="../assets/js/breakpoints.min.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>
<script src="../assets/js/retina-1.1.0.js"></script>
<script src="../assets/js/jquery.hoverdir.js"></script>
<script src="../assets/js/jquery.hoverex.min.js"></script>
<script src="../assets/js/jquery.prettyPhoto.js"></script>
<script src="../assets/js/jquery.isotope.min.js"></script>
<script src="../assets/js/custom.js"></script>