@extends("welcome")
@section('content')
    
<div class="container">

    <div class="row mt-5 mb-3">
            <div class="col">
               <h1>Reports</h1>
            </div>
    </div>
    
    @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
    @endif
    <div class="row">
        <div class="col">
            <a href="{{route("expenseReport.create")}}" class="btn btn-outline-primary mb-5 mt-2">Crear Reporte</a>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <table class="table table-hover">
                @foreach ($expenseReports as $expenseReport)
                    <tr>
                        <td><a href="{{ route("expenseReport.show" ,$expenseReport) }}"> {{$expenseReport->title}} </a></td>
                        <td><a href="{{ route("expenseReport.edit" ,$expenseReport)}}" class="btn btn-warning ml-10"> EDITAR </a></td>
                        <td>
                            <form action="{{ route("expenseReport.destroy",$expenseReport) }}" method="POST">
                                @method("DELETE")
                                @csrf
                                <input type="submit"
                                    value="Eliminar"
                                    class="btn btn-outline-danger mr-10"
                                    onclick="return confirm('Desea eliminar el Articulo')"
                                >
                            </form>
                        </td>

                    </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection