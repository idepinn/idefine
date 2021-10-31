@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="col-md-4">
            <img class="rounded-circle" src="img/{{ $image }}" alt="{{ $name }}" width="75">
            <h5>{{ $name }}</h5>
        </div>
        <div class="col-md-5">
            <h4>Start with idea</h4>

                        <!-- Button trigger modal -->
            <div class="d-grid gap-2 mt-3">
                <button type="button" class="btn card pt-2 pb-2 rounded-pill" style="background-color: rgba(0, 0, 0, 0.1); color:rgba(43, 43, 43, 0.61)" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Type your idea here ...
                </button>
            </div>
            
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Create Your Post</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="">
                              <textarea class="form-control" id="message-text" placeholder="Type your idea here..." rows="5"></textarea>
                            </div>
                          </form>
                    </div>
                    <div class="btn-group m-3">
                        <select class="custom-select form-control" id="inlineFormCustomSelect">
                            <option selected>Choose Category</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="d-grid gap-2 mt-3 m-3">
                        <button type="button" class="btn btn-primary btn-">Post</button>
                    </div>
                </div>
                </div>
            </div>





            <hr>
            <h5 class="text-center mb-5">People's Idea you might Interest</h5>
            @foreach ($posts as $home)
            <article class="card p-3 mb-3 shadow-sm rounded-pill border-top">
                <div class="row">
                    <div class="col">
                        <h6>
                            <a href="/connection/{{ $home["slug"] }}">{{ $home["title"] }} - {{ $home["author"] }}</a>
                        </h6>
                        <span>{{ $home["category"] }}</span>
                    </div>
                    <div class="col">
                        <img src="img/{{ $image }}" class="img-fluid rounded-circle w-25" alt="...">
                    </div>
                </div>
                
            </article>
            @endforeach
        </div>
        <div class="col-md-3">
            <h4>My Connection</h4>
        </div>
    </div>
@endsection
