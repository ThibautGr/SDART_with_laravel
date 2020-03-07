@extends('template')

@section('contenu')
    <div class="d-flex justify-content-center">
        <div class="card bg-dark text-white col-lg-6 " >
            <a href="{{url('pageOfArt/'.$art->id)}}"><h5  class="">{{$art->title}}</h5></a>
            <img  class="card-img " src="{{ URL::asset('img/allArt/'.$art->linkImg.'') }} " alt="Card image">
            <div class="card-footer">
                <p >{{$art->description}}</p>
            </div>
        </div>
    </div>
@endsection
