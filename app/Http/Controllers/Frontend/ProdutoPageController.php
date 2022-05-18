<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Categoria;
use App\Models\CompaniaDetalhes;
use App\Models\Produto;

class ProdutoPageController extends Controller
{
    protected $data;

    public function __construct()
    {
        $this->data = 'Produtos';
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        if (!$request->query('ct')) {
            # code...
            $produtos = Produto::where('produto_status', 1)->paginate(12);
        } else {
            $categoria_id = Categoria::where('url', $request->query('ct'))->first()->id;
            $produtos = Produto::where('produtos_status', 1)
            ->where('categoria_id', $categoria_id)->paginate(12);
        }
        $compania = CompaniaDetalhes::first();
        $categorias = Categoria::where('status', 1)->get();

        return view('frontend.produto_page')->with([
            'categorias' => $categorias,
            'produtos' => $produtos,
            'data' => $this->data,
            'compania' => $compania
        ]);
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
