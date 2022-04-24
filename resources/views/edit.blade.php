<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD - Laravel</title>
    <link rel="stylesheet" href="{{ asset('lardcrud/asset/css/styled.css') }}">
</head>

<body class="bg-black">
<div class="container mt-3">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('user.index') }}">Home</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('user.create') }}">Cadastrar</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <form action="{{ route('user.update', ['user' => $user->id]) }}" method="post" autocomplete="off" class="text-light">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nome</label>
            <input type="text" class="form-control" name="name" id="exampleFormControlInput1"
                   placeholder="Digite seu nome completo" value="{{ old('name') ?? $user->name }}">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">E-mail</label>
            <input type="email" class="form-control" name="email" id="exampleFormControlInput1"
                   placeholder="Digite seu melhor e-mail" value="{{ old('email') ?? $user->email }}">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Senha</label>
            <input type="password" class="form-control" name="password" id="exampleFormControlInput1"
                   placeholder="Digite sua senha">
        </div>
        <button type="submit" class="btn btn-dark">Cadastrar</button>
    </form>
</div>
</body>
<script src="{{ asset('lardcrud/asset/js/scriipt.js') }}"></script>

</html>
