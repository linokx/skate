@extends('template')

@section('contenu')

		<form class="search" id="content-search">
	        <input name="place" class="place" />
	        <input name="key" class="key-word"/>
			<input type="submit" value="Go" />
			<a class="geoloc getPosition">GéoLoc</a>
		</form>
    <div id="bigmap" data-position="50.8486867,4.3631291">
	</div>
	<section id="spot-list">
			<article class="spot" data-coord="" data-title="">
				<img src="" height="50" width="100" style="float:left; margin-right:10px"/>
				<div class="title">
					<strong>titre</strong>
					<div class="coord">Coord</div>
					<div class="distance">Adresse</div>
				</div>
				
			</article>
	</section>
@stop