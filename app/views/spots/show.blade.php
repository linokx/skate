@extends('template')

@section('contenu')
	<section id="spot" class="content">
		<div id="bigmap" data-position="{{ $spot->lat }},{{$spot->lon}}">
		</div>
		<article data-coord="{{ $spot->lat }},{{$spot->lon}}" data-title="{{$spot->name}}">
			<h1>{{ $spot->name }}</h1>
			<div>{{ $spot->address}} <div class="coord">{{ $spot->lat }}° | {{$spot->lon}}°</div></div>
		</article>
		<div id="photos">
			<h2>Photo</h2>
			<div class="clearfix">
				@foreach ($spot->photos as $photo)
					<img src="../uploads/spot/thumbnail/{{$photo->url}}" height="200" width="200" class="thumbnail" />
				@endforeach
			</div>
			@if(Auth::check())
				@if(Session::has('error'))
					<div class="alert alert-danger">{{ Session::get('error') }}</div>
				@endif
				{{ Form::open(array('url' => 'photo/spot/'.$spot->id, 'method'=>'put', 'files' => true)) }}
					<small class="text-danger">{{ $errors->first('image') }}</small>
					<div class="form-group {{ $errors->has('nom') ? 'has-error has-feedback' : '' }}">
						{{Form::label('image','Ajouter une photo')}}
						{{ Form::file('image', array('class' => 'form-control')) }}
						{{ Form::submit('Envoyer !', array('class' => 'btn btn-info pull-right')) }}
					</div>
				{{ Form::close() }}
			@endif
		</div>
		<div id="comment">
			<h2>Commentaire</h2>
			@if(Auth::check())
				@if(Session::has('error'))
					<div class="alert alert-danger">{{ Session::get('error') }}</div>
				@endif
				{{ Form::open(array('url' => 'comment', 'method'=>'post', 'class'=>'clearfix')) }}
					<small class="text-danger">{{ $errors->first('image') }}</small>
					<div class="form-group {{ $errors->has('nom') ? 'has-error has-feedback' : '' }}">
						{{ Form::hidden('spot', $spot->id) }}
						{{ Form::textarea('content', '', array('rows'=>'3', 'placeholder'=>'Ajouter un commentaire...') )}}
					</div>
					{{ Form::submit('Envoyer !', array('class' => 'btn btn-info pull-right')) }}
				{{ Form::close() }}
			@endif
			@if(count($comments)>0)
				@foreach ($comments as $comment)
					@include('comment.show')
				@endforeach
				<?php echo $comments->links(); ?>
			@endif
		</div>
	</section>
@stop