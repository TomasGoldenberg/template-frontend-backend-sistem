@extends('welcome')
@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="h3 mt-3 shadow mb-3 text-center" ><h1>Crear Categoria</h1></div>
                <form action="{{ route("gmail.store") }}"
                method="POST"
                enctype="multipart/form-data"
                >
                    @csrf
                    <div class="form-group">
                       <h3 class="text-center">Ingresar Nueva Categoria</h3>
                        <input type="text" name="category" id="" class="form-control" required placeholder="Ingresar Categoria">
                    </div>
                    <input type="submit" value="Guardar" class="btn btn-outline-primary btn-block">
                </form>
            </div>

        </div>
    </div>
</div>
    
@endsection