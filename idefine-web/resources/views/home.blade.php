@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="col-md-4">
            <img class="rounded-circle" src="img/{{ $image }}" alt="{{ $name }}" width="75">
            <h5>{{ $name }}</h5>
        </div>
        <div class="col-md-5">
            <h4>Start with idea</h4>
            <hr>
            <h5 class="text-center mb-5">People's Idea you might Interest</h5>
            @foreach ($posts as $home)
            <article class="card p-3 mb-3 shadow-sm rounded-pill border-top">
                <h6>
                    <a href="/idea/{{ $home["slug"] }}">{{ $home["title"] }} - {{ $home["author"] }}</a>
                </h6>
                <span>{{ $home["category"] }}</span>
            </article>
            @endforeach
        </div>
        <div class="col-md-3">
            <h4>My Connection</h4>
        </div>
    </div>
@endsection
