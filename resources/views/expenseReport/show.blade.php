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
            <a href="{{ route("expenseReport.index") }}" class="btn btn-outline-primary float-right">Atras</a>
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
            <table class="table table-hover">
                @foreach ($report->expenses as $expense)
                <tr>
                    <td>{{$expense->description}}</td>
                    <td>{{$expense->amount}}</td>
                    <td>{{$expense->created_at->format("d M Y")}}</td>

                </tr>
                    @endforeach
                    <tr>
                        <td> Total:</td>
                        <td>{{$report->expenses->sum('amount')}}</td>
                        <th></th>
                    </tr>
            </table>
        </div>
    </div>
    <div class="row">
        <a href="{{route("expenseReport.expenses.create",$report->id)}}"class="btn btn-success ml-3"> New Expense</a>
    </div>
</div>
@endsection