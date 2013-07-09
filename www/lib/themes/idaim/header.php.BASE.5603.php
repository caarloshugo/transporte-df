<!DOCTYPE html>
<html lang="<?php print get("webLang"); ?>">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title><?php print $this->getTitle(); ?></title>
		<link href="<?php print $this->themePath; ?>/css/style.css" rel="stylesheet">
		<link href="<?php print $this->themePath; ?>/css/pack.css" rel="stylesheet">
		<link href="<?php print $this->themePath; ?>/css/tabs.css" rel="stylesheet">
		<link href="<?php print $this->themePath; ?>/css/dart.css" rel="stylesheet">
		<script src="<?php print $this->themePath; ?>/js/d3.v2.js"></script>
		<script src="<?php print $this->themePath; ?>/js/kinetic-v3.8.3.js"></script>
		<script src="<?php print $this->themePath; ?>/js/jquery.js"></script>
		<script src="<?php print $this->themePath; ?>/js/functions.js"></script>
		<script src="<?php print $this->themePath; ?>/js/ang.js"></script>
		<script src="<?php print $this->themePath; ?>/js/donap.js"></script>
		<script src="<?php print $this->themePath; ?>/js/donab.js"></script>
		<script src="<?php print $this->themePath; ?>/js/d3.layout.js"></script>
		<script src="<?php print $this->themePath; ?>/js/dart.js"></script>
		<script src="<?php print $this->themePath; ?>/js/dartb.js"></script>
		<script src="<?php print $this->themePath; ?>/js/dartp.js"></script>
		
		<?php print $this->getCSS(); ?>
		<script>
			var webURL    = "<?php echo get("webURL");?>";
			var themePath = "<?php echo $this->themePath; ?>";
		</script>
	</head>

	
<body onload="init();">
	<div id="container">
		<div id="header">
			<div id="header-content">
				<div id="logo">
					<a href="/"><img src="<?php print $this->themePath; ?>/css/images/logo.png" title="Nuestros Recursos"/></a>
				</div>
				<div id="menu-top">
					<ul>
						<li><a href="/quienes-somos" title="Quiénes somos">Qui&eacute;nes somos</a></li>
						<li><a href="/indice" title="Índice">&Iacute;ndice</a></li>
						<li><a href="/contacto" title="Contacto">Contacto</a></li>
						<li>
							<a href="" class="social social-facebook" title="Facebook Nuestros Recursos">Facebook Nuestros Recursos</a>
							<a href="" class="social social-rss" title="Rss Nuestros Recursos">Rss Nuestros Recursos</a>
							<a href="" class="social social-twitter" title="Twitter Nuestros Recursos">Twitter Nuestros Recursos</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
