<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutoController extends Controller
{
    public function index () {

       $produtos = Produto::orderBy('nome', 'ASC')->get();
       return view ('produto.produto_index', ['produtos' => $produtos]);

       // dd($produtos);

       //$produto = Produto::find(3);

       //dd($produto);
        //dd('Primeiro Teste');
    }
}
