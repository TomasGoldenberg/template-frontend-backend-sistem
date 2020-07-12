@extends('welcome')
@section('content')
<div class="container">
    <div class="row mt-4">
        <div class="col">
             <h1>Editar Informacion</h1>
        </div>
        <div class="col">
            <a href=" {{ route("instagram.show",$instagram) }} " class="btn btn-outline-primary float-right">Atras</a>
        </div>
    </div>

    <div class="row mt-2">
        <div class="col">
            <form action=" {{ route("instagram.instadetails.update",[
                "instagram"=>$instagram,
                "instadetail"=>$instaDetail
            ]) }}"
            method="POST"
            enctype="multipart/form-data">
                @csrf
                @method("PUT")

                <div class="form-group">
                    <label>Comentario</label>
                    <textarea name="comment" rows="6" class="form-control" >{{ old('comment', $instaDetail->comment ) }}</textarea>
                </div>

                <div class="form-group">
                    <label>Mensaje</label>
                    <textarea name="message" rows="6" class="form-control" >{{ old("message", $instaDetail->message ) }}</textarea>
                </div>

                <input type="submit" class="btn btn-outline-primary btn-block" value="Actualizar mensaje">
            </form>
        </div>
    </div>
</div>
    
@endsection