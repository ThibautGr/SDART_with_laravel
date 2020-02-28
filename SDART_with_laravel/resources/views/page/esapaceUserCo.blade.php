@extends('template')

@section('contenu')
    @if (Route::has('login'))
        @auth

            <h1>space user of : {{Auth::user()->pseudo}}</h1>
            <img class=" " src="{{ URL::asset('img/imgIconeUser/'.Auth::user()->inconLink.'') }} ">
            <p>{{Auth::user()->description}}</p>

            <h2>ajouter une oeuvre d'art</h2>
            <form method="POST" action="{{url('displaySpaceUser')}}" enctype="multipart/form-data">
                @csrf
                <label for="title">title</label>
                <input id="title" type="title" name="title" value="" placeholder="max 50 carac">
                <label for="description">description</label>
                <textarea id="description" name="description"></textarea>
                <label for="linkImg">Oeuvre to publish</label>
                <input id="linkImg" type="file" name="linkImg" value="">
                <input type="hidden" value="<?php echo Auth::user()->id?>" name="user_id">
                <input type="hidden" value="<?php echo Auth::user()->id_typeart ?>" name="id_typeart">
                <input type="submit" value="sand">
            </form>


            <a href="{{url('getArtByUser/'.Auth::user()->id)}}" class="btn alert-primary">see my all art</a>

            <!--
            id_typeart
            title
            description
            linkImg
            id_users
            --->
        @endauth

        @foreach($artsUser as $art)
            <h1>{{$art->description}}</h1>
            <p>{{$art->description}}</p>
            <img class=" " src="{{ URL::asset('img/allArt/'.$art->linkImg.'') }} ">
        @endforeach

    @endif
@endsection
