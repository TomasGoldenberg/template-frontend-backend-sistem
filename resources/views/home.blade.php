@extends('welcome')

@section('content')
<div class="container-fluid mt-3">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="card mb-3">
                        <a class="btn btn-primary btn-lg btn-block" href="{{route("instagram")}}">Instagram</a>
                    </div>

                    <div class="card mb-3">
                        <a class="btn btn-danger btn-lg btn-block" href="">Email</a>
                    </div>

                    <div class="card mb-3">
                        <a class="btn btn-warning btn-lg btn-block" href="{{route("expenseReport.index")}}">Reports</a>
                    </div>

                    <div class="card mb-3">
                        <a class="btn btn-success btn-lg btn-block" href="{{route("posts")}}">Blog</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
