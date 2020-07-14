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
                
                    @foreach ($gmail->gmaildetails as $detail)
                        
                    <tr>
                        <td>{{$detail->message}}</td>
                        <td><a href="{{ route("gmail.gmaildetails.edit",[
                            "gmail"=>$gmail,
                            "gmaildetail"=>$detail
                        ]) }}" class="btn btn-warning">Editar</a></td>
                        <td>
                            <form action="">
                                @csrf
                                @method("DELETE")
                                <input type="submit" class="btn btn-danger" value="Eliminar">
                            </form>
                        </td>
                    </tr>
                    @endforeach
                    
               
            </table>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <a href=" {{ route("gmail.gmaildetails.create",$gmail) }} "class="btn btn-outline-primary ml-2">Agregar Mensaje</a>
        </div>
    </div>
</div>
    
@endsection