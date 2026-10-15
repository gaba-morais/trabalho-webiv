<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Fornecedores</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/global.css') }}">
</head>
<body>
    <header>
        <h1>Lista de Fornecedores</h1>
    </header>
    <div class="nav">
        <div class="btn">
            <a href="/">Início <i class="fa-solid fa-house"></i></a>
        </div>
        <hr>
        <div class="btn">
        <a href="/fornecedor/novo">Novo Fornecedor <i class="fa-solid fa-square-plus"></i></a>
        </div>
    </div>

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
                    <td class="botoes">
                        <a class="form-btn" id="btn-edit" href="/fornecedor/editar/{{ $fornecedor->id }}">
                        Editar <i class="fa-solid fa-pen-to-square"></i>
                        </a>

                        |

                        <a class="form-btn" id="btn-delete" href="/fornecedor/excluir/{{ $fornecedor->id }}">
                            Excluir <i class="fa-solid fa-trash-can"></i>
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>