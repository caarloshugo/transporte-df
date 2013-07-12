<style>
body { margin:0; padding:0; }
#map { position:absolute; top:0; bottom:0; width:100%; }
.leaflet-container img { background-position: 50% 2 px; }
#crime {
	height: 100px;
    position: relative;
    top: 0;
    width: 100px;
    z-index: 1;
}
</style>

	
<div style="position:relative; height:500px; width:100%;" class="clear">
	<div id="crime" class="layers">
			<a id="control" data-control="layer" href="#control">control</a>
	</div>
</div>

<div id='map'></div>

<script type='text/javascript'>
var map = L.mapbox.map('map', 'caarloshugo.map-1l67y9mj', { minZoom: 10, maxZoom:19, }).setView([19.41,-99.1], 12);

// map.dragging.disable();
map.touchZoom.disable();
map.doubleClickZoom.disable();
// map.scrollWheelZoom.disable();


<?php foreach($routes as $route) { ?>
	<?php foreach($route["stops"] as $stop) { ?>
		L.marker([<?php echo $stop["stop_lat"];?>, <?php echo $stop["stop_lon"];?>], {
			icon: L.icon({
				iconUrl: '<?php print $this->themePath; ?>/css/renders/rail-18-<?php echo $route["route_color"];?>.png',
				iconSize:     [18, 18],
				iconAnchor:   [0, 0],
				popupAnchor:  [0, 0]
			})
		}).addTo(map).bindPopup('<p><?php echo $stop["stop_name"];?></p>');
	<?php } ?>
<?php } ?>

</script>
