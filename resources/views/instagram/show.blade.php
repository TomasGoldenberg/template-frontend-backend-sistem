@extends('welcome')
@section('content')
<div class="container">
    <div class="row mt-3">
        <div class="col">
            <h1>Categoria: {{$instagram->category}}</h1>
        </div>
        <div class="col">
            <a href=" {{ route("instagram.index") }}" class="btn btn-outline-primary float-right mt-1">Atras</a>
        </div>
    </div>
    @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
    @endif

    <div class="row">
        <div class="col">
            <h3>Ingresar nueva informacion</h3>
            <table class="table table-hover">
                <thead>
                    <tr>

                        <td>Comentario</td>
                        <td>Mensaje</td>
                        <td>Acciones</td>
                        <th></th>
                    </tr>
                </thead>
                @foreach ($instagram->instaDetails as $detail)
                    <tr>

                        <td>{{$detail->comment}}</td>
                        <td>{{$detail->message}}</td>
                        <td><a href=" {{ route("instagram.instadetails.edit",[
                            "instagram"=>$instagram,
                            "instadetail"=> $detail
                        ]) }} " class="mt-5 btn btn-warning">Editar</a></td>
                        <td><a href="" class="mt-5 btn btn-outline-danger">Eliminar</a></td>

                    </tr>
                @endforeach
            </table>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <a href=" {{ route("instagram.instadetails.create",$instagram) }} " class="btn btn-outline-primary ml-2">Agregar Informacion</a>
        </div>
        <div class="col">
            <a href=" {{ route("instagram.instaaccounts.create",$instagram) }} " class="btn btn-outline-primary float-right">Agregar Cuentas</a>
        </div>
    </div>
</div>
    
@endsection