@extends('template')

@section('contenu')

<section>
	@if(Session::has('message'))
		<div class="alert alert-success">{{ Session::get('message') }}</div>
	@endif	
	<div class="panel panel-primary">	
			<div class="panel-heading">Nouveau compte</div>
			<div class="panel-body"> 
				<div class="col-sm-12">
					{{ Form::open(array('url' => 'user', 'method' => 'post', 'class' => 'form-horizontal panel')) }}	
						<small class="text-danger">{{ $errors->first('pseudo') }}</small>
					  <div class="form-group {{ $errors->has('pseudo') ? 'has-error has-feedback' : '' }}">
					  	{{ Form::label('Pseudo') }}
					  	{{ Form::text('pseudo', '', array('class' => 'form-control')) }}
					  </div>
					  <small class="text-danger">{{ $errors->first('email') }}</small>
					  <div class="form-group {{ $errors->has('email') ? 'has-error has-feedback' : '' }}">
					  	{{ Form::label('Email') }}
					  	{{ Form::text('email', '', array('class' => 'form-control')) }}
					  </div>
					  <small class="text-danger">{{ $errors->first('password') }}</small>
					  <div class="form-group {{ $errors->has('password') ? 'has-error has-feedback' : '' }}">
					  	{{ Form::label('Mot de passe') }}
					  	{{ Form::password('password', '', array('class' => 'form-control', 'id'=>'address', 'placeholder' => 'content')) }}
					  </div>
					  <small class="text-danger">{{ $errors->first('password_confirmation') }}</small>
					  <div class="form-group {{ $errors->has('password_confirmation') ? 'has-error has-feedback' : '' }}">
					  	{{ Form::label('Confirmation mot de passe') }}
					  	{{ Form::password('password_confirmation', '', array('class' => 'form-control', 'id'=>'address')) }}
					  </div>
						{{ Form::submit('Envoyer', array('class' => 'btn btn-primary pull-right')) }}
					{{ Form::close() }}
				</div>
			</div>
		</div>
</section>
@stop