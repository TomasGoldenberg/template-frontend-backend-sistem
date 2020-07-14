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
                        <td>
                            <form action="{{ route("instagram.instadetails.destroy",[
                                 "instagram"=>$instagram,
                                "instadetail"=> $detail
                            ]) }}"
                            method="POST">
                                @csrf
                                @method("DELETE")
                                <input type="submit" class="btn btn-outline-danger mt-5" value="Eliminar" onclick="return confirm('Desea Eliminar?')">
                            </form>
                        </td>

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