@extends('layouts.app')

@section('content')


<div class="container">
    <form method="POST" action="{!! url('profil') !!}" accept-charset="UTF-8">
        {!! csrf_field() !!}
        <label for="nom">Entrez votre nom : </label>
        <input name="nom" type="text" id="nom">

        <br>

        <label for="prenom">Entrez votre prenom : </label>
        <input name="prenom" type="text" id="prenom">

        <br>

        <label for="departement">Entrez votre departement : </label>
        <input name="departement" type="number" id="departement">

        <br>

        <label for="email">Entrez votre email : </label>
        <input name="email" type="email" id="email">




        <input type="submit" value="Envoyer !">
    </form>
</div>
@endsection
