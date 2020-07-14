@extends('welcome')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center mb-4">
        <div class="col">
            <div class="card shadow text-center">
                <h1>Categorias</h1>
            </div>

        </div>
    </div>
    @foreach ($categories as $gmail)
        <a href="{{ route("gmaildetail",$gmail) }}" class="btn btn-lg btn-block btn-outline-danger">{{$gmail->category}}</a>
    @endforeach
</div>
    
@endsection