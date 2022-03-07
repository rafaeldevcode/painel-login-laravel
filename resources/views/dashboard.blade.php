@extends('layouts/layout')

@section('content')
    <main class="container-fluid position-relative py-5">
        @include('layouts/components/menu-aside')

        <section class="container py-4">
            <h1 class="text-center">Bem vindo! {{ $user->name }}</h1>
        </section>
    </main>

    <script type="text/javascript">
        getFields();
    </script>
@endsection