@extends('welcome')
@section('content')
<div class="container">
    <div class="row mt-4">
        <div class="col">
            <h2>Nuevo Ingreso</h2>
        </div>
        <div class="col">
            <a href=" {{ route("instagram.show",$instagram) }}" class="btn btn-outline-primary float-right mt-1">Atras</a>
        </div>
    </div>

    <div class="row mt-2">
        <div class="col">
            @if($errors->any())
                <div class="alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action=" {{ route("instagram.instaaccounts.store",$instagram) }} "
                method="POST"
                enctype="multipart/form-data">
                @csrf

               

                <div class="form-group">
                    <input type="text" class="form-control" name="account" placeholder="Ingresar Nueva Cuenta">
                </div>

                <input type="submit" class="btn btn-outline-primary btn-block" value="Guardar">
            </form>
        </div>
    </div>
</div>
    
@endsection