@extends('layouts/layout')

@section('content')
    <main class="container-fluid position-relative">
        @include('layouts/components/menu-aside')

        <section class="container py-4">
            <form action="/register" method="POST" class="col-12 col-md-7 m-auto p-2">
                @csrf
                
                <div>
                    <div class="text-formoney text-center">
                        <i class="fa-solid fa-user display-2"></i>
                    </div>
                    <h1 class="text-center">Se registrar</h1>
                </div>

                <div class="d-flex flex-column mt-3">
                    <label for="name" class="form-label">Nome</label>
                    <input required type="text" id="name" name="name" class="form-control">
                    <span class="error p-1"></span>
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
                    <a href="/login">Já tenho uma conta</a>
                    <button type="submit" title="Salvar usuário" class="btn btn-formoney text-white py-2 px-5">
                        Salvar
                    </button>
                </div>
            </form>
        </section>
    </main>

    <script type="text/javascript">
        getFields();
    </script>
@endsection