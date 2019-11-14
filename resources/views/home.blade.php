@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <a class="btn btn-primary" href="/link/create">Create Link</a>
                </div>

                <div class="card-body">
                   @if (count($links) == 0)
                       <div class="alert alert-primary" role="alert">
                           <strong>No links found</strong>
                       </div>
                    @else
                    @foreach ($links as $link)
                        <p>{{ $link->link }}</p>
                    <p>Owned by: {{ count($link->users) }}</p>
                    @endforeach
                   @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
