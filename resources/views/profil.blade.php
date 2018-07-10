@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{ url('profil') }}" method="POST">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="inputNom">Nom</label>
            <input type="text" class="form-control" id="inputNom" placeholder="Nom">
        </div>
        <div class="form-group">
            <label for="inputPrenom">Prénom</label>
            <input type="text" class="form-control" id="inputPrenom" placeholder="Prenom">
        </div>
        <div class="form-group">
            <label for="inputDepartement">Département</label>
            <input type="number" class="form-control" id="inputDepartement" placeholder="Departement">
        </div>
        <div class="form-group">
            <label for="inputMail">Email</label>
            <input type="email" class="form-control" id="inputMail" placeholder="Mail">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
