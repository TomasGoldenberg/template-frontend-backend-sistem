@extends('welcome')
@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="h3 mt-3 shadow mb-3" >Crear Categoria</div>
                <form action="{{ route("instagram.store") }}"
                method="POST"
                enctype="multipart/form-data"
                >
                    @csrf
                    <div class="form-group">
                        <label >Titulo Categoria</label>
                        <input type="text" name="category" id="" class="form-control" required placeholder="Ingresar Categoria">
                    </div>
                    <input type="submit" value="Guardar" class="btn btn-outline-primary btn-block">
                </form>
            </div>

        </div>
    </div>
</div>
    
@endsection