@extends('layouts.app')
@section("title", "Blog")

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            @foreach ($posts as $post)
                

            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">{{$post->title}}</h5>
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
