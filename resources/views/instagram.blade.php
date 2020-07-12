@extends('welcome')
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col">
                <div class="card shadow text-center"><h1>Categorias</h1></div>
            </div>
        </div>
        @foreach ($categories as $category)
            <a href="{{route("instadetail",$category)}}" class="mt-3 btn btn-block btn-lg btn-outline-success">{{$category->category}}</a> <br>
        @endforeach
    </div>
@endsection