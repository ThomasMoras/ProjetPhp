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
                                        <h3>{{$user->domaine->nom}}</h3>
                                    @endif
                                    @if($user->competence != null)
                                        <p>{{$user->competence}}</p>
                                    @endif
                                </div>
                                <div class="meta">
                                    @if($current_user->image != null)
                                        <img src="images/{{$user->image}}" alt="" style="height: 100%;width: 100%"/>
                                    @endif
                                </div>
                            </header>
                            @if($current_user->description != null)
                                <p>{{$user->description}} </p>
                            @endif
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
                @if($current_user->domaine != null)
                    <h3>{{$current_user->domaine->nom}}</h3>
                @endif
                @if($current_user->competence != null)
                    <p>{{$current_user->competence}}</p>
                @endif
            </header>
        </section>

        <!-- Mini Posts -->
        <section>
            <div class="mini-posts">
                <!-- Mini Post -->
                <article class="mini-post">
                    @if($current_user->image != null)
                        <img src="images/{{$current_user->image}}" alt="" style="max-height: 300px;max-width: 350px"/>
                    @endif
                </article>
            </div>


            <!-- About -->
            <section class="blurb">
                <h2>Description</h2>
                @if($current_user->description != null)
                    <p>{{$current_user->description}}</p>
                @endif
                <h2>Contrat</h2>
                @if($current_user->contrat != null)
                    <p>{{$current_user->contrat->nom}}</p>
                @endif
                <h2>Inscrit le</h2>
                <p>{{$current_user->created_at}}</p>
                <ul class="actions">
                    @if($current_user->contrat != null)
                        <li><a href="#" class="button">Learn More</a></li>
                    @endif
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