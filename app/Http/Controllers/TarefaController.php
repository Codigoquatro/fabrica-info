<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Tarefa;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\TarefaFormRequest;
use DB;
class TarefaController extends Controller
{
    public function __construct(){
        //
    }

    public function index(Request $request){

        if($request){
            $query=trim($request->get('seachText'));
            $tarefa=DB::table('tarefa')
            ->where('responsavel','LIKE', '%'.$query.'%')
            ->where('descricao','=','1')
            ->orderBy('id_tarefa','desc')
            ->paginate('7');
            return view('index',[
                "tarefa"=>$tarefa, "searchText"=>$query
            ]);
        }
    }

    public function create(){
        return view('create');
    }

    public function store(TarefaFormRequest $request){
        $tarefa = new Tarefa;
        $tarefa->responsavel=$request->get('responsavel');
        $tarefa->descricao=$request->get('descricao');
        $tarefa->data_conclusao=$request->get('data_conclusao');
        $tarefa->save();
        return Redirect::to('novo');


    }

    public function show($id_tarefa){
        return view("show",
        ["tarefa"=>Tarefa::findOrFail($id_tarefa)]);
    }

    public function edit($id_tarefa){
        return view("tarefa.edit",
        ["tarefa"=>Tarefa::findOrFail($id_tarefa)]);
    }

    public function update(TarefaFormRequest $request, $id_tarefa){
        $tarefa=Tarefa::findOrFail($id_tarefa);
    	$tarefa->responsavel=$request->get('responsavel');
    	$tarefa->descricao=$request->get('descricao');
        $tarefa->descricao=$request->get('data_conclusao');
    	$tarefa->update();
    	return Redirect::to('tarefa.index');
    }

    public function destroy(){
        $tarefa=Tarefa::findOrFail($id_tarefa);
    	$tarefa->update();
    	return Redirect::to('index');
    }
}
