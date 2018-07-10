@extends('layouts.app')

@section('content')


<div class="container">
    <form method="POST" action="{!! url('profil') !!}" accept-charset="UTF-8">
        {!! csrf_field() !!}

        <form>
            <div class="form-group">
                <label for="nom">Entrez votre nom : </label>
                <input name="nom" type="text" class="form-control" id="nom">
            </div>
            <div class="form-group">
                <label for="prenom">Entrez votre prenom : </label>
                <input name="prenom" type="text" class="form-control" id="prenom">
            </div>
            <div class="form-group">
                <label for="departement">Entrez votre departement : </label>
                <input name="departement" type="number" class="form-control" id="departement">
            </div>
            <div class="form-group">
                <label for="email">Entrez votre email : </label>
                <input name="email" type="email" class="form-control" id="email">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </form>
</div>
@endsection
