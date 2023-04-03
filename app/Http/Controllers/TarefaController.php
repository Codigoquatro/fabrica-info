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
            $tarefa=Tarefa::all();
           // ->where('responsavel','LIKE', '%'.$query.'%')
           // ->where('descricao','=','1')
            //->orderBy('id_tarefa','desc')
           // ->paginate('7');
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
        return Redirect::to('tarefa');


    }

    public function show($id_tarefa){

    }

    public function edit($id_tarefa){
        $cat = Tarefa::find($id_tarefa);
        if(isset($cat)) {
            return view('edit', compact('cat'));
        }
    }

    public function update(Request $request, $id_tarefa){
        $tarefa=Tarefa::findOrFail($id_tarefa);
    	$tarefa->responsavel=$request->get('responsavel');
    	$tarefa->descricao=$request->get('descricao');
        $tarefa->descricao=$request->get('data_conclusao');
    	$tarefa->update();
    	return Redirect::to('tarefa/index');
    }

    public function destroy($id_tarefa){
        Tarefa::find($id_tarefa)->delete();

        return redirect('/tarefa');
    }
}
