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
        <h1><a href="/">KiproMeet</a></h1>
        <nav class="links">
            <ul>
                @if(Auth::check())
                    <li ><a href="{{ route('profil') }}">Profile</a></li>
                    <li ><a href="{{ route('search') }}">Recherche</a></li>
                @endif
            </ul>
        </nav>
        <nav class="main">
            <ul>
                <!-- Authentication Links -->
                @if (Auth::guest())
                    <li><a href="{{ route('login') }}">Login</a></li>
                    <li><a href="{{ route('register') }}">Register</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    Logout
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                @endif
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
