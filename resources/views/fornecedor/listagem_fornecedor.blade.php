<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Fornecedores</title>
</head>
<body>

    <h1>Lista de Fornecedores</h1>

    <a href="/fornecedor/novo">Novo Fornecedor</a>

    <br><br>

    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Razão Social</th>
                <th>Nome Fantasia</th>
                <th>Endereço</th>
                <th>Fone</th>
                <th>Email</th>
                <th>CNPJ</th>
                <th>Ações</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($fornecedores as $fornecedor)
                <tr>
                    <td>{{ $fornecedor->id }}</td>
                    <td>{{ $fornecedor->razao_social }}</td>
                    <td>{{ $fornecedor->nome_fantasia }}</td>
                    <td>{{ $fornecedor->endereco }}</td>
                    <td>{{ $fornecedor->fone }}</td>
                    <td>{{ $fornecedor->email }}</td>
                    <td>{{ $fornecedor->cnpj }}</td>
                    <td>
                        <a href="/fornecedor/editar/{{ $fornecedor->id }}">
                            Editar
                        </a>

                        |

                        <a href="/fornecedor/excluir/{{ $fornecedor->id }}">
                            Excluir
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>