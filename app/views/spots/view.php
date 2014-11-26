<ui-gmap-google-map center='map.center' zoom='map.zoom'>
	<ui-gmap-markers models="markers" coords="'self'" icon="'icon'" options="options" events="events"></ui-gmap-markers>
</ui-gmap-google-map>
<section id="spot" class="wrapper clearfix">
	<article>
		<h1>{{content.spot.name}}</h1>
		<span ng-click="content.changeSpot(1)">1</span>
		<span ng-click="content.changeSpot(2)">2</span>
		<span ng-click="content.changeSpot(3)">3</span>
		<div ng-repeat"item in content.liste">
			<span>{{item}}</span>
		</div>
		<div>
			<h3>Description</h3>
			<p class="description">{{ content.spot.description}}</p>
			<h3>Adresse </h3>
			<p class="address">{{ content.spot.address}}</p>
			<h3>Coordonnées</h3>
			<p class="coord">{{ content.spot.lat }}° | {{content.spot.lon}}°</p>
			<div id="comment">
				<h2>Commentaire</h2>
				<div class="comment" itemprop="review" itemscope itemtype="http://schema.org/Review" ng-repeat="comment in content.spot.comments">
					<span class="author" itemprop="author">{{comment.author}}</span>
					<span class="date" itemprop="date">{{comment.date}}</span>
					<p itemprop="reviewBody">{{comment.body}}</p>
				</div>
			</div>
		</div>
		<div id="photos">
			<h2>Photos</h2>
		</div>
	</article>
</section>