@extends("welcome")
@section('content')
<div class="container">
    <div class="row mt-4 mb-2">
        <div class="col">
            <h3>Editar reporte: {{$report->title }}</h3>
        </div>
        <div class="col">
            <a href="{{route("expenseReport.index")}}" class="btn btn-outline-primary float-right"> Atras</a>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col">
            <form action="{{ route("expenseReport.update",$report) }}"
            method="POST"
            enctype="multipart/form-data"
            >
                @csrf
                @method("PUT")
                <div class="form-group">
                    <h3 class="text-center">Titulo</h3>
                    <input type="text" name="title" class="form-control" id="title" placeholder="Titulo" value="{{ old("title",$report->title) }}">
                </div>
                <div class="form-group">
                    <h3 class="text-center">Nombre</h3>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Ingresar Nombre" value="{{ old("name",$report->name) }}">
                </div>
                <input type="submit" class="btn btn-outline-primary btn-block" value="Actualizar" >
            </form>
        </div>
    </div>

</div>
    
@endsection