@extends('layouts.admin')
@section('conteudo')
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>Lista de Tarefas <a href="tarefa/create"><button class="btn btn-success">Novo</button></a></h3>

	</div>

</div>



<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					<th>Id</th>
					<th>Nome</th>
					<th>Descrição</th>
					<th>Opções</th>
				</thead>
               @foreach ($tarefa as $cat)
				<tr>
					<td>{{ $cat->id_tarefa}}</td>
					<td>{{ $cat->responsavel}}</td>
					<td>{{ $cat->descricao}}</td>
                    <td>{{ $cat->data_conclusao}}</td>
					<td>
						<a href="#"><button class="btn btn-info">Editar</button></a>
                         <a href="#" data-target="#modal-delete-{{$cat->id_tarefa}}" data-toggle="modal"><button class="btn btn-danger">Excluir</button></a>
					</td>
				</tr>

			@endforeach
			</table>
		</div>
		{{$tarefa->render()}}
	</div>
</div>
@stop
