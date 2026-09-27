<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Categoria</title>
</head>
<body>

    <h1>Cadastro de Categoria</h1>

    <form action="/categoria/salvar" method="POST">

        @csrf

        @if (isset($categoria))
    <input type="hidden" name="id" value="{{ $categoria->id }}">
@endif

        <label for="nome">Nome:</label>
        <input
            type="text"
            id="nome"
            name="nome"
            value="{{ isset($categoria) ? $categoria->nome : '' }}"
        >

        <br><br>

        <label for="margem_lucro">Margem de Lucro:</label>
        <input
            type="number"
            step="0.01"
            id="margem_lucro"
            name="margem_lucro"
            value="{{ isset($categoria) ? $categoria->margem_lucro : '' }}"
        >

        <br><br>

        <button type="submit">Salvar</button>

    </form>

    <br>

    <a href="/categoria/listar">Voltar para lista</a>

</body>
</html>