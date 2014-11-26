@extends('template')

@section('contenu')
	@if(Session::has('status'))
		<div class="alert alert-success">{{ Session::get('status') }}</div>
	@endif
	<section id="profil" class="clearfix">
		<aside>
			@if($user->photo)
				{{ HTML::image('uploads/user/thumbnail/'.$user->photo->url, "Photo de $user->pseudo", array('height'=> $user->photo->height, 'width'=>$user->photo->width)) }}
			@endif
			<h1>{{ $user->pseudo }}</h1>

			<header class="clearfix">
				<span>{{$user->name}}</span>
				<span>{{$user->birthday}}</span>
				<span>{{$user->city}}</span>
				@if(Auth::user() and (Auth::user()->id == $user->id))
					{{ link_to('profil/edit', 'Edit') }}
				@endif
			</header>
			<div>
				<span class="count">{{$user->photosCount}}</span>
				<span>Photos publiées</span>
			</div>
			<div>
				<span class="count">{{count($user->spots)}}</span>
				<span>Spots ajoutés</span>
			</div>
			<div>
				<span class="count">{{count($user->comments)}}</span>
				<span>Commentaires</span>
			</div>
		</aside>
		<div class="content">
			@if(Auth::user() and (Auth::user()->admin or Auth::user()->id == $user->id))
				@if(count($user->photos))
					<div>
						<h2>Photos postées</h2>
						{{ link_to('profil/photo', 'Voir toutes les photos') }}
						@include('user.photo')
					</div>
				@endif
				@if(count($user->spots))
					<div>
						<h2>Spots ajoutés</h2>
						<div>
							@foreach ($user->spots as $spot)
								<div>{{$spot->name}}
								{{ link_to('spot/'.$spot->id, 'Voir la page') }}</div>
							@endforeach
						</div>
					</div>
				@endif
				@if(count($user->comments))
					<div id="comment">
						<h2>Commentaires postés</h2>
						@foreach ($user->comments as $comment)
							@include('comment.show')
						@endforeach
					</div>
				@endif
			@endif
		</div>
	</section>
@stop