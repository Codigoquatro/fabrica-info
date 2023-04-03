@extends('layouts.admin')
@section('conteudo')
<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Editar Tarefa: {{ $tarefa->id_tarefa}}</h3>
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

			{!!Form::model($tarefa, ['method'=>'PATCH', 'route'=>['tarefa.update', $tarefa->id_tarefa], 'files'=>'true'])!!}
			{{Form::token()}}

           <div class="row">

            	<div class="col-lg-6 col-sm-6 col-xs-12">
	            	<div class="form-group">
	            	<label for="nome">Responsável</label>
	            	<input type="text" name="responsavel" required value="{{$tarefa->responsavel}}" class="form-control" placeholder="Responsável...">
	            	</div>
            	</div>

                <div class="col-lg-6 col-sm-6 col-xs-12">
	            	<div class="form-group">
	            	<label for="nome">Descrição</label>
	            	<input type="text" name="descricao" required value="{{$tarefa->descricao}}" class="form-control" placeholder="Descrição...">
	            	</div>
            	</div>





            	<div class="col-lg-6 col-sm-6 col-xs-12">
            		<div class="form-group">
	            	<label for="codigo">Data Conclusão</label>
	            	<input type="text" name="data conclusao" required value="{{$tarefa->data_conclusao}}" class="form-control" placeholder="Data Conclusão...">
	            	</div>

            	</div>


            	</div>

            	</div>

            </div>

