<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Produtos</title>
</head>
<body>

    <h1>Lista de Produtos</h1>

    <a href="/produto/novo">Novo Produto</a>

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
                <th>Categoria ID</th>
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
                    <td>{{ $produto->categoria_id }}</td>
                    <td>
                        <a href="/produto/editar/{{ $produto->id }}">
                            Editar
                        </a>

                        |

                        <a href="/produto/excluir/{{ $produto->id }}">
                            Excluir
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>