@extends('welcome')
@section('content')
<div class="container">
    <div class="row mt-4">
        <div class="col">
            <h2>Nuevo Mensaje</h2>
        </div>
        <div class="col">
            <a href="{{ route("gmail.show",$gmail) }}" class="btn btn-outline-primary float-right mt-1 ">Atras</a>
        </div>
    </div>

    <div class="row mt-2">
        <div class="col">

            <form action="{{ route("gmail.gmaildetails.store",$gmail) }}"
                method="POST"
                enctype="multipart/form-data"
            >
                @csrf
                <div class="form-group">
                    <h3 class="text-center">Ingresar Mensaje</h3>
                    <textarea name="message" class="form-control" rows="6" placeholder="Ingresar Mensaje"></textarea>
                </div>
    
                <input type="submit" class="btn btn-outline-primary btn-lg btn-block" value="Guardar">
            </form>
        </div>
    </div>
</div>
    
@endsection