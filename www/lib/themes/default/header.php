<!DOCTYPE html>
<html lang="<?php print get("webLang"); ?>">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title><?php print $this->getTitle(); ?></title>
		
		<link href="<?php print path("vendors/css/frameworks/bootstrap/bootstrap.min.css", "zan"); ?>" rel="stylesheet">
		<link href="<?php print $this->themePath; ?>/css/style.css" rel="stylesheet">
		
		<script src='http://api.tiles.mapbox.com/mapbox.js/v1.0.2/mapbox.js'></script>
		<link href='http://api.tiles.mapbox.com/mapbox.js/v1.0.2/mapbox.css' rel='stylesheet' />
		<!--[if lte IE 8]>
			<link href='http://api.tiles.mapbox.com/mapbox.js/v1.0.2/mapbox.ie.css' rel='stylesheet' >
		<![endif]-->
		
		<?php print $this->getCSS(); ?>
	</head>

	<body>
