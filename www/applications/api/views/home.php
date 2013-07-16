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
	top: 50px;
	left: 10px;
	z-index: 99;
}

</style>

	
<div id='map-ui'>
    <ul>
        <li><a href='#' class='filter-e active' id='filter-metro'>Metro</a></li>
        <li><a href='#' class="filter-e" id='filter-metrobus'>Metrobus</a></li>
        <li><a href='#' class='filter-e' id='filter-rtp'>RTP</a></li>
        <li><a href='#' class="filter-e" id='filter-ste'>STE</a></li>
        <li><a href='#' class='filter-e' id='filter-sub'>SUB</a></li>
    </ul>
</div>

<div id="info-marker">
	<p>Hello world</p>
</div>

<div id='map'></div>

<script type='text/javascript'>
var map = L.mapbox.map('map', 'caarloshugo.map-1l67y9mj', { minZoom: 10, maxZoom:19, }).setView([19.41,-99.1], 12);

// map.dragging.disable();
map.touchZoom.disable();
map.doubleClickZoom.disable();
// map.scrollWheelZoom.disable();
 
<?php foreach($metro as $route) { ?>
	<?php foreach($route["stops"] as $stop) { ?>
		L.marker([<?php echo $stop["stop_lat"];?>, <?php echo $stop["stop_lon"];?>], {
			icon: L.icon({
				iconUrl     : '<?php print $this->themePath; ?>/css/renders/marker-stroked-24.png',
				iconSize    : [18, 18],
				iconAnchor  : [0, 0],
				popupAnchor : [0, 0],
				className   : 'agency <?php echo $route["agency_id"];?>'
			})
		}).addTo(map).bindPopup('<p><?php echo $stop["stop_name"];?></p>').on('click', alert("as"));
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

<?php foreach($rtp as $route) { ?>
	<?php foreach($route["stops"] as $stop) { ?>
		L.marker([<?php echo $stop["stop_lat"];?>, <?php echo $stop["stop_lon"];?>], {
			icon: L.icon({
				iconUrl     : '<?php print $this->themePath; ?>/css/renders/marker-stroked-24.png',
				iconSize    : [18, 18],
				iconAnchor  : [0, 0],
				popupAnchor : [0, 0],
				className   : 'agency <?php echo $route["agency_id"];?>'
			})
		}).addTo(map).bindPopup('<p><?php echo addslashes($stop["stop_name"]);?></p>');
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


