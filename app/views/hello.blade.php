@extends('template')

@section('contenu')
	<div id="img_and_map">
		<ul>
			<li class="home">
				<div class="wrapper">
					<div id="home_wrapper">
						<h2>La meilleure application pour trouver des spots</h2>
						<p>Déjà disponible dans votre navigateur et prochainement sur votre smartphone.</p>
						<a href="#" class="web_use getPosition">Utiliser la version web</a>
					</div>
				</div>
			</li>
			<li>
				
			    <div id="bigmap" data-position="50.8486867,4.3631291">
				</div>
			</li>
		</ul>
	</div>

	<div id="icons" class="clearfix">
		<div class="wrapper">
			<div class="icon"><img src="images/search.png" class="imgicons" alt="search_icon" width="117px" height="115px">
				<h3 class="picons">Search</h3>
				<p>Cherchez un spot présent dans notre base de donnée en choisissant un type et un lieu</p>
			</div>
			<div class="icon"><img src="images/find.png" class="imgicons" alt="find_icon" width="117px" height="115px">
				<h3 class="picons">Find</h3>
				<p>Votre choix est fait ? Rendez-vous à l'endroit indiqué sur la plan en utilisant votre position</p>
			</div>
			<div class="icon"><img src="images/ride.png" class="imgicons" alt="ride_icon" width="117px" height="115px">
				<h3 class="picons">Ride</h3>
				<p>À présent, il ne vous reste plus qu'à tenter le spot et de partager vos photos</p>
			</div>
		</div>
	</div>
	<section class="wrapper">
		<div>
			<h2>Mais c'est quoi au juste?</h2> 
			<p><span class="riddde">riddde</span> c’est avant tout une communauté de rider au service de chacun afin de permettre de trouver les meilleurs spots de ride peu importe où vous allez.</p>
			<p>Mais c’est aussi un service web et une application smartphone très simple qui vous aidera à trouver des spots de ride autour de vous. Que vous utilisiez le système de recherche par nom de ville, par critère ou par géolocalisation, les spots envoyés par les membres de notre communauté correspondants à votre recherche seront affichés.</p>
			<p>Et ce n’est pas tout! En plus de vous afficher les spots sur une carte, vous avez également la possibilité de les visualiser directement grâce aux photos ajoutées par nos membres.</p>
			<p>N’attendez plus, téléchargez l’application et rejoignez la comunauté en vous inscrivant!</p>

			<a href="#" class="sign signup">Essayer maintenant !</a>
		</div>

	</section>
@stop
