@extends('layouts/layout')

@section('content')
    <main class="container-fluid position-relative">
        @include('layouts/components/menu-aside')

        <section class="container py-4">
            <form action="/login" method="POST" class="col-12 col-md-7 m-auto p-2">
                @csrf
                
                <div>
                    <div class="text-formoney text-center">
                        <i class="fa-solid fa-user display-2"></i>
                    </div>
                    <h1 class="text-center">Fazer login</h1>
                </div>

                <div class="d-flex flex-column mt-3">
                    <label for="email" class="form-label">Email</label>
                    <input required type="email" id="email" name="email" class="form-control">
                    <span class="error p-1"></span>
                </div>

                <div class="d-flex flex-column mt-3">
                    <label for="pass" class="form-label">Senha</label>
                    <input required type="password" id="pass" name="pass" class="form-control">
                    <span class="error p-1"></span>
                </div>

                <div class="mt-3 d-flex justify-content-between alig-items-center">
                    <a href="/register">Registrar</a>
                    <button type="submit" title="FAzer Login" class="btn btn-formoney text-white py-2 px-5">
                        Login
                    </button>
                </div>
            </form>
        </section>
    </main>

    <script type="text/javascript">
        getFields();
    </script>
@endsection