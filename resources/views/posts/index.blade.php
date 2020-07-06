@extends('layouts.app')
@section("title", "Administrador de Articulos")
@section('content')


    
            <div class="card">
                <div class="card-header">
                <a href=" {{route("posts.create")}}"class="btn btn-warning btn-block"> Crear Nuevo Articulo </a>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table">
                        <thead>
                            <tr>
                                <td>ID</td>
                                <td>Titulo</td>
                                <td colspan="2"> &nbsp; </td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($posts as $post)
                                <tr>
                                    <td>{{$post->id}}</td>
                                    <td>{{$post->title}}</td>
                                    <td>
                                        <a href="{{ route("posts.edit",$post) }}" class="btn btn-outline-success"> Editar</a>
                                    </td>
                                    <td>
                                        <form action="{{route("posts.destroy", $post )}}" method="POST">
                                            @csrf
                                            @method("DELETE")
                                            <input
                                             type="submit" 
                                             value="Eliminar" 
                                             class="btn btn-danger"
                                             onclick="return confirm('Desea Eliminar?')">
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>


@endsection
