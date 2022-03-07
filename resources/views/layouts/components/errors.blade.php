@if (isset($errors))
    @foreach ($errors->all() as $error)
        <div class="alert alert-danger p-1 text-center">
            {{ $error }}
        </div>
    @endforeach
@endif