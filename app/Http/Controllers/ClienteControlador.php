<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClienteControlador extends Controller
{

    private $clientes = [
        ['nome'=>'nelcione', 'id'=>1],
        ['nome'=>'maria', 'id'=>2],
        ['nome'=>'Paula', 'id'=>3],
        ['nome'=>'João', 'id'=>4]
    ];

    public function __construct() {
        $clientes = session('clientes');
        if( !isset($clientes)) {
            session(['clientes' => $this->clientes]);
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $clientes = session('clientes');
        $titulo = "Todos os Clientes";
        
        //Formas de retornar views com parametros

        // return view('clientes.index', ['clientes' => $clientes, 'titulo' => $titulo]);//Semelhante ao compact
        
        return view('clientes.index', compact(['clientes', 'titulo'])); //passando as informações para a view.
        
        /*
            return view('clientes.index')
                    ->with('clientes', $clientes)
                    ->with('titulo',$titulo);
        */
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clientes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $clientes = session('clientes');
        if(!$clientes){//se não tiver cliente coloca o id em 1
            $id = 1;
        }else{   
            $id = end($clientes)['id'] + 1;//end: pega o ultimo elemento
        }
        $nome = $request->nome;
        $dados = ["id"=>$id, "nome"=>$nome];
        $clientes[] = $dados;
        session(['clientes' => $clientes]);//grava na sessão

        return redirect()->route('clientes.index'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $clientes = session('clientes');//recupera todos os clientes
        $index = $this->getIndex($id, $clientes);
        $cliente = $clientes[$index];
        return view('clientes.info', compact(['cliente']));
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $clientes = session('clientes');//recupera todos os clientes
        $index = $this->getIndex($id, $clientes);
        $cliente = $clientes[$index];
        return view('clientes.edit', compact(['cliente']));
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
        $clientes = session('clientes');
        $index = $this->getIndex($id, $clientes);
        $clientes[$index]['nome'] = $request->nome;
        session(['clientes' => $clientes]);
        return redirect()->route('clientes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $clientes = session('clientes');
        $index = $this->getIndex($id, $clientes);
        array_splice($clientes, $index, 1);//apaga em clientes um unico elemento com id que deseja deletar
        session(['clientes'=>$clientes]);
        return redirect()->route('clientes.index');
    }

    public function getIndex($id, $clientes) {
        $ids = array_column($clientes, 'id');//pega todos id de clientes
        $index = array_search($id, $ids); //procura a posição em que está o id que sera deletado
        return $index;
    }
}
