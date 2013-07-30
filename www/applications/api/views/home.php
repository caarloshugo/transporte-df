<style>
body { margin:0; padding:0; }
#map { position:absolute; top:0; bottom:0; width:100%; }
	 
#map-ui {
	position: absolute;
	top: 10px;
	right: 10px;
	z-index: 100;
}

#map-ui ul {
	list-style: none;
	margin: 0;
	padding: 0;
}

#map-ui a {
	font-size: 13px;
	background: #FFF;
	color: #3C4E5A;
	display: block;
	margin: 0;
	padding: 0;
	border: 1px solid #BBB;
	border-bottom-width: 0;
	min-width: 138px;
	padding: 10px;
	text-decoration: none;
}

#map-ui a:hover {
	background: #ECF5FA;
}

#map-ui li:last-child a {
	border-bottom-width: 1px;
	-webkit-border-radius: 0 0 3px 3px;
	border-radius: 0 0 3px 3px;
}

#map-ui li:first-child a {
	-webkit-border-radius: 3px 3px 0 0;
	border-radius: 3px 3px 0 0;
}

#map-ui a.active {
	background: #3887BE;
	border-color: #3887BE;
	color: #FFF;
}

#info-marker {
	position: absolute;
	top: 70px;
	left: 10px;
	z-index: 99;
}

#info-marker p {
	font-size: 13px;
	background: #FFF;
	color: #3C4E5A;
	display: block;
	margin: 0;
	padding: 0;
	border: 1px solid #BBB;
	border-bottom-width: 0;
	min-width: 138px;
	padding: 10px;
	text-decoration: none;
	opacity:0.7;
}

#info-marker2 {
	position: absolute;
	top: 117px;
	left: 10px;
	z-index: 99;
}

#info-marker2 input {
	font-size: 13px;
	background: #FFF;
	color: #3C4E5A;
	display: block;
	margin: 0;
	padding: 0;
	border: 1px solid #BBB;
	border-bottom-width: 0;
	min-width: 138px;
	padding: 10px;
	text-decoration: none;
	opacity:0.7;
	float: left;
}

.submit { min-width: 43px !important; }
</style>

	
<div id='map-ui'>
    <ul>
        <li><a href='' class='filter-e active' id='filter-metro'>Metro</a></li>
        <li><a href='' class="filter-e" id='filter-metrobus'>Metrobus</a></li>
        <li><a href='' class="filter-e" id='filter-ste'>STE</a></li>
        <li><a href='' class='filter-e' id='filter-sub'>SUB</a></li>
    </ul>
</div>

<div id="info-marker">
	<p class="title-marker">Mapa del transporte de la ciudad de México</p>
</div>


<div id="info-marker2">
	<form action="/transporte-df" method="post">
		<input class="text" type="text" name="text_search" value="San lázaro">
		<input class="submit" type="submit" name="send" value="enviar">
	</form>
</div>

<div id='map'></div>

<script type='text/javascript'>
//Mapbox	
var map = L.mapbox.map('map', 'caarloshugo.map-1l67y9mj', { minZoom: 10, maxZoom:19, }).setView([19.41,-99.1], 12);



//Foursquare
var config = {
	apiKey: 'J5DRTJ3O5O2Z10SJ4MX4JTMDTGJZWG2LBD0HN44VC23KFKMD',
	authUrl: 'https://foursquare.com/',
	apiUrl: 'https://api.foursquare.com/'
};

/* Attempt to retrieve access token from URL. */
function doAuthRedirect() {
	var redirect = window.location.href.replace(window.location.hash, '');
	var url = config.authUrl + 'oauth2/authenticate?response_type=token&client_id=' + config.apiKey +
	'&redirect_uri=' + encodeURIComponent(redirect) +
	'&state=' + encodeURIComponent($.bbq.getState('req') || 'users/self');
	window.location.href = url;
};

if($.bbq.getState('access_token')) {	
// If there is a token in the state, consume it
	var token = $.bbq.getState('access_token');
	$.bbq.pushState({}, 2);
} else if ($.bbq.getState('error')) {
} else {
	//doAuthRedirect();
}
  

function getVenues(lat, lon) {
	$.getJSON(config.apiUrl + 'v2/venues/explore?ll=' + lat + ',' + lon + '&limit=15&radius=300&time=any&day=any&oauth_token=' + window.token + '&v=2013071', {}, function(data) {
      
      $(".foursquare-marker").remove();
      
      venues = data['response']['groups'][0]['items'];
    
      /* Place marker for each venue. */
      for(var i = 0; i < venues.length; i++) {
        /* Get marker's location */
        var latLng = new L.LatLng(
          venues[i]['venue']['location']['lat'],
          venues[i]['venue']['location']['lng']
        );
		
        var marker = new L.Marker(latLng, {icon: L.icon({ iconUrl: '<?php print $this->themePath; ?>/css/images/marker-icon.png', iconSize: [25, 41], iconAnchor: [0, 0], popupAnchor: [0, -25], className : 'foursquare-marker' })})
          .bindPopup(venues[i]['venue']['name'], { closeButton: false })
          .on('mouseover', function(e) { this.openPopup(); })
          .on('mouseout', function(e) { this.closePopup(); });
        map.addLayer(marker);
      }
    });
    
    map.setView([lat, lon], 16, {pan: {animate: true}}); 
    
    return false;
}



//Mapbox
// map.dragging.disable();
map.touchZoom.disable();
map.doubleClickZoom.disable();
// map.scrollWheelZoom.disable();

var marker = "";
<?php foreach($metro as $route) { ?>
	<?php foreach($route["stops"] as $stop) { ?>
		marker = L.marker([<?php echo $stop["stop_lat"];?>, <?php echo $stop["stop_lon"];?>], {
			icon: L.icon({
				iconUrl     : '<?php print $this->themePath; ?>/css/renders/marker-stroked-24.png',
				iconSize    : [18, 18],
				iconAnchor  : [0, 0],
				popupAnchor : [0, 0],
				className   : 'agency <?php echo $route["agency_id"];?>'
			})
		}).addTo(map);
		
		marker.on('click', function(e) {
			$(".title-marker").html("<?php echo $stop["stop_name"];?>" + ' - <a href="" onclick="getVenues(<?php echo $stop["stop_lat"];?>,<?php echo $stop["stop_lon"];?>)">Lugares cercanos</a>');
		});
		
		marker.on('mouseover', function(e) {
			$(".title-marker").html("<?php echo $stop["stop_name"];?>");
		});
	<?php } ?>
<?php } ?>

<?php foreach($metrobus as $route) { ?>
	<?php foreach($route["stops"] as $stop) { ?>
		L.marker([<?php echo $stop["stop_lat"];?>, <?php echo $stop["stop_lon"];?>], {
			icon: L.icon({
				iconUrl     : '<?php print $this->themePath; ?>/css/renders/marker-stroked-24.png',
				iconSize    : [18, 18],
				iconAnchor  : [0, 0],
				popupAnchor : [0, 0],
				className   : 'agency <?php echo $route["agency_id"];?>'
			})
		}).addTo(map).bindPopup('<p><?php echo $stop["stop_name"];?></p>');
	<?php } ?>
<?php } ?>

<?php foreach($ste as $route) { ?>
	<?php foreach($route["stops"] as $stop) { ?>
		L.marker([<?php echo $stop["stop_lat"];?>, <?php echo $stop["stop_lon"];?>], {
			icon: L.icon({
				iconUrl     : '<?php print $this->themePath; ?>/css/renders/marker-stroked-24.png',
				iconSize    : [18, 18],
				iconAnchor  : [0, 0],
				popupAnchor : [0, 0],
				className   : 'agency <?php echo $route["agency_id"];?>'
			})
		}).addTo(map).bindPopup('<p><?php echo $stop["stop_name"];?></p>');
	<?php } ?>
<?php } ?>

<?php foreach($sub as $route) { ?>
	<?php foreach($route["stops"] as $stop) { ?>
		L.marker([<?php echo $stop["stop_lat"];?>, <?php echo $stop["stop_lon"];?>], {
			icon: L.icon({
				iconUrl     : '<?php print $this->themePath; ?>/css/renders/marker-stroked-24.png',
				iconSize    : [18, 18],
				iconAnchor  : [0, 0],
				popupAnchor : [0, 0],
				className   : 'agency <?php echo $route["agency_id"];?>'
			})
		}).addTo(map).bindPopup('<p><?php echo $stop["stop_name"];?></p>');
	<?php } ?>
<?php } ?>
		
$(document).ready( function () {
	$("#filter-metro").click( function() {
		$(".filter-e").removeClass("active");
		$("#filter-metro").addClass("active");
		
		$(".agency").hide();
		$(".METRO").show();
	});
	
	$("#filter-metrobus").click( function() {
		$(".filter-e").removeClass("active");
		$("#filter-metrobus").addClass("active");
		
		$(".agency").hide();
		$(".MB").show();
	});
	
	$("#filter-rtp").click( function() {
		$(".filter-e").removeClass("active");
		$("#filter-rtp").addClass("active");
		
		$(".agency").hide();
		$(".RTP").show();
	});
	
	$("#filter-ste").click( function() {
		$(".filter-e").removeClass("active");
		$("#filter-ste").addClass("active");
		
		$(".agency").hide();
		$(".STE").show();
	});
	
	$("#filter-sub").click( function() {
		$(".filter-e").removeClass("active");
		$("#filter-sub").addClass("active");
		
		$(".agency").hide();
		$(".SUB").show();
	});
	
	$(".agency").hide();
	$(".METRO").show();
});
 
</script>


