<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\CompaniaDetalhes;
use App\Models\Produto;
use App\Models\ProdutoComVariante;

class ExibirProdutoController extends Controller
{
    public function exibirProduto($categoria, $produto)
    {
        $prod = Produto::where('produto_status', 1)
        ->where('produto_url', $produto)
        ->with('produtoSemVariante.inventario', 'produtoComVariantes')
        ->first();

        $variante = ProdutoComVariante::where('variante_status', 1)
        ->where('product_number', $prod->number)
        ->with('inventario')
        ->first();

        $produto_variantes = ProdutoComVariante::where('product_number', $prod->number)
        ->orderBy('inventory_number')
        ->with('inventario')
        ->get();

        return view('frontend.exibir_produto')->with([
            'prod' => $prod,
            'data' => 'Exibir Produto',
            'variante' => $variante,
            'produto_variantes' => $produto_variantes,
            'compania' => CompaniaDetalhes::first()
        ]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
