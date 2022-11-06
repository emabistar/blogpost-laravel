@extends('layouts.master')

@section('content')
    <main>
        <div class=" col-md-8 offset-2 mb-3 text-center">

            <div class="col">
                <h2 class="display-6 text-center mb-4">Post</h2>
                <div class="card mb-4 rounded-3 shadow-sm">

                    <div class="card-header py-3">
                        <h4 class="my-0 fw-normal">{{ $post->title }}</h4>
                    </div>

                    <div class="card-body">
                        {{-- <h1 class="card-title pricing-card-title">$0<small class="text-muted fw-light">/mo</small>
                            </h1> --}}
                        <p class="list-unstyled mt-3 mb-4">

                            {{ $post->body }}

                        </p>
                        <button type="button" class="w-100 btn btn-lg btn-outline-primary">
                            {{ $post->created_at->diffForHumans() }} : John Doe
                        </button>
                    </div>
                </div>



            </div>
            <h2 class="text-center"> publish Comment</h2>
            <form method="post" action="/post/{{ $post->id }}/comment">
                @csrf()
                <div class="card mb-4 rounded-3 ">

                    <div class="card-body">
                        <textarea type="text" class="form-control" placeholder="your comment" name="body"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">publish comment
                </div>

            </form>
            @include('layouts.errors')
            <hr>
            <div class="card mb-4 rounded-3">
                <h2 class="text-center"> Comments</h2>
                <ul class="group-list">
                    @foreach ($post->comments as $comment)
                        <li class="group-item-list">

                            {{ $comment->created_at->diffForHumans() }}:{{ $comment->body }}
                        </li>
                    @endforeach

                </ul>
            </div>
        </div>



    </main>
@endsection
