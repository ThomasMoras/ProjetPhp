@extends('layouts.app')

@section('content')
<div class="container">
    <form method="POST" action="{!! url('profil') !!}" accept-charset="UTF-8">
        {!! csrf_field() !!}
        <form>
            <div class="form-group">
                <label for="name">Entrez votre nom : </label>
                <input name="name" type="text" class="form-control" id="name" value="{{$utilisateur->name}}">
            </div>
            <div class="form-group">
                <label for="prenom">Entrez votre prenom : </label>
                <input name="prenom" type="text" class="form-control" id="prenom" value="{{$utilisateur->prenom}}">
            </div>
            <div class="form-group">
                <label for="departement">Entrez votre departement : </label>
                <input name="departement" type="number" class="form-control" id="departement" value="{{$utilisateur->departement}}">
            </div>
            <div class="form-group">
                <label for="domaine">Entrez votre domaine : </label>
                @if($utilisateur->domaine != null)
                     <input name="domaine" type="text" class="form-control" id="domaine" value="{{$utilisateur->domaine->nom}}">
                @else
                    <input name="domaine" type="text" class="form-control" id="domaine">
                @endif

            </div>
            <div class="form-group">
                <label for="description">Entrez votre description : </label>
                <input name="description" type="text" class="form-control" id="description" value="{{$utilisateur->description}}">
            </div>
            <div class="form-group">
                <label for="email">Entrez votre email : </label>
                <input name="email" type="email" class="form-control" id="email" value="{{$utilisateur->email}}">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </form>
</div>
@endsection
