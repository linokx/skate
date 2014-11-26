@extends('template')

@section('contenu')
<div id="bigmap" data-position="50.8486867,4.3631291">
</div>
<div id="add_spot" class="wrapper clearfix">
	<h2>Enregistrer un nouveau spot</h2>
	{{ Form::open(array('url' => 'spot', 'method' => 'post', 'files' => true)) }}
	  <fieldset class="info">
	  	{{ Form::text('name', '', array('placeholder' => 'Nom')) }}
	  	{{ Form::text('address', '', array('id'=>'address', 'placeholder' => 'Adresse')) }}
	  	{{ Form::hidden('lat', '',array('placeholder'=>'Latitude'))}}
	  	{{ Form::hidden('lon','',array('placeholder'=>'Longitude'))}}
	  </fieldset>
	  	{{ Form::textarea('description','', array('class'=>'description', 'placeholder'=>'description'))}}

		{{ Form::submit('Add', array('class' => 'btn')) }}
	  <fieldset id="file">
	  	{{ Form::label('image','Ajouter une image',array('class'=>'btn'))}}
	  	{{ Form::file('image')}}
	  </fieldset>
	{{ Form::close() }}
</div>
@stop