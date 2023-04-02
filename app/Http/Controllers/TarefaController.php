<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use fabricainfo\Tarefa;
use Illuminate\Support\Facedes\Redirect;
use fabricainfo\Http\Requests\TarefaFromRequest;
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
            return view('tarefa',[
                "tarefa"=>$tarefa, "searchText"=>$query
            ]);
        }
    }

    public function create(){

    }

    public function store(){

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
