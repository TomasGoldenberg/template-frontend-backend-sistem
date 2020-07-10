@extends("welcome")
@section('content')
<div class="container">
    <div class="row mt-4">
        <div class="col">
            <h1>Nuevo Gasto</h1>
        </div>
        <div class="col">
            <a  class="btn btn-outline-primary float-right"href="{{ route('expenseReport.show',$expenseReport) }}">Back</a>
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
            <form action="{{route("expenseReport.expenses.store",$expenseReport->id)}}"
            method="POST"
            enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label class="text-center" >Descripcion</label>
                    <input type="text" required name="description" class="form-control" placeholder="Insertar Descripcion" value="{{ old("description") }}">
                </div>

                <div class="form-group">
                    <label class="text-center">Precio</label>
                    <input type="text" required name="amount" class="form-control" placeholder="Insertar Precio" value="{{ old("amount") }}">
                </div>

                <input type="submit" class="btn btn-outline-success btn-block" value="Agregar Gasto">
            </form>
        </div>
    </div>

</div>
@endsection