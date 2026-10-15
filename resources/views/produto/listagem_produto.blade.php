<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Produtos</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/global.css') }}">
</head>
<body>
<header>
        <h1>Lista de Produtos</h1>
    </header>
    <div class="nav">
        <div class="btn">
            <a href="/">Início <i class="fa-solid fa-house"></i></a>
        </div>
        <hr>
        <div class="btn">
            <a href="/produto/novo">Novo Produto <i class="fa-solid fa-square-plus"></i></a>
        </div>
    </div>

    <br><br>

    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Embalagem</th>
                <th>Quantidade Máxima</th>
                <th>Estoque</th>
                <th>Código de Barra</th>
                <th>Valor de Compra</th>
                <th>Valor de Venda</th>
                <th>Categoria</th>
                <th>Ações</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($produtos as $produto)
                <tr>
                    <td>{{ $produto->id }}</td>
                    <td>{{ $produto->nome }}</td>
                    <td>{{ $produto->embalagem }}</td>
                    <td>{{ $produto->qtde_maxima }}</td>
                    <td>{{ $produto->qtde_estoque }}</td>
                    <td>{{ $produto->id_barra }}</td>
                    <td>{{ $produto->valor_compra }}</td>
                    <td>{{ $produto->valor_venda }}</td>
                    <td>{{ $produto->categoria->nome }}</td>
                    <td class="botoes">
                        <a class="form-btn" id="btn-edit" href="/produto/editar/{{ $produto->id }}">
                            Editar <i class="fa-solid fa-pen-to-square"></i>
                        </a>

                        |

                        <a class="form-btn" id="btn-delete" href="/produto/excluir/{{ $produto->id }}">
                            Excluir <i class="fa-solid fa-trash-can"></i>
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>