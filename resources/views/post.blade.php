@extends('layouts.app')
@section("title")
<h3>{{$post->title}}</h3>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            
                

            <div class="card mb-4">
                <div class="card-body">
                    @if($post->image)
                    <img src="{{$post->get_image}}"class="card-img-top " >
                @elseif($post->iframe)
                    <div class="embed-responsive embed-responsive-16by9">
                        {!! $post->iframe !!}
                    </div>
                @endif
                    <h5 class="card-title">Post Number: {{$post->id}}</h5>
                    <p class="card-text">
                        {{$post->body}} <br>
                       
                    </p>

                    <p class="text-muted mb-0"> 
                        <em>
                            &ndash;{{$post->user->name}}
                        </em>
                        &ndash;{{$post->created_at->format("d M Y") }}
                    </p>
                </div>
            </div>


           

        </div>
    </div>
</div>
@endsection
