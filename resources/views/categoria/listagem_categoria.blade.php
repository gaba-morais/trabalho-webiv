<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Categorias</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/global.css') }}">
</head>
<body>
    <header>
        <h1>Lista de Categorias</h1>
    </header>
    <div class="nav">
        <div class="btn">
            <a href="/">Início <i class="fa-solid fa-house"></i></a>
        </div>
        <hr>
        <div class="btn">
        <a href="/categoria/novo">Nova Categoria <i class="fa-solid fa-square-plus"></i></a>
        </div>
    </div>
    <br><br>
  <div class="table-container">
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
                    <td class="botoes">
                        <a class="form-btn" id="btn-edit" href="/categoria/editar/{{ $categoria->id }}">
                            Editar <i class="fa-solid fa-pen-to-square "></i> 
                        </a>
                        
                        |

                        <a class="form-btn" id="btn-delete" href="/categoria/excluir/{{ $categoria->id }}">
                            Excluir <i class="fa-solid fa-trash-can"></i>
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
  </div>
</body>
</html>