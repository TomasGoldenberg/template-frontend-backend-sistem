@extends('welcome')
@section('content')
<div class="container">
    <div class="row mt-4">
        <div class="col">
            <h2>Nueva Cuenta</h2>
        </div>
        <div class="col">
            <a href="{{ route("gmail.show",$gmail) }}"class="btn btn-outline-primary float-right">Atras</a>
        </div>
    </div>

    <div class="row mt-2">
        <div class="col">
            <form action="{{ route("gmail.gmailaccounts.store",$gmail) }}"
                method="POST"
                enctype="multipart/form-data"
            >

                @csrf

                <div class="form-group">
                    <input type="text" name="account" class="form-control" placeholder="Ingresar Nueva Cuenta">
                </div>

                <input type="submit" class="btn btn-outline-primary btn-lg btn-block" value="Guardar">
                
            </form>
        </div>
    </div>
</div>
    
@endsection