@extends('layouts.app')

@section('content')
{{--<div class="container">--}}
{{--<div class="row">--}}
{{--<form method="POST" action="{!! url('profil') !!}" accept-charset="UTF-8">--}}
{{--{!! csrf_field() !!}--}}

{{--<form class="form-horizontal">--}}
{{--<div class="box">--}}
{{--<div class="row">--}}
{{--<div class="col-3">--}}
{{--<label for="name">Entrez votre nom : </label>--}}
{{--<input name="name" type="text" class="form-control" id="name" value="{{$utilisateur->name}}">--}}
{{--</div>--}}
{{--<div class="col-3">--}}
{{--<label for="prenom">Entrez votre prenom : </label>--}}
{{--<input name="prenom" type="text" class="form-control" id="prenom" value="{{$utilisateur->prenom}}">--}}
{{--</div>--}}
{{--</div>--}}

{{--<div class="form-group">--}}
{{--<label for="email">Entrez votre email : </label>--}}
{{--<input name="email" type="email" class="form-control" id="email" value="{{$utilisateur->email}}">--}}
{{--</div>--}}
{{--<div class="form-group">--}}
{{--<label for="departement">Entrez votre departement : </label>--}}
{{--<input name="departement" type="text" class="form-control" id="departement" value="{{$utilisateur->departement}}">--}}
{{--</div>--}}
{{--<div class="form-group">--}}
{{--<label for="domaine">Entrez votre domaine : </label>--}}
{{--<select name="domaine" id="domaine" class="form-control">--}}
{{--@if($domaines->count() > 0)--}}
{{--<option selected value="{{$utilisateur->domaine->id}}">{{$utilisateur->domaine->nom}}</option>--}}
{{--@foreach ($domaines as $domaine)--}}
{{--<option value ="{{$domaine->id}}">{{$domaine->nom}}</option>--}}
{{--@endforeach--}}
{{--@endif--}}
{{--</select>--}}
{{--</div>--}}
{{--<div class="form-group">--}}
{{--<label for="contrat">Entrez votre contrat : </label>--}}
{{--<select name="contrat" id="contrat" class="form-control">--}}
{{--@if($contrats->count() > 0)--}}
{{--<option selected value="{{$utilisateur->contrat->id}}">{{$utilisateur->contrat->nom}}</option>--}}
{{--@foreach ($contrats as $contrat)--}}
{{--<option value ="{{$contrat->id}}">{{$contrat->nom}}</option>--}}
{{--@endforeach--}}
{{--@endif--}}
{{--</select>--}}
{{--</div>--}}
{{--<div class="form-group">--}}
{{--<label for="description">Entrez votre description : </label>--}}
{{--<textarea name="description" type="text" class="form-control" id="description" value="{{$utilisateur->description}}">--}}
{{--{{$utilisateur->description}}--}}
{{--</textarea>--}}
{{--</div>--}}
{{--</div>--}}


{{--<button style="margin-top: 2%" type="submit" class="btn btn-primary">Submit</button>--}}
{{--</form>--}}
{{--</form>--}}
{{--</div>--}}
{{--</div>--}}

{{--<div class="row">--}}

{{--<div class="col-md-4 col-md-offset-4">--}}
{{--<form class="form-horizontal" role="form" method="POST" action="{!! url('profil') !!}" accept-charset="UTF-8">--}}

{{--<fieldset>--}}

{{--<div class="form-group">--}}
{{--<label class="col-2 control-label" for="name">Entrez votre nom : </label>--}}
{{--<div class="col-10">--}}
{{--<input name="name" type="text" class="form-control" id="name" value="{{$utilisateur->name}}">--}}
{{--</div>--}}
{{--</div>--}}


{{--</fieldset>--}}

{{--</form>--}}

{{--</div><!-- /.col-lg-12 -->--}}

{{--</div><!-- /.row -->--}}

<div class="row" style="margin-top: 2%">
    <div class="col-4"> </div>
    <form class="form-horizontal col-6 box" role="form">

        <fieldset>

            <!-- Form Name -->
            <legend style="text-align: center; font-size: 25px">Modification des informations</legend>
            <!-- Text input-->

            <div class="form-group" style="margin-top: 3%">
                <div class="row">
                    <label class="col-2 control-label" for="textinput">Nom</label>
                    <div class="col-10">
                        <input name="name" type="text" class="form-control" id="name" value="{{$utilisateur->name}}">
                    </div>
                </div>
            </div>

            <div class="form-group" style="margin-top: 2%">
                <div class="row">
                    <label class="col-2 control-label" for="textinput">Prénom</label>
                    <div class="col-10">
                        <input name="prenom" type="text" class="form-control" id="prenom" value="{{$utilisateur->prenom}}">
                    </div>
                </div>
            </div>

            <div class="form-group" style="margin-top: 2%">
                <div class="row">
                    <label class="col-2 control-label" for="textinput">Département</label>
                    <div class="col-10">
                        <input type="text" placeholder="Address Line 2" class="form-control">
                    </div>
                </div>
            </div>

            <div class="form-group" style="margin-top: 2%">
                <div class="row">
                    <label class="col-2 control-label" for="textinput">Email</label>
                    <div class="col-10">
                        <input type="text" placeholder="Address Line 2" class="form-control">
                    </div>
                </div>
            </div>

            <div class="form-group" style="margin-top: 2%">
                <div class="row">
                    <label class="col-2 control-label" for="textinput">Domaine</label>
                    <div class="col-10">
                        <input type="text" placeholder="Address Line 2" class="form-control">
                    </div>
                </div>
            </div>

            <div class="form-group" style="margin-top: 2%">
                <div class="row">
                    <label class="col-2 control-label" for="textinput">Compétence</label>
                    <div class="col-10">
                        <input type="text" placeholder="Address Line 2" class="form-control">
                    </div>
                </div>
            </div>

            <div class="form-group" style="margin-top: 2%">
                <div class="row">
                    <label class="col-2 control-label" for="textinput">Description</label>
                    <div class="col-10">
                        <textarea name="description" type="text" class="form-control" id="description" value="{{$utilisateur->description}}"> 7
                            {{$utilisateur->description}}
                        </textarea>
                    </div>
                </div>
            </div>

            <div class="form-group" style="margin-top: 2%">
                <div class="row">
                    <label class="col-2 control-label" for="textinput">Image</label>
                    <input class="col-2" type="file" name="image" id="file">
                </div>
            </div>

            <div class="form-group" style="margin-top: 2%">
                <div class="col-offset-2 col-10">
                    <div class="pull-right">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </div>
            </div>

        </fieldset>

    </form>

</div><!-- /.col-lg-12 -->

</div><!-- /.row -->
@endsection
