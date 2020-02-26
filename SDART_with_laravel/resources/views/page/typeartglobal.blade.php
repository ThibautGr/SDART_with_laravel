@extends('template')
@section('contenu')
<table>
                @foreach ($typeart as $tart)
                <tr>
                    <td><a href="{{url('typeart/'.$tart->id)}}">{{$tart->id}}</a></td>
                    <td>{{$tart->name}}</td>
                </tr>   
                @endforeach
            </table>

@endsection
