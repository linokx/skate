@extends('template')

@section('contenu')
		@if(Session::has('status'))
			<div class="alert alert-success">{{ Session::get('status') }}</div>
		@endif
          {{ link_to('user/1/edit', 'User 1') }}
@stop