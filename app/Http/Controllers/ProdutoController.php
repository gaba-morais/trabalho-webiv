<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function listar()
    {
        $produtos = Produto::with('categoria')->get();

        return view('produto.listagem_produto', compact('produtos'));
    }

    public function novo()
    {
        $categorias = Categoria::orderBy('nome')->get();

        return view('produto.formulario_produto', compact('categorias'));
    }

    public function salvar(Request $request)
    {
        if ($request->id) {
            $produto = Produto::find($request->id);
        } else {
            $produto = new Produto();
        }

        $produto->qtde_maxima = $request->qtde_maxima;
        $produto->nome = $request->nome;
        $produto->embalagem = $request->embalagem;
        $produto->qtde_estoque = $request->qtde_estoque;
        $produto->id_barra = $request->id_barra;
        $produto->valor_compra = $request->valor_compra;
        $produto->valor_venda = $request->valor_venda;
        $produto->categoria_id = $request->categoria_id;

        $produto->save();

        return redirect('/produto/listar');
    }

    public function editar($id)
    {
        $produto = Produto::find($id);
        $categorias = Categoria::orderBy('nome')->get();

        return view('produto.formulario_produto', compact('produto', 'categorias'));
    }

    public function excluir($id)
    {
        $produto = Produto::find($id);

        $produto->delete();

        return redirect('/produto/listar');
    }
}