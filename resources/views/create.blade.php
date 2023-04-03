@extends('layouts.admin')
@section('conteudo')
<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Nova Categoria</h3>
			@if (count($errors)>0)
			<div class="alert alert-danger">
				<ul>
				@foreach ($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
				</ul>
			</div>
			@endif

			{!!Form::open(array('url'=>'create','method'=>'POST','autocomplete'=>'off'))!!}
            {{Form::token()}}
            <div class="form-group">
            	<label for="responsavel">Responsável</label>
            	<input type="text" name="responsavel" class="form-control" placeholder="Responsável...">

            </div>
            <div class="form-group">
            	<label for="descricao">Descrição</label>
            	<input type="text" name="descricao" class="form-control" placeholder="Descrição...">
            </div>
            <div class="form-group">

            	<button class="btn btn-primary" type="submit">Salvar</button>
            	<button class="btn btn-danger" type="reset">Cancelar</button>
            </div>
		</div>
	</div>
            	<label for="data_conclusao">Data Conclusão</label>
            	<input type="date" name="data_conclusao" class="form-control" placeholder="Data Conclusão...">
            </div>

            <div class="form-group">
            	<button class="btn btn-primary" type="submit">Salvar</button>
            	<button class="btn btn-danger" type="reset">Cancelar</button>
            </div>

			{!!Form::close()!!}

		</div>
	</div>
@stop

