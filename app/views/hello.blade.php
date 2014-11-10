@extends('template')

@section('contenu')
	<div class="clearfix">
		<div class="welcome">
			<p>Logo<sup>TM</sup> c'est avant tout une communauté de rider au service de chacun afin de permettre de trouver les meilleurs spots de ride peu importe où vous allez.</p>
			<p>Mais Logo<sup>TM</sup> c'est aussi un service web et une application smartphone très simple qui vous aidera à trouver des spots de ride autour de vous. Que vous utilisiez la système de recherche par nom de ville, par critère ou par géolocalisation, Logo vous affichera les spots envoyés par les membres de notre communauté correspondants à votre recherche.</p>
			<p>Et ce n'est pas tout! En plus de vous afficher les spots sur une carte, Logo vous permet également de les visualiser directement grâce aux photos ajoutées par nos membres.</p>
			<p>N'attendez plus, téléchargez l'application et rejoignez la communauté en vous inscrivant!</p>		
		</div>
		<div class="app">
			<div class="os">
				<div class="logo">O</div>
				<a>App store</a>
			</div>
			<div class="os">
				<div class="logo">O</div>
				<a>Android Market</a>
			</div>
			<div class="os">
				<div class="logo">O</div>
				<a>Windows Phone</a>
			</div>
		</div>
	</div>
	<div class="map-zone">
		<form class="search" id="content-search">
	        <input name="place" class="place" />
	        <input name="key" class="key-word"/>
			<input type="submit" value="Go" />
			<a class="geoloc getPosition">GéoLoc</a>
		</form>
	    <div id="bigmap" data-position="50.8486867,4.3631291">
		</div>
		<div id="phone">
			<form class="search" id="content-search">
		        <input name="place" class="place" />
		        <input name="key" class="key-word"/>
				<input type="submit" value="Go" />
				<a class="geoloc getPosition">GéoLoc</a>
			</form>
		</div>
	</div>
	<div class="btn mobile_test">Tester la version mobile</div>
@stop
