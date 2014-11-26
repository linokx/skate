@extends('template')

@section('contenu')

	<section id="spot"  class="wrapper clearfix">
		@if(Auth::check())
			<h2>Le spot que tu cherches est introuvable</h2>
			<p>Retente ta chance avec d'autres mot-clés ou ou {{ link_to('spot/create', 'ajoute le spot') }} manquant.</p>
		@else
			<h2>Le spot que tu cherches est introuvable</h2>
			<p>Retente ta chance avec d'autres mot-clés ou ajoute le spot manquant. 
            {{ link_to('auth/login', 'Connecte-toi', array('class'=>'connexion')) }} ou {{ link_to('user/create', 'inscris-toi', array('class'=>'inscription')) }} pour pouvoir ajouter un spot.</p>
		@endif
	</section>
@stop