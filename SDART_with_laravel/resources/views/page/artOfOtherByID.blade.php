@extends('template')

@section('contenu')
    <div class="container">
            <div class="row">
                <div class="col-lg-12">
                <h1 class="">{{$userofArt->pseudo}}</h1>
                <img alt="pic of profil of :{{$userofArt->pseudo}}" class="logoConnecter" src="{{ URL::asset('img/imgIconeUser/'.$userofArt->inconLink.'') }} ">
                <p>{{$userofArt->description}}</p>
                </div>
    @foreach( $artsUser as $art)
        <div class="card bg-dark text-white col-lg-3" >
            <img  class="card-img " src="{{ URL::asset('img/allArt/'.$art->linkImg.'') }} " alt="Card image">
            <div class="card-img-overlay">
                <a href="{{url('pageOfArt/'.$art->id)}}"><h5  class="card-title HASartUser" style="
                        background-color: #171717 ;
                        opacity: 0.5;
                        color: #ffffff;"
                    >{{$art->title}}</h5></a>
                <p class="card-text HASartUserTarget d-none" style="
                        background-color: #171717 ;
                        opacity: 0.5;
                        color: #ffffff;">{{$art->description}}</p>
            </div>
        </div>
        @endforeach
        </div>
    </div>
@endsection
