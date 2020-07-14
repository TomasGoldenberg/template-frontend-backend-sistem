@extends('welcome')
@section('content')
    <div class="container">
        <div class="row mt-2">
            <div class="col">
                <h2>Categoria: {{$gmail->category}}</h2>
            </div>
            <div class="col">
                <a href=" {{route("gmail")}} " class="float-right btn btn-outline-primary">Atras</a>
            </div>
        </div>

        <div class="row">
            @foreach ($gmail->gmaildetails as $detail)
                <div class="card mb-5 mt-5">
                    <div class="card-header shadow">
                        <h3>E-Mail</h3>
                    </div>
                    <div class="card-body">
                        <p>
                            {{$detail->message}}
                        </p>
                    </div>
                </div>
            @endforeach
            <br><br><br><br>
        </div>

        <div class="row ml-1 mt-5">
            <div class="col">
                <h2>Cuentas</h2>

                @foreach ($gmail->gmailaccounts as $gmail)
                    <p>
                        {{$gmail->account}}
                    </p>
                @endforeach
            </div>
        </div>
    </div>
@endsection