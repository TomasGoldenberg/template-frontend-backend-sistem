@extends("welcome")
@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <h1> Reporte: {{$report->title}}</h1>
        </div>

    </div>
    <div class="row mb-3">

        <div class="col">
            <a href="" class="btn btn-outline-success ">Exportar via E-Mail</a>
        </div>
        
        <div class="col">
            <a href="{{ route("expenseReport.index") }}" class="btn btn-outline-primary float-right">Atras</a>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <h3>Detalle</h3>
            <table class="table table-hover">
                <tr>
                    <td>aca va description</td>
                    <td>aca va precio</td>
                    <td>aca va cuando se hizo</td>

                </tr>
            </table>
        </div>
    </div>
    <div class="row">
        <a href=""class="btn btn-success ml-3"> New Expense</a>
    </div>
</div>
@endsection