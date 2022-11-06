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

        </div>



    </main>
@endsection
