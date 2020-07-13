@extends('welcome')
@section('content')
<div class="container">

    <div class="card mt-4">
        <div class="card-header shadow">
            <a href=" {{ route("gmail.create") }} " class="btn btn-lg btn-block btn-warning">Crear Nueva Categoria</a>
        </div>
        <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                   {{ session('status') }}
                 </div>
            @endif
            
            <table class="table">
                <tbody>

                    @foreach ($categories as $gmail)
                        <tr>
                            <td><a href="">{{$gmail->category}} </a></td>
                            <td > &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</td>
                            <td><form action="" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method("DELETE")
                                    <input type="submit" class="btn btn-danger float-right"value="Eliminar" onclick="return confirm('Desea Eliminar?')">
                                </form>
                            </td>
                        </tr>
                        
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>

</div>
    
@endsection