<div class="row">
    <div class="col">
        <h1>Reporte: {{$expenseReport->title}}</h1>   
    </div>
</div>
<div class="row mt-2">
    <div class="col">
        <h2>Usuario: {{$expenseReport->name}}</h2>
    </div>
</div>

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
            @foreach ($expenseReport->expenses as $expense)
         
            <tr>
                
                <td>{{$expense->description}}</td>
                <td>{{$expense->created_at->format("d M Y")}}     |</td>
                <td>${{$expense->amount}}</td>

            </tr>
                @endforeach
                <tr >
                    <td> Total:</td>
                    <th></th>
                    <td>${{$expenseReport->expenses->sum('amount')}}</td>
                    <th></th>
                    <th></th>
                </tr>
        </table>
    </div>
</div>