@extends('layouts.admin')
@section('conteudo')
<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <h3>Nova Tarefa</h3>
        @if (count($errors)>0)
        <div class="alert alert-danger">
            <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
            </ul>
        </div>
        @endif

    </div>
</div>


        {!!Form::open(array('url'=>'tarefa/create','method'=>'POST','autocomplete'=>'off', 'files'=>'true'))!!}
        {{Form::token()}}

        <div class="row">

            <div class="col-lg-6 col-sm-6 col-xs-12">
                <div class="form-group">
                <label for="nome">Responsavel</label>
                <input type="text" name="Responsavel" required value="{{old('Responavel')}}" class="form-control" placeholder="Nome...">
                </div>
            </div>



            <div class="col-lg-6 col-sm-6 col-xs-12">
                <div class="form-group">
                <label>Descrição</label>
                <select name="id_descricao" class="form-control">
                    @foreach($tarefa as $cat)
                    <option value="{{$cat->id_descricao}}">
                    {{$cat->nome}}
                    </option>
                    @endforeach
                </select>
                </div>

            </div>



            <div class="col-lg-6 col-sm-6 col-xs-12">
                <div class="form-group">
                <label for="codigo">Data Conclusao</label>
                <input type="text" name="data conclusao" required value="{{old('codigo')}}" class="form-control" placeholder="Data Conclusao...">
                </div>

            </div>


        <div class="form-group">
            <button class="btn btn-primary" type="submit">Salvar</button>
            <button class="btn btn-danger" type="reset">Cancelar</button>
        </div>

        {!!Form::close()!!}

@stop
