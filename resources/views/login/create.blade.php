@extends('layouts/layout')

@section('content')
    <main class="container-fluid position-relative py-5">
        @include('layouts/components/menu-aside')

        <section class="container py-4">
            <form action="/login" method="POST" class="col-12 col-md-6 m-auto p-3 shadow-lg rounded border border-formoney">
                @csrf
                
                <div>
                    <div class="text-formoney text-center">
                        <i class="fa-solid fa-user display-3"></i>
                    </div>
                    <h1 class="text-center fs-2">Fazer login</h1>
                </div>

                @include('layouts/components/errors', [$errors])

                <div class="d-flex flex-column mt-3">
                    <label for="email" class="form-label">Email</label>
                    <input required type="email" id="email" name="email" class="form-control">
                    <span class="error p-1"></span>
                </div>

                <div class="d-flex flex-column mt-3">
                    <label for="password" class="form-label">Senha</label>
                    <input required type="password" id="password" name="password" class="form-control">
                    <span class="error p-1"></span>
                </div>

                <div class="mt-3 d-flex justify-content-between alig-items-center">
                    <div class="d-flex flex-column">
                        <span class="text-formoney">
                            <input id="remember" name="remember" type="checkbox">
                            <label for="remember">Lembre-me</label>
                        </span>

                    </div>
                    <button type="submit" title="Fazer Login" class="btn btn-formoney text-white py-2 px-5">
                        Login
                    </button>
                </div>


                <div class="w-100 d-flex justify-content-between mt-3">
                    <a class="text-formoney" title="Se registrar" href="/register">Registrar</a>
                    <a class="text-formoney" title="Esqueci minha senha" href="/forgot-pass">Esqueci minha senha</a>
                </div>
            </form>
        </section>
    </main>

    <script type="text/javascript">
        getFields();
    </script>
@endsection