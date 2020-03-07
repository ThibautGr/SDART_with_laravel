@extends('template')

@section('contenu')
<p>hello</p>
<div class="row">
    @foreach($lastTenArtOfAllArt as $art)
        <div class="card bg-dark text-white col-lg-2" >
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
@endsection
