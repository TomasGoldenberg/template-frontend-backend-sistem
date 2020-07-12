@extends('welcome')
@section('content')
<div class="container">

    <div class="card mt-4">
        <div class="card-header shadow">

            <a href=" {{route("instagram.create")}}"class="btn btn-warning btn-block shadow"> Crear Nueva Categoria </a>
        </div>
        <div class="card-body">

            @if (session('status'))
                <div class="alert alert-success" role="alert">
                   {{ session('status') }}
                 </div>
            @endif
            <table class="table table-hover">

                <tbody>
                    @foreach ($categories as $category)
                        <tr>
                            <td> <a href="{{ route("instagram.show",$category) }}">{{$category->category}}</a></td>
                            <td > &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</td>
                            <td><form action="{{ route("instagram.destroy",$category) }}"
                                method="POST">
                                    @csrf
                                    @method("DELETE")
                                    <input type="submit" class="btn btn-outline-danger float-right" value="Eliminar" onclick="return confirm('Desea Eliminar?')">
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