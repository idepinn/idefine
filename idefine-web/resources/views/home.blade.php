@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="col-md-4">
            <img class="rounded-circle" src="img/{{ $image }}" alt="{{ $name }}" width="75">
            <h5>{{ $name }}</h5>
        </div>
        <div class="col-md-5">
            <h4>Start with idea</h4>
        </div>
        <div class="col-md-3">
            <h4>My Connection</h4>
        </div>
    </div>
@endsection
