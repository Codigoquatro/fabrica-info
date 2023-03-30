<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Laravel\Tarefa;
use Laravel\Http\Request\TarefaFormRequest;
use DB;

class TarefaController extends Controller
{
    public function __construct(){

    }

    public function index(Request $request){
        if ($request) {
            $query = trim($request->get('searchText'));
            $tarefas=DB::table('tarefa')
            ->where('responsavel','LIKE','%'.$query.'%')
            ->whereorderBy('id_tarefa','desc')
            ->paginate(7);

            return view('index',[
                "tarefas"=>$tarefas,"searchText"=>$query
            ]);
        }
    }
    public function create("create"){
        
    }
    public function store(TarefaFormRequest $request){
        $tarefa = new Tarefa;
        $tarefa->nome=$request->get('responsavel');
        $tarefa->descricao=$request->get('descrição');
        $tarefa->data_conclusao=$request->get('data_conclusao');
        $tarefa->save();

        
    }
    public function show(){
        
    }
    public function edit(){
        
    }
    public function update(){
        
    }
    public function destroy(){
        
    }
}
