@extends('template')

@section('contenu')
    @if (Route::has('login'))
        @auth
            <div class="text-center">
                <h1>space user of : {{Auth::user()->pseudo}}</h1>
                <img class="logoConnecter" src="{{ URL::asset('img/imgIconeUser/'.Auth::user()->inconLink.'') }} ">
                <p>{{Auth::user()->description}}</p>
            </div>
        @endauth
    @endif
    <div class="container">
        <div class="row">
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
    @if (Route::has('login'))
        @auth
            <h2>ajouter une oeuvre d'art</h2>
            <form class="col-log px-3 " method="POST" action="{{url('displaySpaceUser/'.Auth::user()->id)}}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    @error('title')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    <label for="title">title</label>
                    <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{old('title')}}" placeholder="max 50 carac">
                </div>
                <div class="form-group">
                    @error('description')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    <label for="description">description</label>
                    <textarea id="description" class="form-control @error('description') is-invalid @enderror" name="description">{{old('description')}}</textarea>
                </div>

                <div class="form-group">
                    @error('linkImg')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    <label for="linkImg">Oeuvre to publish</label>
                    <input id="linkImg" class="form-control @error('linkImg') is-invalid @enderror" type="file" name="linkImg" value="{{old('linkImg')}}">
                </div>

                <input type="hidden" value="<?php echo Auth::user()->id?>" name="user_id">
                <input type="hidden" value="<?php echo Auth::user()->typeart_id ?>" name="typeart_id">

                <input type="submit" class="btn btn-primary" value="sand">
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

   @else
        <h2>all Art of :</h2>
        <div class="container">
            <div class="row">
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
    @endif


@endsection


