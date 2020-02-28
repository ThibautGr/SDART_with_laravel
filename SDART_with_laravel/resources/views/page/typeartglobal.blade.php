@extends('template')

@section('contenu')
<table>
                @foreach ($typeart as $tart)
                <tr>
                    <td><a href="{{url('typeart/{id}'.$tart->id)}}">{{$tart->id}}</a></td>
                    <td>{{$tart->name}}</td>
                </tr>   
                @endforeach
            </table>
<div class="container" > 
    
    <h1> Art {{$tart->id}}{{$tart->name}} </h1>
          
    <div class="card mb-3">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
    <img src="..." class="card-img-top" alt="...">
    </div>
    <br>
    <div class="card mb-3">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
    <img src="..." class="card-img-top" alt="...">
    </div>
    <br>
    <div class="card mb-3">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
    <img src="..." class="card-img-top" alt="...">
    </div>
    <br>
    <div class="card mb-3">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
    <img src="..." class="card-img-top" alt="...">
    </div>
</div>
@endsection
