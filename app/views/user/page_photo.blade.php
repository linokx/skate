@extends('template')

@section('contenu')
	<section id="profil" class="clearfix">
		<div class="content">
		<a href="javascript:history.back()">Retour</a>
			@if(Auth::user() and (Auth::user()->admin or Auth::user()->id == $user->id))

			<div>
				<h2>Photos de {{$user->pseudo}}</h2>
				@include('user.photo')
			</div>
			@else
			<div>
				Vous devez etre connecté pour voir ce contenu.
			</div>
			@endif
		</div>
	</section>
@stop