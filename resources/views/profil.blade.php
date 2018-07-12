@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-4"> </div>

        <form class="form-horizontal col-6 box" role="form" enctype="multipart/form-data" method="POST" action="{!! url('profil') !!}" accept-charset="UTF-8">
            {!! csrf_field() !!}
            <fieldset>

                <!-- Form Name -->
                <legend style="text-align: center; font-size: 25px">Modification des informations</legend>
                <!-- Text input-->
                @if($utilisateur->image != null)
                <img src="/images/{{ $utilisateur->image }}" style="max-width: 400px; max-height: 200px">
                @endif
                <div class="row">

                    <div class="col-6" style="margin-top: 3%">
                        <div class="row">
                            <label class="col-4 control-label" for="textinput">Nom</label>
                            <div class="col-8">
                                <input name="name" type="text" class="form-control" id="name" value="{{$utilisateur->name}}">
                            </div>
                        </div>
                    </div>

                    <div class="col-6" style="margin-top: 2%">
                        <div class="row">
                            <label class="col-4 control-label" for="textinput">Prénom</label>
                            <div class="col-8">
                                <input name="prenom" type="text" class="form-control" id="prenom" value="{{$utilisateur->prenom}}">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6" style="margin-top: 2%">
                        <div class="row">
                            <label class="col-4 control-label" for="textinput">Département</label>
                            <div class="col-8">
                                <input name="departement" type="text" class="form-control" id="departement" value="{{$utilisateur->departement}}">
                            </div>
                        </div>
                    </div>

                    <div class="col-6" style="margin-top: 2%">
                        <div class="row">
                            <label class="col-4 control-label" for="textinput">Domaine</label>
                            <div class="col-8">
                                <select name="domaine" id="domaine" class="form-control">
                                    @if($domaines->count() > 0)
                                        <option selected value="{{$utilisateur->domaine->id}}">{{$utilisateur->domaine->nom}}</option>
                                        @foreach ($domaines as $domaine)
                                            <option value ="{{$domaine->id}}">{{$domaine->nom}}</option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-5" style="margin-top: 2%">
                        <div class="row">
                            <label class="col-5 control-label" for="textinput">Contrat</label>
                            <div class="col-7">
                                <select name="contrat" id="contrat" class="form-control">
                                    @if($contrats->count() > 0)
                                        <option selected value="{{$utilisateur->contrat->id}}">{{$utilisateur->contrat->nom}}</option>
                                        @foreach ($contrats as $contrat)
                                            <option value ="{{$contrat->id}}">{{$contrat->nom}}</option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="col-7" style="margin-top: 2%">
                        <div class="row">
                            <label class="col-2 control-label" for="textinput">Email</label>
                            <div class="col-10">
                                <input name="email" type="email" class="form-control" id="email" value="{{$utilisateur->email}}">
                            </div>
                        </div>
                    </div>

                </div>

                <div class="form-group" style="margin-top: 2%">
                    <div class="row">
                        <label class="col-2 control-label" for="textinput">Compétence</label>
                        <div class="col-10">
                            <input type="text" name="competence" placeholder="Java, C++, Php" class="form-control" id="competence" value="{{$utilisateur->competence}}">
                        </div>
                    </div>
                </div>

                <div class="form-group" style="margin-top: 2%">
                    <div class="row">
                        <label class="col-2 control-label" for="textinput">Description</label>
                        <div class="col-10">
                        <textarea name="description" type="text" class="form-control" id="description" value="{{$utilisateur->description}}">
                            {{$utilisateur->description}}
                        </textarea>
                        </div>
                    </div>
                </div>

                <div class="form-group" style="margin-top: 2%">
                    <div class="row">
                        <label class="col-2 control-label" for="image_file">Image</label>
                        <input class="col-8" type="file" name="image_file" id="image_file">
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
