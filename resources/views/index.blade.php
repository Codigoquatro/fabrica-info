@extends('layouts.admin')
@section('conteudo')
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>Lista de Tarefas <a href="create"><button class="btn btn-success">Novo</button></a></h3>
	</div>
		
</div>
@stop

@section('conteudo')
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
              
				<tr>
					<td></td>
					<td></td>
					<td></td>
                    <td></td>
					<td>
						<a href="#"><button class="btn btn-info">Editar</button></a>
                         <a href="#" data-target="#" data-toggle="modal"><button class="btn btn-danger">Excluir</button></a>
					</td>
				</tr>

			</table>
		</div>
	
	</div>
</div>

