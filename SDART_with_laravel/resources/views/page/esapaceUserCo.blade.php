@extends('template')

@section('contenu')
    @if (Route::has('login'))
        @auth

            <h1>space user of : {{Auth::user()->pseudo}}</h1>
            <img class=" " src="{{ URL::asset('img/imgIconeUser/'.Auth::user()->inconLink.'') }} ">
            <p>{{Auth::user()->description}}</p>
        @endauth
    @endif
@endsection
