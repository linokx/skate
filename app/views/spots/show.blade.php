@extends('template')

@section('contenu')
	<section id="spot" class="content">
		<div id="bigmap" data-position="{{ $spot->lat }},{{$spot->lon}}">
		</div>
		<article data-coord="{{ $spot->lat }},{{$spot->lon}}" data-title="{{$spot->name}}">
			<div><strong>{{ $spot->name }}</strong></div>
			<div>Coord: {{ $spot->lat }} - {{$spot->lon}}</div>
			<div>Ajouté par: <span>{{ link_to('user/'.$spot->user_id, $spot->user->pseudo) }}</span></div>
		</article>
		<div>
			<h2>Photo</h2>
			<div class="clearfix">
				@foreach ($spot->photos as $photo)
					<img src="../uploads/{{$photo->url}}" height="{{$photo->height}}" width="{{$photo->width}}" class="thumbnail" />
				@endforeach
			</div>
			@if(Auth::check())
				@if(Session::has('error'))
					<div class="alert alert-danger">{{ Session::get('error') }}</div>
				@endif
				{{ Form::open(array('url' => 'photo/spot/'.$spot->id, 'method'=>'put', 'files' => true)) }}
					<small class="text-danger">{{ $errors->first('image') }}</small>
					<div class="form-group {{ $errors->has('nom') ? 'has-error has-feedback' : '' }}">
						{{ Form::file('image', array('class' => 'form-control')) }}
					</div>
					{{ Form::submit('Envoyer !', array('class' => 'btn btn-info pull-right')) }}
				{{ Form::close() }}
			@endif
		</div>
		<div>
			<h2>Commentaire</h2>
			@foreach ($spot->comments as $comment)
				<div class="comment">
					<span>Par {{ link_to('user/'.$comment->user_id, $comment->user->pseudo) }}, le {{$comment->created_at}}</span>
					<p>{{$comment->content}}</p>
				</div>
			@endforeach
			
			@if(Auth::check())
				@if(Session::has('error'))
					<div class="alert alert-danger">{{ Session::get('error') }}</div>
				@endif
				{{ Form::open(array('url' => 'comment', 'method'=>'post')) }}
					<small class="text-danger">{{ $errors->first('image') }}</small>
					<div class="form-group {{ $errors->has('nom') ? 'has-error has-feedback' : '' }}">
						{{ Form::hidden('spot', $spot->id) }}
						{{ Form::textarea('content')}}
					</div>
					{{ Form::submit('Envoyer !', array('class' => 'btn btn-info pull-right')) }}
				{{ Form::close() }}
			@endif
		</div>
	</section>
@stop