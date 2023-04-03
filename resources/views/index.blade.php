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
                        <a href="/tarefa/{{$cat->id_tarefa}}/edit" class="btn btn-sm btn-primary">Editar</a>
                        <a href="/tarefa/apagar/{{$cat->id_tarefa}}" class="btn btn-sm btn-danger">Apagar</a>
					</td>
				</tr>

			@endforeach
			</table>
		</div>

	</div>
</div>
@stop
