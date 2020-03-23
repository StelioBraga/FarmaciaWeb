<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;
use App\Promocao;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $promocoes =Promocao::all();
        return view('index', compact('promocoes'));

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('produto.form_produto');
    }
    public function promocao()
    {
        return view('produto.form_promocao');
    }

    public function admin()
    {
        $produtos = Produto::all();
        return view('admin', compact('produtos'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $produto = new Produto;
        $produto->foto = $request->get('photo');
        $produto->nome = $request->get('nome');
        $produto->referencia = $request->get('referencia');
        $produto->quantidade = $request->get('quantidade');
        $produto->ano_validade = $request->get('ano_validade');
        $produto->marca = $request->get('marca');
        $produto->descricao = $request->get('descricao');
        $produto->save();

        return "Sucesso";
    }

    public function storePromocao(Request $request)
    {
        $produto = new Promocao;
        $produto->foto = $request->get('photo');
        $produto->descricao = $request->get('descricao');
        $produto->save();

        return "Sucesso";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $produtos = Produto::all();
        return veiw("admin",compact("produtos"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $produtos = Produto::find($id);
        return view("edit",compact('produtos'));
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
        $Produto = Produto::Find($id);
        $produto ->  delete();
        return redirect() ->with("sucesse");
    }


    public function search(Request $request){ 

        $search = $request ->get('nomedoproduto');
        $produtos =Produto::where('nome','$'.'$search'.'$')->get();
        return view('search',compact('produtos'));
    }




    public function adminSearch(Request $request){ 

        $search = $request ->get('nomedoproduto');
        $produtos =Produto::where('nome','$'.'$search'.'$')->get();
        return view('admin',compact('produtos'));
    }
}
