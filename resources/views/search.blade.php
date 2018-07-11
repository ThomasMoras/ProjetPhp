@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-4"> </div>
        <form class="form-horizontal col-6 box" role="form" method="POST" action="{!! url('profil') !!}" accept-charset="UTF-8">
            {!! csrf_field() !!}
            <fieldset>

                <legend style="text-align: center; font-size: 25px">Recherche</legend>

                <div class="row">
                    <div class="col-6" style="margin-top: 2%">
                        <div class="row">
                            <label class="col-4 control-label" for="textinput">Département</label>
                            <div class="col-8">
                                <input name="departement" type="text" class="form-control" id="departement" placeholder="69">
                            </div>
                        </div>
                    </div>

                    <div class="col-6" style="margin-top: 2%">
                        <div class="row">
                            <label class="col-4 control-label" for="textinput">Domaine</label>
                            <div class="col-8">
                                <select name="domaine" id="domaine" class="form-control">
                                    @if($domaines->count() > 0)
                                        @foreach ($domaines as $domaine)
                                            <option value ="{{$domaine->id}}">{{$domaine->nom}}</option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>
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

                <div class="row" style="margin-top: 2%">
                    <label class="col-2 control-label" for="textinput">Contrat</label>
                    <div class="col-10">
                        <select name="contrat" id="contrat" class="form-control">
                            @if($contrats->count() > 0)
                                @foreach ($contrats as $contrat)
                                    <option value ="{{$contrat->id}}">{{$contrat->nom}}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                </div>

                <div class="form-group" style="margin-top: 2%">
                    <div class="col-offset-2 col-10">
                        <div class="pull-right">
                            <button type="submit" class="btn btn-primary">Envoie</button>
                        </div>
                    </div>
                </div>

            </fieldset>

        </form>

    </div><!-- /.col-lg-12 -->

    </div><!-- /.row -->
@endsection
