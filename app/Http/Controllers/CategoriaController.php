<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function listar()
    {
        $categorias = Categoria::all();

        return view('categoria.listagem_categoria', compact('categorias'));
    }

    public function novo()
    {
        return view('categoria.formulario_categoria');
    }

    public function salvar(Request $request)
{
    if ($request->id) {
        $categoria = Categoria::find($request->id);
    } else {
        $categoria = new Categoria();
    }

    $categoria->nome = $request->nome;
    $categoria->margem_lucro = $request->margem_lucro;

    $categoria->save();

    return redirect('/categoria/listar');
}

    public function editar($id)
    {
        $categoria = Categoria::find($id);

        return view('categoria.formulario_categoria', compact('categoria'));
    }

    public function excluir($id)
    {
        $categoria = Categoria::find($id);

        $categoria->delete();

        return redirect('/categoria/listar');
    }
}