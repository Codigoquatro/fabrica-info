@extends('layouts.admin')
@section('conteudo')
<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Editar Tarefa: {{ $tarefa->responsavel }}</h3>
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

			{!!Form::model($tarefa, ['method'=>'PATCH', 'route'=>['tarefa.update', $tarefa->idtarefa], 'files'=>'true'])!!}
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
            		<label>Descrição</label>
            		<select name="id_descricao" class="form-control">
	            		@foreach($descricao as $cat)
	            			@if($cat->id_descricao==$descricao->id_descricao)
	            			<option value="{{$cat->id_descricao}}" selected>
	            			{{$cat->nome}}
	            			</option>
	            			@else
	            			<option value="{{$cat->id_descricao}}">
	            			{{$cat->nome}}
	            			</option>
	            			@endif
	            		@endforeach
            		</select>
            		</div>

            	</div>



            	<div class="col-lg-6 col-sm-6 col-xs-12">
            		<div class="form-group">
	            	<label for="codigo">Data Conclusão</label>
	            	<input type="text" name="data conclusao" required value="{{$produto->codigo}}" class="form-control" placeholder="Data Conclusão...">
	            	</div>

            	</div>


            	</div>

            	</div>

            </div>

