/* Modernizr 2.6.2 (Custom Build) | MIT & BSD
 * Build: http://modernizr.com/download/#-boxshadow-textshadow-cssanimations-csstransitions-input-inputtypes-shiv-cssclasses-testprop-testallprops-domprefixes-load
 */
	;window.Modernizr=function(a,b,c){function y(a){j.cssText=a}function z(a,b){return y(prefixes.join(a+";")+(b||""))}function A(a,b){return typeof a===b}function B(a,b){return!!~(""+a).indexOf(b)}function C(a,b){for(var d in a){var e=a[d];if(!B(e,"-")&&j[e]!==c)return b=="pfx"?e:!0}return!1}function D(a,b,d){for(var e in a){var f=b[a[e]];if(f!==c)return d===!1?a[e]:A(f,"function")?f.bind(d||b):f}return!1}function E(a,b,c){var d=a.charAt(0).toUpperCase()+a.slice(1),e=(a+" "+o.join(d+" ")+d).split(" ");return A(b,"string")||A(b,"undefined")?C(e,b):(e=(a+" "+p.join(d+" ")+d).split(" "),D(e,b,c))}function F(){e.input=function(c){for(var d=0,e=c.length;d<e;d++)s[c[d]]=c[d]in k;return s.list&&(s.list=!!b.createElement("datalist")&&!!a.HTMLDataListElement),s}("autocomplete autofocus list placeholder max min multiple pattern required step".split(" ")),e.inputtypes=function(a){for(var d=0,e,f,h,i=a.length;d<i;d++)k.setAttribute("type",f=a[d]),e=k.type!=="text",e&&(k.value=l,k.style.cssText="position:absolute;visibility:hidden;",/^range$/.test(f)&&k.style.WebkitAppearance!==c?(g.appendChild(k),h=b.defaultView,e=h.getComputedStyle&&h.getComputedStyle(k,null).WebkitAppearance!=="textfield"&&k.offsetHeight!==0,g.removeChild(k)):/^(search|tel)$/.test(f)||(/^(url|email)$/.test(f)?e=k.checkValidity&&k.checkValidity()===!1:e=k.value!=l)),r[a[d]]=!!e;return r}("search tel url email datetime date month week time datetime-local number range color".split(" "))}var d="2.6.2",e={},f=!0,g=b.documentElement,h="modernizr",i=b.createElement(h),j=i.style,k=b.createElement("input"),l=":)",m={}.toString,n="Webkit Moz O ms",o=n.split(" "),p=n.toLowerCase().split(" "),q={},r={},s={},t=[],u=t.slice,v,w={}.hasOwnProperty,x;!A(w,"undefined")&&!A(w.call,"undefined")?x=function(a,b){return w.call(a,b)}:x=function(a,b){return b in a&&A(a.constructor.prototype[b],"undefined")},Function.prototype.bind||(Function.prototype.bind=function(b){var c=this;if(typeof c!="function")throw new TypeError;var d=u.call(arguments,1),e=function(){if(this instanceof e){var a=function(){};a.prototype=c.prototype;var f=new a,g=c.apply(f,d.concat(u.call(arguments)));return Object(g)===g?g:f}return c.apply(b,d.concat(u.call(arguments)))};return e}),q.boxshadow=function(){return E("boxShadow")},q.textshadow=function(){return b.createElement("div").style.textShadow===""},q.cssanimations=function(){return E("animationName")},q.csstransitions=function(){return E("transition")};for(var G in q)x(q,G)&&(v=G.toLowerCase(),e[v]=q[G](),t.push((e[v]?"":"no-")+v));return e.input||F(),e.addTest=function(a,b){if(typeof a=="object")for(var d in a)x(a,d)&&e.addTest(d,a[d]);else{a=a.toLowerCase();if(e[a]!==c)return e;b=typeof b=="function"?b():b,typeof f!="undefined"&&f&&(g.className+=" "+(b?"":"no-")+a),e[a]=b}return e},y(""),i=k=null,function(a,b){function k(a,b){var c=a.createElement("p"),d=a.getElementsByTagName("head")[0]||a.documentElement;return c.innerHTML="x<style>"+b+"</style>",d.insertBefore(c.lastChild,d.firstChild)}function l(){var a=r.elements;return typeof a=="string"?a.split(" "):a}function m(a){var b=i[a[g]];return b||(b={},h++,a[g]=h,i[h]=b),b}function n(a,c,f){c||(c=b);if(j)return c.createElement(a);f||(f=m(c));var g;return f.cache[a]?g=f.cache[a].cloneNode():e.test(a)?g=(f.cache[a]=f.createElem(a)).cloneNode():g=f.createElem(a),g.canHaveChildren&&!d.test(a)?f.frag.appendChild(g):g}function o(a,c){a||(a=b);if(j)return a.createDocumentFragment();c=c||m(a);var d=c.frag.cloneNode(),e=0,f=l(),g=f.length;for(;e<g;e++)d.createElement(f[e]);return d}function p(a,b){b.cache||(b.cache={},b.createElem=a.createElement,b.createFrag=a.createDocumentFragment,b.frag=b.createFrag()),a.createElement=function(c){return r.shivMethods?n(c,a,b):b.createElem(c)},a.createDocumentFragment=Function("h,f","return function(){var n=f.cloneNode(),c=n.createElement;h.shivMethods&&("+l().join().replace(/\w+/g,function(a){return b.createElem(a),b.frag.createElement(a),'c("'+a+'")'})+");return n}")(r,b.frag)}function q(a){a||(a=b);var c=m(a);return r.shivCSS&&!f&&!c.hasCSS&&(c.hasCSS=!!k(a,"article,aside,figcaption,figure,footer,header,hgroup,nav,section{display:block}mark{background:#FF0;color:#000}")),j||p(a,c),a}var c=a.html5||{},d=/^<|^(?:button|map|select|textarea|object|iframe|option|optgroup)$/i,e=/^(?:a|b|code|div|fieldset|h1|h2|h3|h4|h5|h6|i|label|li|ol|p|q|span|strong|style|table|tbody|td|th|tr|ul)$/i,f,g="_html5shiv",h=0,i={},j;(function(){try{var a=b.createElement("a");a.innerHTML="<xyz></xyz>",f="hidden"in a,j=a.childNodes.length==1||function(){b.createElement("a");var a=b.createDocumentFragment();return typeof a.cloneNode=="undefined"||typeof a.createDocumentFragment=="undefined"||typeof a.createElement=="undefined"}()}catch(c){f=!0,j=!0}})();var r={elements:c.elements||"abbr article aside audio bdi canvas data datalist details figcaption figure footer header hgroup mark meter nav output progress section summary time video",shivCSS:c.shivCSS!==!1,supportsUnknownElements:j,shivMethods:c.shivMethods!==!1,type:"default",shivDocument:q,createElement:n,createDocumentFragment:o};a.html5=r,q(b)}(this,b),e._version=d,e._domPrefixes=p,e._cssomPrefixes=o,e.testProp=function(a){return C([a])},e.testAllProps=E,g.className=g.className.replace(/(^|\s)no-js(\s|$)/,"$1$2")+(f?" js "+t.join(" "):""),e}(this,this.document),function(a,b,c){function d(a){return"[object Function]"==o.call(a)}function e(a){return"string"==typeof a}function f(){}function g(a){return!a||"loaded"==a||"complete"==a||"uninitialized"==a}function h(){var a=p.shift();q=1,a?a.t?m(function(){("c"==a.t?B.injectCss:B.injectJs)(a.s,0,a.a,a.x,a.e,1)},0):(a(),h()):q=0}function i(a,c,d,e,f,i,j){function k(b){if(!o&&g(l.readyState)&&(u.r=o=1,!q&&h(),l.onload=l.onreadystatechange=null,b)){"img"!=a&&m(function(){t.removeChild(l)},50);for(var d in y[c])y[c].hasOwnProperty(d)&&y[c][d].onload()}}var j=j||B.errorTimeout,l=b.createElement(a),o=0,r=0,u={t:d,s:c,e:f,a:i,x:j};1===y[c]&&(r=1,y[c]=[]),"object"==a?l.data=c:(l.src=c,l.type=a),l.width=l.height="0",l.onerror=l.onload=l.onreadystatechange=function(){k.call(this,r)},p.splice(e,0,u),"img"!=a&&(r||2===y[c]?(t.insertBefore(l,s?null:n),m(k,j)):y[c].push(l))}function j(a,b,c,d,f){return q=0,b=b||"j",e(a)?i("c"==b?v:u,a,b,this.i++,c,d,f):(p.splice(this.i++,0,a),1==p.length&&h()),this}function k(){var a=B;return a.loader={load:j,i:0},a}var l=b.documentElement,m=a.setTimeout,n=b.getElementsByTagName("script")[0],o={}.toString,p=[],q=0,r="MozAppearance"in l.style,s=r&&!!b.createRange().compareNode,t=s?l:n.parentNode,l=a.opera&&"[object Opera]"==o.call(a.opera),l=!!b.attachEvent&&!l,u=r?"object":l?"script":"img",v=l?"script":u,w=Array.isArray||function(a){return"[object Array]"==o.call(a)},x=[],y={},z={timeout:function(a,b){return b.length&&(a.timeout=b[0]),a}},A,B;B=function(a){function b(a){var a=a.split("!"),b=x.length,c=a.pop(),d=a.length,c={url:c,origUrl:c,prefixes:a},e,f,g;for(f=0;f<d;f++)g=a[f].split("="),(e=z[g.shift()])&&(c=e(c,g));for(f=0;f<b;f++)c=x[f](c);return c}function g(a,e,f,g,h){var i=b(a),j=i.autoCallback;i.url.split(".").pop().split("?").shift(),i.bypass||(e&&(e=d(e)?e:e[a]||e[g]||e[a.split("/").pop().split("?")[0]]),i.instead?i.instead(a,e,f,g,h):(y[i.url]?i.noexec=!0:y[i.url]=1,f.load(i.url,i.forceCSS||!i.forceJS&&"css"==i.url.split(".").pop().split("?").shift()?"c":c,i.noexec,i.attrs,i.timeout),(d(e)||d(j))&&f.load(function(){k(),e&&e(i.origUrl,h,g),j&&j(i.origUrl,h,g),y[i.url]=2})))}function h(a,b){function c(a,c){if(a){if(e(a))c||(j=function(){var a=[].slice.call(arguments);k.apply(this,a),l()}),g(a,j,b,0,h);else if(Object(a)===a)for(n in m=function(){var b=0,c;for(c in a)a.hasOwnProperty(c)&&b++;return b}(),a)a.hasOwnProperty(n)&&(!c&&!--m&&(d(j)?j=function(){var a=[].slice.call(arguments);k.apply(this,a),l()}:j[n]=function(a){return function(){var b=[].slice.call(arguments);a&&a.apply(this,b),l()}}(k[n])),g(a[n],j,b,n,h))}else!c&&l()}var h=!!a.test,i=a.load||a.both,j=a.callback||f,k=j,l=a.complete||f,m,n;c(h?a.yep:a.nope,!!i),i&&c(i)}var i,j,l=this.yepnope.loader;if(e(a))g(a,0,l,0);else if(w(a))for(i=0;i<a.length;i++)j=a[i],e(j)?g(j,0,l,0):w(j)?B(j):Object(j)===j&&h(j,l);else Object(a)===a&&h(a,l)},B.addPrefix=function(a,b){z[a]=b},B.addFilter=function(a){x.push(a)},B.errorTimeout=1e4,null==b.readyState&&b.addEventListener&&(b.readyState="loading",b.addEventListener("DOMContentLoaded",A=function(){b.removeEventListener("DOMContentLoaded",A,0),b.readyState="complete"},0)),a.yepnope=k(),a.yepnope.executeStack=h,a.yepnope.injectJs=function(a,c,d,e,i,j){var k=b.createElement("script"),l,o,e=e||B.errorTimeout;k.src=a;for(o in d)k.setAttribute(o,d[o]);c=j?h:c||f,k.onreadystatechange=k.onload=function(){!l&&g(k.readyState)&&(l=1,c(),k.onload=k.onreadystatechange=null)},m(function(){l||(l=1,c(1))},e),i?k.onload():n.parentNode.insertBefore(k,n)},a.yepnope.injectCss=function(a,c,d,e,g,i){var e=b.createElement("link"),j,c=i?h:c||f;e.href=a,e.rel="stylesheet",e.type="text/css";for(j in d)e.setAttribute(j,d[j]);g||(n.parentNode.insertBefore(e,n),m(c,0))}}(this,document),Modernizr.load=function(){yepnope.apply(window,[].slice.call(arguments,0))};
/*jslint regexp: true, vars: true, white: true, browser: true */
/*global jQuery, google */
(function($){	
	var $lieux,
		gmap,
		$gabarit = [],
		windowWidth,
		aPosition = [],
		aMarker = [],
		tempMarker,
		aKeyWord = [],
		iRadius,
		oCoords,
		infobox,
		baseDir = location.origin+'/public/skate/',
		$body,
		sLocMode = 'city',
		styles = [
		    {
		      stylers: [
		        { hue: "#00ffe6" },
		        { saturation: -20 }
		      ]
		    },{
		      featureType: "road",
		      elementType: "geometry",
		      stylers: [
		        { lightness: 100 },
		        { visibility: "simplified" }
		      ]
		    },{
		      featureType: "road",
		      elementType: "labels",
		      stylers: [
		        { visibility: "off" }
		      ]
		    }
		  ],
		styledMap,
		image,

	getPosition = function(e){
		e.preventDefault();
		var mode = e.currentTarget.className;
		getKeyWord();
		if(mode == 'search'){
			getGooglePosition($('.place'));
		}
		else{
			getNavigatorPosition();
		}
		$('#img_and_map').addClass('active');
	},
	getGooglePosition = function($obj){
		if($obj.val() != ''){
			var address = $obj.val()
				geocoder = new google.maps.Geocoder();
			geocoder.geocode({
				address: address
			},function(results,status){
				if(status == "OK"){
					aPosition['lat'] = results[0].geometry.location.lat();
					aPosition['lon'] = results[0].geometry.location.lng();
					changeMapPosition(aPosition);
				}
			});
		}
		else{
			refreshSpot();
		}
	},
	getNavigatorPosition = function(){
		if(navigator.geolocation) {
			// L’API est disponible
			navigator.geolocation.getCurrentPosition(function(position) {
				aPosition['lat'] = position.coords.latitude;
				aPosition['lon'] = position.coords.longitude;
				changeMapPosition(aPosition);
			});
		}
	},
	getKeyWord = function(){
		if($('.key-word').val() != ''){
			aKeyWord = $('.key-word').val();
		}
		else if(aKeyWord != ''){
			aKeyWord = '';
		}
	}
	generateSpotMap = function(){

		if($('#bigmap').length>0){
			//Création du style 
			styledMap = new google.maps.StyledMapType(styles,{name:"Spot Style"});

			//Récupération de la position de départ (par défaut: Bruxelles)
	    	coords = $('#bigmap').attr('data-position').split(',');
	    	aPosition['lat'] = parseFloat(coords[0]);
	        aPosition['lon'] = parseFloat(coords[1]);

		    //Récupération des spots
			//$lieux = $('article.spot');

	        //Paramétrage de la google map
			gmap = new google.maps.Map(document.getElementById('bigmap'),{
				zoom: 14,
				controls: false,
				mapTypeId: google.maps.MapTypeId.ROADMAP,
				scrollwheel: true,
				center: new google.maps.LatLng((aPosition['lat']),aPosition['lon']),
				mapTypeControlOptions: {
		      		mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'map_style']
		    	}
			});


			// Paramétrage de l'infobox
			var infobox = new InfoBox({
		        content: '',
		        disableAutoPan: false,
		        maxWidth: 100,
		        pixelOffset: new google.maps.Size(-20,-67),
		        zIndex: null,
		        boxStyle: {
		            background: "url('./images/map/marker.png')",
		            opacity: 1,
		            height: "75px",
		            width: "68px"
		        },
		        closeBoxMargin: "4px 4px 2px 2px",
		        closeBoxURL: "",
		        infoBoxClearance: new google.maps.Size(1, 1)
		    });

			//Ajout d'écouteur d'évenement
			google.maps.event.addListener(gmap, 'zoom_changed', refreshSpot);
			google.maps.event.addListener(gmap, 'dragend', function(){
				aPosition['lat'] = gmap.center.lat();
				aPosition['lon'] = gmap.center.lng();
				refreshSpot();
			});

			//Ajout des spots sur la map
			refreshSpot();

			mtest();
			//Application du style
			//gmap.mapTypes.set('map_style', styledMap);
			//gmap.setMapTypeId('map_style');	
		}
	},
	changeMapPosition = function(aInfo){
		gmap.panTo(new google.maps.LatLng(aInfo['lat'],aInfo['lon']));
		refreshSpot();
	},
	refreshSpot = function(){

		console.log({lat:aPosition['lat'],lon:aPosition['lon'],rad:iRadius, key:aKeyWord});
		calculRadius();
		$.ajax({
			url:baseDir+'spot/list',
			type:'GET',
			success: function(data){
				clearMarkers();
				clearList();
				for(var i in data){
					var spot = data[i];

					aMarker[spot['id']] = new google.maps.Marker({
						title: spot['name'],
						spot_id: spot['id'],
						map:gmap,
						image: (spot['photo']!= null)? spot['photo']['url'] : '',
						position:new google.maps.LatLng(parseFloat(spot['lat']),parseFloat(spot['lon'])),				
				        icon: image,
				        infowindow: infobox
					});
					google.maps.event.addListener(aMarker[spot['id']], 'mouseover', function() {
						var html = '<div style="padding:10px;">';
							html += (this.image)? '<img src="'+baseDir+'uploads/spot/thumbnail/'+this.image+'" height="50" width="50" style="float:left; margin-right:10px" />' : '';
							html += '<p>'+this.title+'</p>';
						this.setZIndex(google.maps.Marker.MAX_ZINDEX + 1);
				  		this.infowindow.open(gmap,this);
				  		this.infowindow.setContent(html);
					});
					google.maps.event.addListener(aMarker[spot['id']],'mouseout',function(){
						this.infowindow.close();
					});
					google.maps.event.addListener(aMarker[spot['id']],'click',function(){
						window.location.href=baseDir+'spot/'+this.spot_id;
					});
				};
				
			},
            error: function (xhr, status, error) {
                console.log(status);
                console.log(xhr.responseText);
            },
			data: {lat:aPosition['lat'],lon:aPosition['lon'],rad:iRadius, key:aKeyWord}
		});
	},
	calculRadius = function(){
	    iRadius = 25000/Math.pow(2,gmap.zoom);
	    if($('#bigmap').width() >= $('#bigmap').height()){
	    	iRadius *= ($('#bigmap').width()/256)/2;
	    }
	    else{
	    	iRadius *= ($('#bigmap').height()/256)/2;
	    }
	},
	localiser = function(e){
		var icon = {
		    url: '../images/map/big_pointer.png',
		    // This marker is 20 pixels wide by 32 pixels tall.
		    size: new google.maps.Size(30, 36),
		    // The origin for this image is 0,0.
		    origin: new google.maps.Point(0,0),
		    // The anchor for this image is the base of the flagpole at 0,32.
		    anchor: new google.maps.Point(0, 32)
		};
		e.preventDefault();
		if(sLocMode == "city"){
			var address;
			if($('#address').val() != '' && $('#address').val() != undefined){
				address = $('#address').val();
			
				var geocoder = new google.maps.Geocoder();
				geocoder.geocode({
					//address: $('#adresse').val()+','+$('#ville').val()+", Belgique"
					address: address
				},function(results,status){
					if(status == "OK"){
						document.getElementsByName('lat')[0].value = results[0].geometry.location.lat();
						document.getElementsByName('lon')[0].value = results[0].geometry.location.lng();

						aPosition['lat'] = results[0].geometry.location.lat();
						aPosition['lon'] = results[0].geometry.location.lng();
						changeMapPosition(aPosition);
						if(tempMarker != null)
							tempMarker.setMap(null);
						tempMarker = new google.maps.Marker({
						map:gmap,
						position:new google.maps.LatLng(parseFloat(results[0].geometry.location.lat()),parseFloat(results[0].geometry.location.lng())),				
				        icon: icon,
				        infowindow: infobox
					});
					}
					else
					{
						$('form').append('<p>Impossible de calculer votre position.</p>');
					}
				});
			}
		}
	},
	// Sets the map on all markers in the array.
	setAllMap = function(map) {
		for(var i in aMarker){
		    aMarker[i].setMap(map);
		}
	},
	clearList = function(){
		$('#spot-list').html('');
	}
	// Removes the markers from the map, but keeps them in the array.
	clearMarkers = function() {
	  setAllMap(null);
	}

	// Shows any markers currently in the array.
	showMarkers = function() {
	  setAllMap(gmap);
	}

	// Deletes all markers in the array by removing references to them.
	deleteMarkers = function() {
	  clearMarkers();
	  aMarker = [];
	}

	createClone = function(spot){
		var $fiche = $gabarit['spot'].clone();
			$fiche.attr('data-coord',spot['lat']+','+spot['lon']);
			$fiche.find('strong').text(spot['name']);
			$fiche.find('.distance').text(spot['distance']>1?Math.round(spot['distance'])+'km':spot['distance']*1000+'m');
			$fiche.on('click',function(){
				var $point = this.getAttribute('data-coord').split(',');
				gmap.panTo(new google.maps.LatLng($point[0],$point[1]));
			});
		$('#spot-list').append($fiche);
	}

		
	
	$(function(){

		image = {
		    url: baseDir+'images/map/small_pointer.png',
		    // This marker is 20 pixels wide by 32 pixels tall.
		    size: new google.maps.Size(30, 36),
		    // The origin for this image is 0,0.
		    origin: new google.maps.Point(0,0),
		    // The anchor for this image is the base of the flagpole at 0,32.
		    anchor: new google.maps.Point(0, 32)
		};
		infobox = new InfoBox({
	         //content: document.getElementById("infobox"),
	         content: '',
	         disableAutoPan: false,
	         maxWidth: 100,
	         pixelOffset: new google.maps.Size(-100,-120),
	         zIndex: null,
	         boxStyle: {
	            //background: "url('../images/map/marker.png')",
	            background: '#FFF',
	            opacity: 1,
	            height: "70px",
	            width: "200px",
	            boxShadow: '0px 1px 2px rgba(0,0,0,.2)'
	        },
	        closeBoxMargin: "4px 4px 2px 2px",
	        closeBoxURL: "",
	        infoBoxClearance: new google.maps.Size(1, 1)
	    });
		$body = $('body')[0];
		$('#address').on('blur',localiser);
		$('.search').on('submit',getPosition);
		$('.getPosition').on('click',getPosition);
		$('.key-word').on('keyup',function(){
			$('.key-word').val($(this).val()); 
		})
		$('.place').on('keyup',function(){
			$('.place').val($(this).val()); 
		})
		if($body.id != 'home'){
			$('#connexion').hide();
		}
		$gabarit['spot'] = $('article.spot');
		generateSpotMap();
		$('.content img').box();
		$('aside img').box();
		$('.connexion, .inscription').on('click',function(e){
			e.preventDefault();
			$(this).toggleClass('onLogin', 400, 'easeOutSine');
			$('.boxoverlay').fadeToggle(400);
			$('#connexion').fadeToggle(400);
		});
		$('#file input').on('change',function(e){
			var name = $(this).val();
			$('#file').addClass('complete')
			.find('label').html('Fichier selectionné');
		});

	});

})(jQuery);