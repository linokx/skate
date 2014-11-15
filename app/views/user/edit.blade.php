@extends('template')

@section('contenu')
	@if(Session::has('security'))
		<div class="alert alert-danger">{{ Session::get('security') }}</div>
	@endif
	<section id="profil" class="clearfix">

		{{ Form::open(array('url' => 'profil/edit', 'method' => 'put', 'files' => true, 'class' => 'form-horizontal panel')) }}	
			<small class="text-danger">{{ $errors->first('image') }}</small>
			<div class="{{ $errors->has('nom') ? 'has-error has-feedback' : '' }}">
				{{ Form::label('image','Nouvelle photo')}}
				{{ Form::file('image', array('class' => 'form-control')) }}
			</div>

			<small class="text-danger">{{ $errors->first('name') }}</small>
		  	<div class="{{ $errors->has('name') ? 'has-error has-feedback' : '' }}">
				{{ Form::label('name','Prénom')}}
				{{ Form::text('name', $user->name, array('class' => 'form-control', 'placeholder' => 'Prénom')) }}
			</div>
			<small class="text-danger">{{ $errors->first('pseudo') }}</small>
		  	<div class="{{ $errors->has('pseudo') ? 'has-error has-feedback' : '' }}">
			  	{{ Form::label('pseudo','Pseudo')}}
			  	{{ Form::text('pseudo', $user->pseudo, array('class' => 'form-control', 'placeholder' => 'Nom')) }}
			</div>
			<small class="text-danger">{{ $errors->first('email') }}</small>
			<div class="{{ $errors->has('email') ? 'has-error has-feedback' : '' }}">
			  	{{ Form::label('email','Email')}}
			  	{{ Form::email('email', $user->email, array('class' => 'form-control', 'placeholder' => 'Email')) }}
			</div>
			<small class="text-danger">{{ $errors->first('birthday') }}</small>
			<div class="{{ $errors->has('email') ? 'has-error has-feedback' : '' }}">
			  	{{ Form::label('birthday','Date de naissance')}}
			  	{{ Form::text('birthday', $user->birthday, array('class' => 'form-control', 'placeholder' => '20/01/2015')) }}
			</div>
			<small class="text-danger">{{ $errors->first('city') }}</small>
			<div class="{{ $errors->has('city') ? 'has-error has-feedback' : '' }}">
				{{ Form::label('city','Ville')}}
				{{ Form::text('city', $user->city, array('class' => 'form-control', 'placeholder' => 'Ville')) }}
			</div>
		  
			{{ Form::submit('Envoyer', array('class' => 'btn btn-primary')) }}
		{{ Form::close() }}
	</section>
@stop