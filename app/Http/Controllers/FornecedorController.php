<?php

namespace App\Http\Controllers;

use App\Models\Fornecedor;
use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function listar()
    {
        $fornecedores = Fornecedor::all();

        return view('fornecedor.listagem_fornecedor', compact('fornecedores'));
    }

    public function novo()
    {
        return view('fornecedor.formulario_fornecedor');
    }

    public function salvar(Request $request)
    {
        if ($request->id) {
            $fornecedor = Fornecedor::find($request->id);
        } else {
            $fornecedor = new Fornecedor();
        }

        $fornecedor->razao_social = $request->razao_social;
        $fornecedor->nome_fantasia = $request->nome_fantasia;
        $fornecedor->endereco = $request->endereco;
        $fornecedor->fone = $request->fone;
        $fornecedor->email = $request->email;
        $fornecedor->cnpj = $request->cnpj;

        $fornecedor->save();

        return redirect('/fornecedor/listar');
    }

    public function editar($id)
    {
        $fornecedor = Fornecedor::find($id);

        return view('fornecedor.formulario_fornecedor', compact('fornecedor'));
    }

    public function excluir($id)
    {
        $fornecedor = Fornecedor::find($id);

        $fornecedor->delete();

        return redirect('/fornecedor/listar');
    }
}