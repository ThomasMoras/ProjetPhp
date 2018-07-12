@extends('layouts.app')

@section('content')
    <div class="container">
        @foreach($users as $user)
            <div class="row">
                <div class="col-md-4">
                    <div class="thumbnail">
                        <div class="card bg-light text-dark">
                            <div class="card-body">
                                <h5 class="card-title">{{ $user->name }}</h5>
                                @if($user->image != null)
                                <img src="/images/{{$user->image }}"><br>
                                @else
                                    Aucune image pour le moment<br>
                                @endif
                                <a href="{{ route('conversations.show', $user->id) }}" class="card-link">Contact</a>
                            </div>
                        </div>
                    </div>
                </div>
         @endforeach
    </div>
@endsection
