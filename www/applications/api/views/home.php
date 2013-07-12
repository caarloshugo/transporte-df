<style>
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
    
</style>

	
<div id='map-ui'>
    <ul>
        <li><a href='#' id='filter-metro'>Metro</a></li>
        <li><a href='#' class='active' id='filter-metrobus'>Metrobus</a></li>
    </ul>
</div>

<div id='map'></div>

<script type='text/javascript'>
var map = L.mapbox.map('map', 'caarloshugo.map-1l67y9mj', { minZoom: 10, maxZoom:19, }).setView([19.41,-99.1], 12);

// map.dragging.disable();
map.touchZoom.disable();
map.doubleClickZoom.disable();
// map.scrollWheelZoom.disable();

var metro    = document.getElementById('filter-metro');
var metrobus = document.getElementById('filter-metrobus');

console.log(metro);
metro.onclick = function(e) {
	metrobus.className = '';
	this.className = 'active';
	// The setFilter function takes a GeoJSON feature object
	// and returns true to show it or false to hide it.
	map.markerLayer.setFilter(function(f) {
		console.log(f);
		return f.properties['marker-symbol'] === 'fast-food';
	});
	
	return false;
};

metrobus.onclick = function() {
	metro.className = '';
	this.className = 'active';
	map.markerLayer.setFilter(function(f) {
		console.log(f);
		// Returning true for all markers shows everything.
		return true;
	});
	
	return false;
};
    
<?php foreach($metro as $route) { ?>
	<?php foreach($route["stops"] as $stop) { ?>
		L.marker([<?php echo $stop["stop_lat"];?>, <?php echo $stop["stop_lon"];?>], {
			icon: L.icon({
				iconUrl     : '<?php print $this->themePath; ?>/css/renders/rail-18-<?php echo $route["route_color"];?>.png',
				iconSize    :     [18, 18],
				iconAnchor  :   [0, 0],
				popupAnchor :  [0, 0],
				className   : '<?php echo $route["agency_id"];?>'
			})
		}).addTo(map).bindPopup('<p><?php echo $stop["stop_name"];?></p>');
	<?php } ?>
<?php } ?>

<?php foreach($metrobus as $route) { ?>
	<?php foreach($route["stops"] as $stop) { ?>
		L.marker([<?php echo $stop["stop_lat"];?>, <?php echo $stop["stop_lon"];?>], {
			icon: L.icon({
				iconUrl     : '<?php print $this->themePath; ?>/css/renders/rail-18-<?php echo $route["route_color"];?>.png',
				iconSize    :     [18, 18],
				iconAnchor  :   [0, 0],
				popupAnchor :  [0, 0],
				className   : '<?php echo $route["agency_id"];?>'
			})
		}).addTo(map).bindPopup('<p><?php echo $stop["stop_name"];?></p>');
	<?php } ?>
<?php } ?>

 map.markerLayer.setFilter(function(f) {
	return true;
});
        
</script>


