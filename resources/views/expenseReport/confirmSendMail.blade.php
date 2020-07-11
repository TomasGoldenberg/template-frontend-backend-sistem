@extends('welcome')
@section('content')
<div class="container">
    <div class="row mt-3">
        <div class="col">
            <h1>Exportar Reporte via E-Mail</h1>
        </div>
        <div class="col">
            <a  class="btn btn-outline-primary float-right"href="{{ route('expenseReport.show',$expenseReport) }}">Atras</a>
        </div>
    </div>
    <div class="row mt-3 ml-1">
        <h3>Reporte: {{$expenseReport->title}}</h3>
    </div>
    <div class="row mt-1 ml-1">
        <h3>Usuario: {{$expenseReport->name}}</h3>
    </div>

    <div class="row">
        <div class="col">
            @if($errors->any())
                <div class="alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route("expenseReport.sendMail",$expenseReport) }}"
            method="POST"
            enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <h5 class="text-center">Ingresar E-mail</h5>
                    <input type="text" name="email" class="form-control" placeholder="example@example.com">

                </div>
                <input type="submit" class="btn btn-outline-success btn-block" value="Enviar E-Mail">
            </form>
        </div>
    </div>
</div>
@endsection