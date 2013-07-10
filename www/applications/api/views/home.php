<style>
body { margin:0; padding:0; }
#map { position:absolute; top:0; bottom:0; width:100%; }
</style>

<div id='map'></div>

<script type='text/javascript'>
var map = L.mapbox.map('map', 'caarloshugo.map-1l67y9mj', { minZoom: 10, maxZoom:19, }).setView([19.404,-99], 11);

// map.dragging.disable();
map.touchZoom.disable();
map.doubleClickZoom.disable();
// map.scrollWheelZoom.disable();


<?php foreach($stops as $stop) { ?>
	L.marker([<?php echo $stop["stop_lat"];?>, <?php echo $stop["stop_lon"];?>], {
		icon: L.icon({
			iconUrl: '<?php print $this->themePath; ?>/css/renders/rail-18.png',
			iconSize:     [18, 18],
			iconAnchor:   [1, 1],
			popupAnchor:  [0, 0]
		})
	}).addTo(map).bindPopup('<p><?php echo $stop["stop_name"];?></p>');
<?php } ?>

</script>
