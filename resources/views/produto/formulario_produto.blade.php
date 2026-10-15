<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produto</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/global.css') }}">
    <link rel="stylesheet" href="{{ asset('css/produto.css') }}">
</head>
<body>
    <header>
    <h1>Cadastro de Produto</h1>
    </header>
    <form action="/produto/salvar" method="POST">

        @csrf

        @if (isset($produto))
            <input type="hidden" name="id" value="{{ $produto->id }}">
        @endif
        <div class="form-campo">
        <label for="nome">Nome:</label>
        <input
            type="text"
            id="nome"
            name="nome"
            value="{{ isset($produto) ? $produto->nome : '' }}"
        >
        </div>
        <div class="form-campo">
        <label for="embalagem">Embalagem:</label>
        <input
            type="text"
            id="embalagem"
            name="embalagem"
            value="{{ isset($produto) ? $produto->embalagem : '' }}"
        >
        </div>
        <div class="form-campo">
        <label for="qtde_maxima">Quantidade Máxima:</label>
        <input
            type="number"
            id="qtde_maxima"
            name="qtde_maxima"
            value="{{ isset($produto) ? $produto->qtde_maxima : '' }}"
        >
        </div>
        <div class="form-campo">
        <label for="qtde_estoque">Quantidade em Estoque:</label>
        <input
            type="number"
            id="qtde_estoque"
            name="qtde_estoque"
            value="{{ isset($produto) ? $produto->qtde_estoque : '' }}"
        >
        </div>
        <div class="form-campo">
        <label for="id_barra">Código de Barra:</label>
        <input
            type="text"
            id="id_barra"
            name="id_barra"
            value="{{ isset($produto) ? $produto->id_barra : '' }}"
        >
        </div>
        <div class="form-campo">
        <label for="valor_compra">Valor de Compra:</label>
        <input
            type="number"
            step="0.01"
            id="valor_compra"
            name="valor_compra"
            value="{{ isset($produto) ? $produto->valor_compra : '' }}"
        >
        </div>
        <div class="form-campo">
        <label for="valor_venda">Valor de Venda:</label>
        <input
            type="number"
            step="0.01"
            id="valor_venda"
            name="valor_venda"
            value="{{ isset($produto) ? $produto->valor_venda : '' }}"
        >
          </div>
        <div class="form-campo">
        <label for="categoria_id">Categoria:</label>
        <select id="categoria_id" name="categoria_id">
            @foreach ($categorias as $categoria)
                <option
                    value="{{ $categoria->id }}"
                    {{ isset($produto) && $produto->categoria_id == $categoria->id ? 'selected' : '' }}
                >
                    {{ $categoria->nome }}
                </option>
            @endforeach
        </select>
        </div>

        <button class="btn-salvar" type="submit">Salvar</button>

    </form>

    <br>

    <a class="btn-voltar" href="/produto/listar"><i class="fa-solid fa-circle-arrow-left"></i> Voltar para lista</a>

</body>
</html>