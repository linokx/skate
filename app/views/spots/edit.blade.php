@extends('template')

@section('contenu')

<section>
	@if(Session::has('message'))
		<div class="alert alert-success">{{ Session::get('message') }}</div>
	@endif	
	<div class="panel panel-primary">	
			<div class="panel-heading">Édition d'un spot</div>
			<div class="panel-body"> 
				<div class="col-sm-12">
					{{ Form::open(array('url' => 'spot/', 'method' => 'put', 'class' => 'form-horizontal panel')) }}	
						<small class="text-danger">{{ $errors->first('name') }}</small>
					  <div class="form-group {{ $errors->has('name') ? 'has-error has-feedback' : '' }}">
					  	{{ Form::label('Nom') }}
					  	{{ Form::text('name', $spot->name, array('class' => 'form-control', 'placeholder' => 'Nom')) }}
					  </div>
					  <small class="text-danger">{{ $errors->first('email') }}</small>
					  <div class="form-group {{ $errors->has('email') ? 'has-error has-feedback' : '' }}">
					  	{{ Form::label('Adresse') }}
					  	{{ Form::text('address', $spot->address, array('class' => 'form-control', 'id'=>'address', 'placeholder' => 'content')) }}
					  </div>
					  <div class="form-group">
					  	{{ Form::label('Latitude') }}
					  	{{ Form::text('lat',$spot->lat)}}
					  	{{ Form::label('Longitude') }}
					  	{{ Form::text('lon',$spot->lon, array('maxlenght'=>'10'))}}
					  </div>
						{{ Form::submit('Envoyer', array('class' => 'btn btn-primary pull-right')) }}
					{{ Form::close() }}
				</div>
			</div>
		</div>
</section>
@stop