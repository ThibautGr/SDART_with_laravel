@extends('template')

@section('contenu')
    <div class="nav rowmodif ">
        <p class="col-1"> PROPOSITION:</p>
        <a class=" col-1 waves-effect filter hideAndShowPropAll"  href="#hideAndShowPropAll" data-rel="all">random</a>
        <a class=" col-1 waves-effect filter hideAndShowPropGraphique" href="#hideAndShowPropAll" data-rel="1">graphique</a>
        <a class="col-1 waves-effect filter hideAndShowProp3D" href="#hideAndShowPropAll" data-rel="2">3D</a>
        <a class="col-1 waves-effect filter hideAndShowPropdigital" href="#hideAndShowPropAll" data-rel="4">Digital</a>
    </div>
<div class="row">
    @foreach($lastTenArtOfAllArt as $art)
        <div class="card bg-dark text-white col-lg-2 {{$art->typeart_id}} ">
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
