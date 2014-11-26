
(function($){	

var app = angular.module('riddde',['uiGmapgoogle-maps']),
	baseDir = location.origin+'/public/skate/',
	aKeyWord = [],
	iRadius = 500,
	url = location.pathname.split('/'),
	id = parseInt(url[url.length-1]),
	store;

	app.controller('contentController',['$http','$scope', '$browser', function($http,$scope, $browser){

		this.coord = {
			'lat' : '50.8486867',
			'lon' : '4.3631291'
		};

		$scope.map = { center: { latitude: this.coord.lat, longitude: this.coord.lon }, zoom: 8 };


		this.liste;
	    store = this;
	    store.products = [];
	    $scope.markers = [];
	    $scope.events = {
					        click: function (marker, eventName, args) {
					          store.changeSpot(marker.key);
					        }
					    };

	    $http({
	    	url : baseDir+'spot/list',
	    	method : 'GET',
	    	params: {lat:this.coord.lat,lon:this.coord.lon,rad:iRadius, key:null}
	    }).success(function(data, status, headers, config) {
	    	store.liste = data;
	    	var markers = []
			for(var i in data){
				var spot = data[i];
				var info = {
					latitude: spot.lat,
					longitude: spot.lon,
					title: spot.name,
					id: spot.id,
					draggable: true,
					events: {
				        dragend: function (marker, eventName, args) {
				          $log.log('marker dragend');
				          var lat = marker.getPosition().lat();
				          var lon = marker.getPosition().lng();
				          $log.log(lat);
				          $log.log(lon);
				        }
				    }
				}
				markers.push(info);
			    /*$scope.markers[spot.id] = {
			      	id: spot.id,
			      	coords: {
			        	latitude: spot.lat,
			        	longitude: spot.lon
			      	},
			      	options: { draggable: true },
			      	events: {
			      	click: function(marker, eventName, args){
			      		console.log(marker);
			      	},
			        dragend: function (marker, eventName, args) {
			          	$log.log('marker dragend');
			          	var lat = marker.getPosition().lat();
			          	var lon = marker.getPosition().lng();
			          	$log.log(lat);
			          	$log.log(lon);

			          		$scope.markers.options = {
			            		draggable: true,
			            		labelContent: "lat: " + $scope.marker.coords.latitude + ' ' + 'lon: ' + $scope.marker.coords.longitude,
			            		labelAnchor: "100 0",
			            		labelClass: "marker-labels"
			          		};
			        	}
			      	}
			  	};*/
			 }
			 $scope.markers = markers;
			 console.log(markers);
		    // this callback will be called asynchronously
		    // when the response is available
		  }).
		  error(function(data, status, headers, config) {
		  	console.log('error');
		    // called asynchronously if an error occurs
		    // or server returns response with an error status.
		  });
		
		
		this.changeSpot = function(id){
			$('#spot').fadeOut('fast',function(){

				$browser.url(id);
				$http({
					url : baseDir+'spot/info/'+id,
					method : 'GET'
				}).success(function(data, status, headers, config) {
					store.spot = data;
					// this callback will be called asynchronously
					// when the response is available
				}).
				error(function(data, status, headers, config) {
					console.log(data);
					// called asynchronously if an error occurs
					// or server returns response with an error status.
				});
				$(this).fadeIn('fast');
			});

		}
		$http({
	    	url : baseDir+'spot/info/'+id,
	    	method : 'GET'
	    }).success(function(data, status, headers, config) {
	    	store.spot = data;
		    // this callback will be called asynchronously
		    // when the response is available
		  }).
		  error(function(data, status, headers, config) {
		  	console.log('error');
		    // called asynchronously if an error occurs
		    // or server returns response with an error status.
		  });
	}]);
	mtest = function(){
	}
})(jQuery);