<!DOCTYPE html>
<html lang="<?php print get("webLang"); ?>">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title><?php print $this->getTitle(); ?></title>
		
		<script src='http://code.jquery.com/jquery-1.10.2.min.js'></script>
		<script src='//api.tiles.mapbox.com/mapbox.js/v1.2.0/mapbox.js'></script>
		<script src="<?php print $this->themePath; ?>/js/apismaples.js"></script>
		<script src="<?php print $this->themePath; ?>/js/jquery.ba-bbq.js"></script>
	    <link href='//api.tiles.mapbox.com/mapbox.js/v1.2.0/mapbox.css' rel='stylesheet' />
	    <!--[if lte IE 8]>
			<link href='//api.tiles.mapbox.com/mapbox.js/v1.2.0/mapbox.ie.css' rel='stylesheet' >
		<![endif]-->
	</head>
	<body>
