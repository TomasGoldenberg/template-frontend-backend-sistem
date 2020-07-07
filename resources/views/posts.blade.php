@extends('layouts.app')
@section("title", "Blog")

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-9">
        <div class="card mb-5">
            <div class="card-header shadow mb-4 text-center" >
                <h3>Busqueda de Posts</h3>
            </div>
            <form action="{{route("posts")}}"
                 method="GET"
            >


            <div class="form-group">
                <label>Titulo</label>
                <input type="text" name="title" class="form-control"value="{{ old('title',$title)}}"  placeholder="Titulo" >
            </div>

            <div class="form-group">
                <label>Contenido</label>
                <input type="text" name="body" class="form-control"value="{{ old('body',$body)}}"  placeholder="Contenido" >
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-outline-primary btn-block">
                    Buscar
                </button>
            </div>
            </form>
        </div>
            @foreach ($posts as $post)
                

            <div class="card mb-4 shadow">
                <div class="card-body">
                    @if($post->image)
                    <img src="{{$post->get_image}}"class="card-img-top img-fluid"style="height: 20rem ;" >
                    @elseif($post->iframe)
                        <div class="embed-responsive embed-responsive-16by9">
                            {!! $post->iframe !!}
                        </div>
                    @endif
                    <h5 class="card-title mt-2">{{$post->title}}</h5>
                    <p class="card-text">
                        {{$post->get_excerpt}} <br>
                        <a href="{{ route('post', $post) }}">Leer Mas</a>
                    </p>

                    <p class="text-muted mb-0"> 
                        <em>
                            &ndash;{{$post->user->name}}
                        </em>
                        &ndash;{{$post->created_at->format("d M Y") }}
                    </p>
                </div>
            </div>


            @endforeach

            {{$posts->links() }}
        </div>
    </div>
</div>
@endsection
