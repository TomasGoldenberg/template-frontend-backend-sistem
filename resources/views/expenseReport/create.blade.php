@extends("welcome")
@section('content')

<div class="container">
    <div class="row mt-5 mb-3">
        <div class="col">
            <h1>Nuevo Reporte</h1>
        </div>
        <div class="col">
            <a href="{{route("expenseReport.index")}}" class="btn btn-outline-primary float-right"> Atras</a>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <div class="card">
               
                
                    @if ($errors->any())
                        <div class="alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>
                                        {{$error}} 
                                    </li> <br>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                
                    <form action="{{route("expenseReport.store")}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <h3 class="text-center">Titulo</h3>
                            <input type="text" name="title" class="form-control" id="title" placeholder="Ingresar Titulo" >
                        </div>
                        <input type="submit" class="btn btn-outline-primary btn-block" value="Crear">
                    </form>
            </div>
        </div>
    </div>
</div>

@endsection