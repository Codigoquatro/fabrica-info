@extends('layout.app')
@section('body')

<div class="card border">
    <div class="card-body">
        <form action="/categorias/{{$cat->id}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="responsavel">Responsável</label>
                <input type="text" class="form-control" name="responsavel" value="{{$cat->nome}}"
                       id="responsavel" placeholder="Responsavel">
            </div>

            <div class="form-group">
                <label for="descricao">Descrição</label>
                <input type="text" class="form-control" name="descricao" value="{{$cat->nome}}"
                       id="descricao" placeholder="Descrição">
            </div>

            <div class="form-group">
                <label for="data_conclusao">Data Conclusão</label>
                <input type="text" class="form-control" name="data_conclusao" value="{{$cat->nome}}"
                       id="data_conclusao" placeholder="Data_Conclusao">
            </div>
            <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
            <button type="cancel" class="btn btn-danger btn-sm">Cancel</button>
        </form>
    </div>
</div>

@endsection
