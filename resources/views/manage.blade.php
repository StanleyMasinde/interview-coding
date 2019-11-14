@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ $link->link }}</div>
                    <a class="btn btn-primary" href="/own-link/{{ $link->id }}">Own Link</a>
                    <h1>Owners</h1>
                    @foreach ($link->users as $user)
                        <p>{{ $user->name }}</p>
                    @endforeach
                </div>
            </div>
        </div>
</div>
@endsection