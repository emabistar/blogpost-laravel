@if (count($errors))
    <div class="form-group mt-3">
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <ul>
                    <li>{{ $error }}</li>
                </ul>
            @endforeach

        </div>

    </div>
@endif
