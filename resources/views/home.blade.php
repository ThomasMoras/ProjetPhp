@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

            @foreach ($utilisateurs as $user)

                <div class="panel panel-default">
                    <div class="panel-heading">{{$user->name}}</div>

                            <div class="card text-center">
                                <div class="card-body">
                                    <h5 class="card-title">Special title treatment</h5>
                                    <p class="card-text">{{$user->description}}</p>
                                </div>
                                <div class="card-footer text-muted">
                                    2 days ago
                                </div>
                            </div>
                    </div>
            @endforeach


        </div>
    </div>
</div>
@endsection
