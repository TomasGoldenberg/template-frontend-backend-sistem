@extends('welcome')
@section('content')
<div class="container">
    <div class="row mt-4">
        <div class="col">
            <h2>Categoria: {{$gmail->category}}</h2>
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
                            "gmail"      =>$gmail,
                            "gmaildetail"=>$detail
                        ]) }}" class="btn btn-warning mt-5">Editar</a></td>
                        <td>
                            <form action="{{ route("gmail.gmaildetails.destroy",[
                                "gmail"      => $gmail,
                                "gmaildetail"=> $detail
                            ]) }}"
                            method="POST">
                                @csrf
                                @method("DELETE")
                                <input type="submit" class="btn btn-danger mt-5" value="Eliminar" onclick="return confirm('Desea Eliminar?')"> 
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
        <div class="col">
            <a href=" {{ route("gmail.gmailaccounts.create",$gmail) }} " class="btn btn-outline-primary float-right">Agregar Cuentas</a>
        </div>
    </div>
</div>
    
@endsection