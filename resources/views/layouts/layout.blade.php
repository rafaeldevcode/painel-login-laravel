<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <script defer type="text/javascript" src="{{ asset('js/jquery/jquery.js') }}"></script>
    <script defer type="text/javascript" src="{{ asset('js/bootstrap/bootstrap.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/funcoes.js') }}"></script>

    <meta name="author" content="Rafael Vieira - github.com/rafaeldevcode">
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" type="image/png">
    <title>{{ $title }}</title>
</head>
<body>

    @include('layouts/components/header')    

    @yield('content')

    @include('layouts/components/footer')

    <script type="text/javascript" src="https://kit.fontawesome.com/b0387bb217.js" crossorigin="anonymous"></script>
    <script type="text/javascript">
        oppenMenu();
        document.getElementById('year').innerHTML = getYear();
    </script>
</body>
</html>