@extends('template')

@section('contenu')
	@if(Session::has('status'))
		<div class="alert alert-success">{{ Session::get('status') }}</div>
	@endif
	<section id="profil" class="clearfix">
		<aside>
			@if($user->photo)
				{{ HTML::image('uploads/'.$user->photo->url, "Photo de $user->pseudo", array('height'=> $user->photo->height, 'width'=>$user->photo->width)) }}
			@endif
			<h1>{{ $user->pseudo }}</h1>
			<div>Photos postées  ({{count($user->photos)}})</div>
			<div>Spots ajoutés  ({{count($user->spots)}})</div>
			<div>Commentaires postés  ({{count($user->comments)}})</div>
		</aside>
		<div class="content">
			<header class="clearfix">
				<span>Prénom: {{$user->name}}</span>
				<span>Pseudo: {{$user->pseudo}}</span>
				<span>Date de naissance: {{$user->birthday}}</span>
				<span>Ville: {{$user->city}}</span>
				@if(Auth::user() and (Auth::user()->id == $user->id))
					{{ link_to('profil/edit', 'Edit') }}
				@endif
			</header>
			@if(Auth::user() and (Auth::user()->admin or Auth::user()->id == $user->id))

			<div>
				<h2>Photos postées  ({{count($user->photos)}})</h2>
				<div class="clearfix">
					@foreach ($user->photos->slice(0,10) as $photo)
						<img src="uploads/{{$photo->url}}" height="{{$photo->height}}" width="{{$photo->width}}" class="thumbnail" />
					@endforeach
				</div>
			</div>
			<div>
				<h2>Spots ajoutés ({{count($user->spots)}})</h2>
				<div>
					@foreach ($user->spots as $spot)
						<div>{{$spot->name}}
						{{ link_to('spot/'.$spot->id, 'Voir la page') }}</div>
					@endforeach
				</div>
			</div>
			<div>
				<h2>Commentaires postés ({{count($user->comments)}})</h2>
				@foreach ($user->comments as $comment)
					<div class="comment">
						<p>{{$comment->content}}</p>
						{{ link_to('spot/'.$comment->spot_id, 'Voir la page') }}
					</div>
				@endforeach
			</div>
			@endif
		</div>
	</section>
@stop