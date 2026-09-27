<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Categorias</title>
</head>
<body>

    <h1>Lista de Categorias</h1>

    <a href="/">Início</a>
    |
    <a href="/categoria/novo">Nova Categoria</a>

    <br><br>

    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Margem de Lucro</th>
                <th>Ações</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($categorias as $categoria)
                <tr>
                    <td>{{ $categoria->id }}</td>
                    <td>{{ $categoria->nome }}</td>
                    <td>{{ $categoria->margem_lucro }}</td>
                    <td>
                        <a href="/categoria/editar/{{ $categoria->id }}">
                            Editar
                        </a>

                        |

                        <a href="/categoria/excluir/{{ $categoria->id }}">
                            Excluir
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>