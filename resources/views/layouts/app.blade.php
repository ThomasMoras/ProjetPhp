<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>Future Imperfect by HTML5 UP</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/main.css" />
</head>
<body class="is-preload">

<!-- Wrapper -->
<div id="wrapper">

    <!-- Header -->
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
                @endif
                    @if (Auth::guest())
                        <li><a href="{{ route('login') }}">Login</a></li>
                        <li><a href="{{ route('register') }}">Register</a></li>
                    @else
                        <div class="pull-right">
                            <li><a href="#"> {{ Auth::user()->name }}</a></li>
                            <li><a href="{{ route('logout') }}">Logout</a></li>
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

    <!-- Menu -->
    <section id="menu">

        <!-- Search -->
        <section>
            <form class="search" method="get" action="#">
                <input type="text" name="query" placeholder="Search" />
            </form>
        </section>

        <!-- Links -->
        <section>
            <ul class="links">
                <li>
                    <a href="#">
                        <h3>Lorem ipsum</h3>
                        <p>Feugiat tempus veroeros dolor</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <h3>Dolor sit amet</h3>
                        <p>Sed vitae justo condimentum</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <h3>Feugiat veroeros</h3>
                        <p>Phasellus sed ultricies mi congue</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <h3>Etiam sed consequat</h3>
                        <p>Porta lectus amet ultricies</p>
                    </a>
                </li>
            </ul>
        </section>

        <!-- Actions -->
        <section>
            <ul class="actions stacked">
                <li><a href="#" class="button large fit">Log In</a></li>
            </ul>
        </section>

    </section>

    <div id="main">
        @yield('content')
    </div>

    @yield('sidebar')



</div>

</body>
</html>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/browser.min.js"></script>
<script src="assets/js/breakpoints.min.js"></script>
<script src="assets/js/util.js"></script>
<script src="assets/js/main.js"></script>
