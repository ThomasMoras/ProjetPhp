@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                @foreach ($utilisateurs as $user)
                    <article class="post">
                        <header>
                            <div class="title">
                                <h2><a href="single.html">{{$user->name}}</a></h2>
                                <p>catégorie a binder blablabla</p>
                            </div>
                            <div class="meta">
                                <time class="published" datetime="2015-10-25">October 25, 2015</time>
                            </div>
                        </header>
                        <p>Je raconte ma vie ... </p>
                        <footer>
                            <ul class="actions">
                                <li><a href="single.html" class="button large">Profil complet</a></li>
                            </ul>
                        </footer>
                    </article>
                @endforeach
            </div>
        </div>
    </div>
@endsection
