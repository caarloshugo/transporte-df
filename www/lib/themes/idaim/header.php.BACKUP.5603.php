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
		<script src="<?php print $this->themePath; ?>/js/donab_n.js"></script>
		<script src="<?php print $this->themePath; ?>/js/donap_n.js"></script>
		<script src="<?php print $this->themePath; ?>/js/d3.layout.js"></script>
		<script src="<?php print $this->themePath; ?>/js/dart.js"></script>
		<script src="<?php print $this->themePath; ?>/js/dartb.js"></script>
		<script src="<?php print $this->themePath; ?>/js/dartp.js"></script>
		<script src="<?php print $this->themePath; ?>/js/superfish.js"></script>
		
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
					<a href="http://fundar.org.mx/idaim/"><img src="<?php print $this->themePath; ?>/css/images/logo.png" title="Nuestros Recursos"/></a>
				</div>
<<<<<<< HEAD
			<div id="top-menu">
				<ul class="nav sf-js-enabled" id="menu-main" style="visibility: visible;"><li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item menu-item-10" id="menu-item-10"><a href="http://fundar.org.mx/idaim/blog/quienes-somos"><span class="main_text">Quiénes somos</span><span class="menu_slide" style="display: block;">Quiénes somos</span></a></li>
<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-11" id="menu-item-11"><a href="http://fundar.org.mx/idaim/blog/acerca-de" class="sf-with-ul"><span class="main_text">Acerca de<span class="sf-sub-indicator"> »</span></span><span class="menu_slide" style="display: block;">Acerca de<span class="sf-sub-indicator"> »</span></span></a>
<ul class="sub-menu" style="display: none; visibility: hidden;">
	<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-13" id="menu-item-13"><a href="http://fundar.org.mx/idaim/blog/metodologia">Metodología</a></li>
	<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-14" id="menu-item-14"><a href="http://fundar.org.mx/idaim/blog/criterios">Base de Datos</a></li>
	<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-15" id="menu-item-15"><a href="http://fundar.org.mx/idaim/blog/resultados">Resultados 2012</a></li>
	<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-16" id="menu-item-16"><a href="http://checatuley.org/">IDAIM 2010</a></li>
	<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-17" id="menu-item-17"><a href="http://fundar.org.mx/idaim/blog/glosario">Materiales de Prensa</a></li>
</ul>
</li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-94" id="menu-item-94"><a href="http://fundar.org.mx/idaim/blog/contacto"><span class="main_text">Contacto</span><span class="menu_slide" style="display: block;">Contacto</span></a></li>
</ul>			</div>

				<div id="social-icons">	
						<li>
							<a target="_blank" href="#"><img src="http://fundar.org.mx/idaim/blog/wp-content/themes/Lucid/images/twitter.png" alt="Twitter"></a>
							<a target="_blank" href="http://fundar.org.mx/idaim/blog/feed"><img src="http://fundar.org.mx/idaim/blog/wp-content/themes/Lucid/images/rss.png" alt="Rss"></a>
							<a target="_blank" href="#"><img src="http://fundar.org.mx/idaim/blog/wp-content/themes/Lucid/images/facebook.png" alt="Facebook"></a>
						</li>
=======
				
				<div id="top-menu">
					<ul class="nav sf-js-enabled" id="menu-main" style="visibility: visible;">
						<li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item menu-item-10" id="menu-item-10"><a href="http://fundar.org.mx/idaim/blog/quienes-somos"><span class="main_text">Quiénes somos</span><span class="menu_slide" style="display: block;">Quiénes somos</span></a></li>
						<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-11" id="menu-item-11"><a href="http://fundar.org.mx/idaim/blog/acerca-de" class="sf-with-ul"><span class="main_text">Acerca de<span class="sf-sub-indicator"> »</span></span><span class="menu_slide" style="display: block;">Acerca de<span class="sf-sub-indicator"> »</span></span></a>
						<ul class="sub-menu" style="display: none; visibility: hidden;">
							<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-13" id="menu-item-13"><a href="http://fundar.org.mx/idaim/blog/metodologia">Metodología</a></li>
							<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-14" id="menu-item-14"><a href="http://fundar.org.mx/idaim/blog/criterios">Base de Datos</a></li>
							<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-15" id="menu-item-15"><a href="http://fundar.org.mx/idaim/blog/resultados">Resultados 2012</a></li>
							<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-16" id="menu-item-16"><a href="http://checatuley.org/">IDAIM 2010</a></li>
							<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-17" id="menu-item-17"><a href="http://fundar.org.mx/idaim/blog/glosario">Materiales de Prensa</a></li>
						</ul>
						</li>
						<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-94" id="menu-item-94"><a href="http://fundar.org.mx/idaim/blog/contacto"><span class="main_text">Contacto</span><span class="menu_slide" style="display: block;">Contacto</span></a></li>
					</ul>
				</div>

				<div id="social-icons">	
						<li>
							<a target="_blank" href="#"><img src="http://fundar.org.mx/idaim/blog/wp-content/themes/Lucid/images/twitter.png" alt="Twitter"></a>
							<a target="_blank" href="http://fundar.org.mx/idaim/blog/feed"><img src="http://fundar.org.mx/idaim/blog/wp-content/themes/Lucid/images/rss.png" alt="Rss"></a>
							<a target="_blank" href="#"><img src="http://fundar.org.mx/idaim/blog/wp-content/themes/Lucid/images/facebook.png" alt="Facebook"></a>
						</li>
>>>>>>> f0c5c2406c48c144f48a93c9966bb06b3c3b3f93
				</div>	

			</div>
		</div>
