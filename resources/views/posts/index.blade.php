@extends('layouts.app')
@section("title", "Administrador de Articulos")
@section('content')


    
            <div class="card">
              
                <a href=" {{route("posts.create")}}"class="btn btn-warning btn-block shadow"> Crear Nuevo Articulo </a>
                

                <div class="card-body">
                    @if (session('error'))
                        <div class="alert alert-success" role="alert">
                            {{ session('error') }}
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
