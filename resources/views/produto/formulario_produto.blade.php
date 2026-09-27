<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produto</title>
</head>
<body>

    <h1>Cadastro de Produto</h1>

    <form action="/produto/salvar" method="POST">

        @csrf

        @if (isset($produto))
            <input type="hidden" name="id" value="{{ $produto->id }}">
        @endif

        <label for="nome">Nome:</label>
        <input
            type="text"
            id="nome"
            name="nome"
            value="{{ isset($produto) ? $produto->nome : '' }}"
        >

        <br><br>

        <label for="embalagem">Embalagem:</label>
        <input
            type="text"
            id="embalagem"
            name="embalagem"
            value="{{ isset($produto) ? $produto->embalagem : '' }}"
        >

        <br><br>

        <label for="qtde_maxima">Quantidade Máxima:</label>
        <input
            type="number"
            id="qtde_maxima"
            name="qtde_maxima"
            value="{{ isset($produto) ? $produto->qtde_maxima : '' }}"
        >

        <br><br>

        <label for="qtde_estoque">Quantidade em Estoque:</label>
        <input
            type="number"
            id="qtde_estoque"
            name="qtde_estoque"
            value="{{ isset($produto) ? $produto->qtde_estoque : '' }}"
        >

        <br><br>

        <label for="id_barra">Código de Barra:</label>
        <input
            type="text"
            id="id_barra"
            name="id_barra"
            value="{{ isset($produto) ? $produto->id_barra : '' }}"
        >

        <br><br>

        <label for="valor_compra">Valor de Compra:</label>
        <input
            type="number"
            step="0.01"
            id="valor_compra"
            name="valor_compra"
            value="{{ isset($produto) ? $produto->valor_compra : '' }}"
        >

        <br><br>

        <label for="valor_venda">Valor de Venda:</label>
        <input
            type="number"
            step="0.01"
            id="valor_venda"
            name="valor_venda"
            value="{{ isset($produto) ? $produto->valor_venda : '' }}"
        >

        <br><br>

        <label for="categoria_id">Categoria ID:</label>
        <input
            type="number"
            id="categoria_id"
            name="categoria_id"
            value="{{ isset($produto) ? $produto->categoria_id : '' }}"
        >

        <br><br>

        <button type="submit">Salvar</button>

    </form>

    <br>

    <a href="/produto/listar">Voltar para lista</a>

</body>
</html>