<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Fornecedor</title>
</head>
<body>

    <h1>Cadastro de Fornecedor</h1>

    <form action="/fornecedor/salvar" method="POST">

        @csrf

        @if (isset($fornecedor))
            <input type="hidden" name="id" value="{{ $fornecedor->id }}">
        @endif

        <label for="razao_social">Razão Social:</label>
        <input
            type="text"
            id="razao_social"
            name="razao_social"
            value="{{ isset($fornecedor) ? $fornecedor->razao_social : '' }}"
        >

        <br><br>

        <label for="nome_fantasia">Nome Fantasia:</label>
        <input
            type="text"
            id="nome_fantasia"
            name="nome_fantasia"
            value="{{ isset($fornecedor) ? $fornecedor->nome_fantasia : '' }}"
        >

        <br><br>

        <label for="endereco">Endereço:</label>
        <input
            type="text"
            id="endereco"
            name="endereco"
            value="{{ isset($fornecedor) ? $fornecedor->endereco : '' }}"
        >

        <br><br>

        <label for="fone">Fone:</label>
        <input
            type="text"
            id="fone"
            name="fone"
            value="{{ isset($fornecedor) ? $fornecedor->fone : '' }}"
        >

        <br><br>

        <label for="email">Email:</label>
        <input
            type="email"
            id="email"
            name="email"
            value="{{ isset($fornecedor) ? $fornecedor->email : '' }}"
        >

        <br><br>

        <label for="cnpj">CNPJ:</label>
        <input
            type="text"
            id="cnpj"
            name="cnpj"
            value="{{ isset($fornecedor) ? $fornecedor->cnpj : '' }}"
        >

        <br><br>

        <button type="submit">Salvar</button>

    </form>

    <br>

    <a href="/fornecedor/listar">Voltar para lista</a>

</body>
</html>