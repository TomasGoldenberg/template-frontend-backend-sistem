@extends('layouts.app')
@section("css")
<link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
@endsection

@section("title", "Inicio")
@section('content')

<a href="{{ route("posts.index") }}" class="btn btn-block btn-warning">Administrar Blog</a>
<br>
<a href="{{ route("instagram.index") }}" class="btn btn-block btn-success">Administrar Instagram</a>
<br>

<h1>Ultima conexion contactos</h1>
<ul class="list-group">
    @foreach ($users as $user)
        <li class="list-group-item">
                <h4>{{$user->name}}</h4>
                <em>Ultimo Ingreso: ---</em>
        </li>
    @endforeach
</ul>
@endsection
