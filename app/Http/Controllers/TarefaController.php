<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Tarefa;
use App\Http\Requests\TarefaFormRequest;

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
            ->whereorderBy('id_tarefa','desc');
           // ->paginate(7);

            return view('index',[
                "tarefas"=>$tarefas,"searchText"=>$query
            ]);
        }
    }
    public function create(){
        return view('create');
    }

    public function store(TarefaFormRequest $request){
        $tarefa = new Tarefa;
        $tarefa->nome=$request->get('responsavel');
        $tarefa->descricao=$request->get('descrição');
        $tarefa->data_conclusao=$request->get('data_conclusao');
        $tarefa->save();

        return Redirect::to('store');
    }

    public function show($id){
        return view("show",[
          "tarefa"=>Tarefa::findOrFail($id)
        ]);
    }

    public function edit($id){
        return view("show",[
            "tarefa"=>Tarefa::findOrFail($id)
          ]);
    }

    public function update(TarefaFormRequest $request,$id){
        $tarefa=Tarefa::findOrFail($id);
        $tarefa->responsavel=$request->get('responsavel');
        $tarefa->descricao=$request->get('descricao');
        $tarefa->data_conclusao=$request->get('data_conclusao');
    }
    public function destroy($id){
        $tarefa=Tarefa::findOrFail($id);
        $tarefa->update();
    }
}
