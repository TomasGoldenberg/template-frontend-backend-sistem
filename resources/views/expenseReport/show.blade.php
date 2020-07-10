@extends("welcome")
@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <h1> Reporte: {{$report->title}}</h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <h2>Usuario: {{$report->name}}</h2>
        </div>
    </div>
    <div class="row mb-3">

        <div class="col">
            <a href="" class="btn btn-outline-success ">Exportar via E-Mail</a>
        </div>
        
        <div class="col">
            <a href="{{ route("expenseReport.index") }}" class="btn btn-outline-success float-right">Atras</a>
        </div>
    </div>
    @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
    @endif
    <div class="row">
        <div class="col">
            <h3>Detalle</h3>
            <table class="table table-hover mt-2">
                <thead>
                    <tr>
                        <td><h3>Descripcion</h3></td>
                        <td><h3>Fecha</h3></td>
                        <td><h3>Importe</h3></td>
                        <th></th>
                        <th></th>

                    </tr>
                </thead>
                @foreach ($report->expenses as $expense)
             
                <tr>
                    
                    <td>{{$expense->description}}</td>
                    <td>{{$expense->created_at->format("d M Y")}}</td>
                    <td>${{$expense->amount}}</td>
                    <td><a href="{{route("expenseReport.expenses.edit",[
                        "expenseReport"=> $report,
                        "expense"      => $expense->id
                    ])}}" class="btn btn-warning">Editar</a></td>
                    <td>
                        <form action="{{route("expenseReport.expenses.destroy",[
                            "expenseReport"=> $report,
                            "expense"      => $expense->id
                        ])}}" 
                            method="POST">
                            @method("DELETE")
                            @csrf
                            <input type="submit"
                                value="Eliminar"
                                class="btn btn-outline-danger "
                                onclick="return confirm('Desea eliminar el Gasto')"
                            >
                        </form>
                    </td>

                </tr>
                    @endforeach
                    <tr >
                        <td> Total:</td>
                        <th></th>
                        <td>${{$report->expenses->sum('amount')}}</td>
                        <th></th>
                        <th></th>
                    </tr>
            </table>
        </div>
    </div>
    <div class="row">
        <a href="{{route("expenseReport.expenses.create",$report)}}"class="btn btn-success ml-3"> Registrar Gasto</a>
    </div>
</div>
@endsection