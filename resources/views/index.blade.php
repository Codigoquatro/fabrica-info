<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>Lista de Tarefas<a href="categoria/create"><button class="btn btn-success">Novo</button></a></h3>
		@include('create')
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
                    <th>Data Conclusão</th>
					<th>Opções</th>
				</thead>
               @foreach ($tarefas as $cat)
				<tr>
					<td>{{ $cat->id}}</td>
					<td>{{ $cat->responsavel}}</td>
					<td>{{ $cat->descricao}}</td>
                    <td>{{ $cat->data_conclusao}}</td>
					<td>
						<a href="{{URL::action('CategoriaController@edit',$cat->idcategoria)}}"><button class="btn btn-info">Editar</button></a>
                         <a href="" data-target="#modal-delete-{{$cat->idcategoria}}" data-toggle="modal"><button class="btn btn-danger">Excluir</button></a>
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