@extends('welcome')
@section('content')
    <div class="container">
        <div class="row mt-2">
            <div class="col">

                <h2>Categoria: {{$instagram->category}}</h2>
            </div>
            <div class="col">
                <a href="{{route("instagram")}}" class="float-right btn btn-outline-primary">Atras</a>
            </div>
        </div>
        <div class="row">
            @foreach ($instagram->instadetails as $detail)
               <div class="card mb-5 mt-5">
                   <div class="card-header shadow">
                       Comentario
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
                    Mensaje
                </div>
                <div class="card-body">
                  <p>
                      {{$detail->message}}
                  </p>
                </div>

                
            </div>
            @endforeach  
<br><br><br><br>

    <div class="row ml-1 mt-5">
        <div class="col">
            
            <h1>
                Cuentas

            </h1>
                
                    @foreach ($instagram->instaaccounts as $account)
                   <p>
                      {{$account->account}}
                    </p>
                    @endforeach
                
            
           
            </div>
        </div>
    </div>
    </div>
@endsection
