@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                @foreach ($utilisateurs as $user)
                    @if($user->id != $current_user->id)
                    <article class="post">
                        <header>
                            <div class="title">
                                <h2>{{$user->name}} {{$user->prenom}}</h2>
                                @if($user->domaine != null)
                                     <p>{{$user->domaine->nom}}</p>
                                @endif
                            </div>
                            <div class="meta">
                                <p>Inscrit le: <br/>{{$user->created_at}}</p>
                            </div>
                        </header>
                        <p>{{$user->description}}</p>
                    </article>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
@endsection


@section('sidebar')
<section id="sidebar">
    <!-- Intro -->
    <section id="intro">
        <a href="#" class="logo"><img src="assets/img/logo.png" alt="" /></a>
        <header>
            <h2>{{$current_user->name }}   {{$current_user->prenom}}</h2>
            <p>{{$current_user->description}}</p>
        </header>
    </section>

    <!-- Mini Posts -->
    <section>
        <div class="mini-posts">

            <!-- Mini Post -->
            <article class="mini-post">
                <header>
                    <h3><a href="single.html">Mon Profil</a></h3>
                    <time class="published" datetime="2015-10-20">October 20, 2015</time>
                    <a href="#" class="author"><img src="assets/img/avatar.jpg" alt="" /></a>
                </header>
                <a href="single.html" class="image"><img src="assets/img/pic04.jpg" alt="" /></a>
            </article>
        </div>


        <!-- About -->
        <section class="blurb">
            <h2>About</h2>
            <p>Mauris neque quam, fermentum ut nisl vitae, convallis maximus nisl. Sed mattis nunc id lorem euismod amet placerat. Vivamus porttitor magna enim, ac accumsan tortor cursus at phasellus sed ultricies.</p>
            <ul class="actions">
                <li><a href="#" class="button">Learn More</a></li>
            </ul>
        </section>

        <!-- Footer -->
        <section id="footer">
            <ul class="icons">
                <li><a href="#" class="fa-twitter"><span class="label">Twitter</span></a></li>
                <li><a href="#" class="fa-facebook"><span class="label">Facebook</span></a></li>
                <li><a href="#" class="fa-instagram"><span class="label">Instagram</span></a></li>
                <li><a href="#" class="fa-rss"><span class="label">RSS</span></a></li>
                <li><a href="#" class="fa-envelope"><span class="label">Email</span></a></li>
            </ul>
            <p class="copyright">&copy; Untitled. Design: <a href="http://html5up.net">HTML5 UP</a>. Images: <a href="http://unsplash.com">Unsplash</a>.</p>
        </section>
    </section>
</section>
@endsection