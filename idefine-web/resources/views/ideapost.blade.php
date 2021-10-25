@extends('layouts.main')

@section('content')
    <article>
        <h5>{{ $post["title"] }}</h5>
        <h6>{{ $post["author"] }}</h6>
        <span>{{ $post["category"] }}</span>
        <br/>
        </br>
        <p>{{ $post["article"] }}</p>
    </article>
@endsection
