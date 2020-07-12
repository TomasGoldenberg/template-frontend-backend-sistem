@extends('welcome')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col">

                <h1>Categoria: {{$instagram->category}}</h1>
            </div>
            <div class="col">
                <a href="{{route("instagram")}}" class="btn btn-outline-primary">Atras</a>
            </div>
        </div>
        <div class="row">
            @foreach ($instagram->instadetails as $detail)
               <div class="card mb-5 mt-5">
                   <div class="card-header shadow">
                       Comentarios
                   </div>
                   <div class="card-body">
                     <p>
                         {{$detail->comment}}
                     </p>
                   </div>
               </div>

               <br><br>
               <div class="card mt-5">
                <div class="card-header shadow">
                    Mensajes
                </div>
                <div class="card-body">
                  <p>
                      {{$detail->message}}
                  </p>
                </div>
            </div>
            @endforeach            
        </div>
    </div>
@endsection
