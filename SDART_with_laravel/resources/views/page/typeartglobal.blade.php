@extends('template')

@section('contenu')

<div class="container" >
    <h1 class="text-center">Page of Art: {{$TypeArtTitle->name}}</h1>
    @foreach($getArtAuserByidTypeArt as $ArtbyID)
     <!--zone dev-->
        <div class="bgGrey">
            <div class="card ">
                <div class="card-body backGroundColor">
                    <h5 class="card-title"> <img class="imgProfile " src="{{ URL::asset('img/imgIconeUser/'.$ArtbyID->inconLink.'') }} "> <a class="linkArt" href="{{url('displaySpaceOtherUser/'.$ArtbyID->user_id)}}">{{$ArtbyID->pseudo}}</a> has published : <a class="linkArt" href="{{url('pageOfArt/'.$ArtbyID->id)}}">{{$ArtbyID->title}}</a></h5>
                    <p class="card-text"><small class="text-muted">Create the : {{$ArtbyID->created_at}}</small></p>
                </div>
                <img  class="card-img-top modif-card" src="{{ URL::asset('img/allArt/'.$ArtbyID->linkImg.'') }} " alt="Card image">
            </div>
        </div>
    @endforeach





</div>
@endsection
