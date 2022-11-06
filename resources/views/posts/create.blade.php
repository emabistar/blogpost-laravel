@extends('layouts.master')

@section('content')
    <main>
        <div class=" col-md-6 offset-3  text-center">

            <h2 class="display-6 text-center ">Post</h2>
            <div class="card  rounded-3 shadow-sm">
                <form method="POST" action="store">
                    @csrf()
                    <div class="form-group p-3">
                        <label for="title" id="title" class="control-label">Title</label>
                        <input type="text" name="title" class="form-control " />
                    </div>
                    <div class="form-group p-3">
                        <label for="body" id="body" class="label-control ">body</label>
                        <textarea type="textarea" style="height: 100px" name="body" class="form-control ">
                        </textarea>
                    </div>
                    <div class="form-group m-3">
                        <button class="btn btn-primary"type="submit">Publish post

                    </div>
                </form>
            </div>
            @include('layouts.errors')
        </div>



    </main>
@endsection
