@extends('layouts.admin')
@section('conteudo')
<div class="card border">
    <div class="card-body">
        <form action="tarefa/" method="POST">
            @csrf
            <div class="form-group">
                <label for="Responsavel">Responsável</label>
                <input type="text" class="form-control" name="Responavel" value="{{$cat->responsavel}}"
                       id="Responsavel" placeholder="Responsavel">
            </div>

            <div class="form-group">
                <label for="Descricao">Descrição</label>
                <input type="text" class="form-control" name="descricao" value="{{$cat->descricao}}"
                       id="descricao" placeholder="Descricao">
            </div>

            <div class="form-group">
                <label for="data_conclusao">Data Conclusão</label>
                <input type="text" class="form-control" name="data_conclusao" value="{{$cat->data_conclusao}}"
                       id="data_conclusao" placeholder="data_conclusao">
            </div>
            <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
            <button type="cancel" class="btn btn-danger btn-sm">Cancel</button>
        </form>
    </div>
</div>

@endsection

