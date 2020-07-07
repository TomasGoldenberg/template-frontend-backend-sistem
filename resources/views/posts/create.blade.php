@extends('welcome')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Crear Articulo
                    <a href="{{ route("posts.index") }}" class="btn btn-primary float-right">Atras</a>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="{{route("posts.store")}}"
                        method="POST"
                        enctype="multipart/form-data" 
                    >
                        <div class="form-group">
                            <label>Titulo *</label>
                            <input type="text" name="title" class="form-control" required placeholder="Ingresar Titulo">
                        </div>

                        <div class="form-group">
                            <label>Imagen</label>
                            <input type="file" name="file">
                        </div>
                        
                        <div class="form-group">
                            <label>Contenido *</label>
                            <textarea name="body" rows="6" class="form-control" placeholder="Ingresar Contenido" required></textarea>
                        </div>

                        <div class="form-group">
                            <label>Contenido Embebido</label>
                            <textarea name="iframe" class="form-control" placeholder="Ingresar Contenido"></textarea>
                        </div>

                        <div class="form-group">
                            @csrf
                            <input type="submit" value="Guardar" class="btn btn-outline-primary btn-block">
                            
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
