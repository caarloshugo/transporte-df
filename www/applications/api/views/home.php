<style>
body { margin:0; padding:0; }
#map { position:absolute; top:0; bottom:0; width:100%; }
</style>

<div id='map'></div>

<script type='text/javascript'>
var map = L.mapbox.map('map', 'caarloshugo.map-1l67y9mj', { minZoom: 10, maxZoom:19, }).setView([19.41,-99.1], 12);

// map.dragging.disable();
map.touchZoom.disable();
map.doubleClickZoom.disable();
// map.scrollWheelZoom.disable();


<?php foreach($routes as $route) { ?>
	<?php foreach($route["stops"][0] as $stop) { ?>
		L.marker([<?php echo $stop["stop_lat"];?>, <?php echo $stop["stop_lon"];?>], {
			icon: L.icon({
				iconUrl: 'https://tiles.mapbox.com/v3/marker/pin-l-rail+<?php echo $route["route_color"];?>.png',
				iconSize:     [18, 18],
				iconAnchor:   [1, 1],
				popupAnchor:  [0, 0]
			})
		}).addTo(map).bindPopup('<p><?php echo $stop["stop_name"];?></p>');
	<?php } ?>
<?php } ?>

</script>
