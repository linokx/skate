@extends('template')

@section('contenu')
	<section id="profil" class="clearfix">
		<aside>
			{{ HTML::image('uploads/'.$user->photo->url, "Photo de $user->pseudo", array('height'=> $user->photo->height, 'width'=>$user->photo->width)) }}
			<h1>{{ $user->pseudo }}</h1>
			<div>Photos postées  ({{count($user->photos)}})</div>
			<div>Spots visités  ({{count($user->spots)}})</div>
			<div>Commentaires postés  ({{count($user->comments)}})</div>
		</aside>
		<div class="content">
			@if(Auth::user() and (Auth::user()->admin or Auth::user()->id == $user->id))

			<div>
				<h2>Photos  ({{count($user->photos)}})</h2>
				<div class="clearfix">
					@foreach ($user->photos as $photo)
						{{ HTML::image('uploads/'.$photo->url, "", array('height'=> $photo->height, 'width'=>$photo->width, 'class'=>'thumbnail')) }}
					@endforeach
				</div>
			</div>
			@endif
		</div>
	</section>
@stop