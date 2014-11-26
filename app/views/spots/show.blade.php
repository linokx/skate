@extends('template')

@section('contenu')
		<div id="bigmap" data-position="{{ $spot->lat }},{{$spot->lon}}">
		</div>
	<section id="spot"  class="wrapper clearfix">
		<article data-coord="{{ $spot->lat }},{{$spot->lon}}" data-title="{{$spot->name}}">
			<h1>{{ $spot->name }}</h1>
			<div>
				<h3>Description</h3>
				<p class="description">{{ $spot->description}}</p>
				<h3>Adresse </h3>
				<p>{{ $spot->address}}</p>
				<h3>Coordonnée</h3>
				<p class="coord">{{ $spot->lat }}° | {{$spot->lon}}°</p>

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
					@else
						<p>Soyez la première personne à commenter ce spot.</p>
					@endif
				</div>
			</div>
			<div id="photos">
				<div class="clearfix">
					@foreach ($spot->photos as $photo)
						<img src="../uploads/spot/thumbnail/{{$photo->url}}" height="200" width="200" class="" />
					@endforeach
				</div>
				@if(Auth::check())
					@if(Session::has('error'))
						<div class="alert alert-danger">{{ Session::get('error') }}</div>
					@endif
					{{ Form::open(array('url' => 'photo/spot/'.$spot->id, 'method'=>'put', 'files' => true)) }}
						<small class="text-danger">{{ $errors->first('image') }}</small>
						<div class="form-group {{ $errors->has('nom') ? 'has-error has-feedback' : '' }}">
						  <fieldset id="file">
						  	{{ Form::label('image','Ajouter une photo',array('class'=>'btn'))}}
						  	{{ Form::file('image')}}
						  </fieldset>
							{{ Form::submit('Envoyer !', array('class' => 'btn btn-info pull-right')) }}
						</div>
					{{ Form::close() }}
				@endif
			</div>
		</article>
	</section>
@stop