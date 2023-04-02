@extends('layouts.admin')
@section('conteudo')
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>Lista de Tarefas <a href="categoria/create"><button class="btn btn-success">Novo</button></a></h3>
		@include('estoque.categoria.search')
	</div>
</div>
<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					<th>Id</th>
					<th>Responsavel</th>
					<th>Descrição</th>
					<th>Data Conclusão</th>
				</thead>
               @foreach ($tarefas as $ta)
				<tr>
					<td>{{ $ta->id_tarefa}}</td>
					<td>{{ $ta->responsavel}}</td>
					<td>{{ $ta->descricao}}</td>
                    <td>{{ $ta->data_conclusao}}</td>
					<td>
						<a href="{{URL::action('TarefaController@edit',$cat->id_tarefa)}}"><button class="btn btn-info">Editar</button></a>
                         <a href="" data-target="#modal-delete-{{$cat->id_tarefa}}" data-toggle="modal"><button class="btn btn-danger">Excluir</button></a>
					</td>
				</tr>
				@include('modal')
				@endforeach
			</table>
		</div>
		{{$tarefas->render()}}
	</div>
</div>
@stop
