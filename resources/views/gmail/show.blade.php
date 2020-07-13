@extends('welcome')
@section('content')
<div class="container">
    <div class="row mt-4">
        <div class="col">
            <h1>Categoria: {{$gmail->category}}</h1>
        </div>
        <div class="col">
            <a href="{{ route("gmail.index") }}" class="btn btn-outline-primary float-right">Atras</a>
        </div>
    </div>
    @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
    @endif

    <div class="row">
        <div class="col">
            <h3>Ingresar Nueva Informacion</h3>
            <table class="table">
                <thead>
                    <tr>
                        <td>E-mail</td>
                        <td>Acciones</td>
                        <th></th>
                    </tr>
                </thead>
                
                    
                        <tr>
                            <td>aca va el mail</td>
                            <td><a href="" class="btn btn-warning">Editar</a></td>
                            <td>
                                <form action="">
                                    @csrf
                                    @method("DELETE")
                                    <input type="submit" class="btn btn-danger" value="Eliminar">
                                </form>
                            </td>
                        </tr>
                    
               
            </table>
        </div>
    </div>
</div>
    
@endsection