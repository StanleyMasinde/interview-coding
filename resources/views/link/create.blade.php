@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    @if (session('success'))
                    <div class="alert alert-success" role="alert">
                        <strong>{{ session('success') }}</strong>
                    </div>
                    @endif
                    <form action="/link" method="post">
                        @csrf
                        <div class="form-group">
                          <label for="">Enter your Link</label>
                          <input type="url" name="link" id="" class="form-control" placeholder="www.example.com">
                          <button type="submit" class="btn btn-primary">Create Link</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection