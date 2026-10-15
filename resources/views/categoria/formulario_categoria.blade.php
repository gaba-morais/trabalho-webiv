<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Categoria</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/global.css') }}">
    <link rel="stylesheet" href="{{ asset('css/categoria.css') }}">
</head>
<body>
<header>
    <h1>Cadastro de Categoria</h1>
</header>
    <form action="/categoria/salvar" method="POST">

        @csrf

        @if (isset($categoria))
    <input type="hidden" name="id" value="{{ $categoria->id }}">
@endif
    <div class="form-campo">
        <label for="nome">Nome:</label>
        <input
            type="text"
            id="nome"
            name="nome"
            value="{{ isset($categoria) ? $categoria->nome : '' }}">
    </div>
    <div class="form-campo">
        <label for="margem_lucro">Margem de Lucro:</label>
        <input
            type="number"
            step="0.01"
            id="margem_lucro"
            name="margem_lucro"
            value="{{ isset($categoria) ? $categoria->margem_lucro : '' }}">
    </div>
        <button class="btn-salvar" type="submit">Salvar</button>

    </form>

    <br>

    <a class="btn-voltar" href="/categoria/listar"><i class="fa-solid fa-circle-arrow-left"></i> Voltar para lista</a>

</body>
</html>