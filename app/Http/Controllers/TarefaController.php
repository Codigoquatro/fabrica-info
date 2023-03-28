<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Tarefa;
use Illuminate\Support\Facades\Redirect;
use Laravel\Http\Requests\TarefaFormRequest;
use DB;
use Illuminate\Support\Facades\DB as FacadesDB;

class TarefaController extends Controller
{
    public function __construct(){

    }

    public function index(Request $request){
        if ($request){
            $query=trim($request->get('searchText'));
            $tarefas=DB::table('tarefa')
            ->where('responsavel','LIKE', '%'.$query.'%')
            ->where('codicao','=','1')
            ->orderBy('id_tarefa','desc')
            ->paginate(7);
            return view('tarefa.index');
        }

    }

    public function create(){

    }

    public function store(){
        
    }

    public function update(){
        
    }

    public function destroy(){
        
    }


}
