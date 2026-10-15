<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Fornecedor</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/global.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fornecedor.css') }}">
</head>
<body>
    <header>
    <h1>Cadastro de Fornecedor</h1>
    </header>
    <form action="/fornecedor/salvar" method="POST">

        @csrf

        @if (isset($fornecedor))
            <input type="hidden" name="id" value="{{ $fornecedor->id }}">
        @endif
        <div class="form-campo">
        <label for="razao_social">Razão Social:</label>
        <input
            type="text"
            id="razao_social"
            name="razao_social"
            value="{{ isset($fornecedor) ? $fornecedor->razao_social : '' }}"
        >
        </div>
        <div class="form-campo">
        <label for="nome_fantasia">Nome Fantasia:</label>
        <input
            type="text"
            id="nome_fantasia"
            name="nome_fantasia"
            value="{{ isset($fornecedor) ? $fornecedor->nome_fantasia : '' }}"
        >
        </div>
        <div class="form-campo">
        <label for="endereco">Endereço:</label>
        <input
            type="text"
            id="endereco"
            name="endereco"
            value="{{ isset($fornecedor) ? $fornecedor->endereco : '' }}"
        >
        </div>
        <div class="form-campo">
        <label for="fone">Fone:</label>
        <input
            type="text"
            id="fone"
            name="fone"
            value="{{ isset($fornecedor) ? $fornecedor->fone : '' }}"
        >
        </div>
        <div class="form-campo">
        <label for="email">Email:</label>
        <input
            type="email"
            id="email"
            name="email"
            value="{{ isset($fornecedor) ? $fornecedor->email : '' }}"
        >
        </div>
        <div class="form-campo">
        <label for="cnpj">CNPJ:</label>
        <input
            type="text"
            id="cnpj"
            name="cnpj"
            value="{{ isset($fornecedor) ? $fornecedor->cnpj : '' }}"
        >
        </div>

        <button class="btn-salvar" type="submit">Salvar</button>

    </form>

    <br>

    <a class="btn-voltar" href="/fornecedor/listar"><i class="fa-solid fa-circle-arrow-left"></i> Voltar para lista</a>

</body>
</html>