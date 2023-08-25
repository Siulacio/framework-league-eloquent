@extends('base')

@section('title', 'Home')

@section('sidebar')
    @parent
    <p>Más contenido del sidebar</p>
@endsection

@section('content')
    @if(isset($user))
        Hola {{$user->nameAndEmail}}
    @else
        No existe el Usuario
    @endif

    <p>{{appName()}}</p>
@endsection
