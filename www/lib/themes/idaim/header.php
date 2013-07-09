<!DOCTYPE html>
<html lang="<?php print get("webLang"); ?>">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title><?php print $this->getTitle(); ?></title>
		<link href="<?php print $this->themePath; ?>/css/style.css" rel="stylesheet">
		<link href="<?php print $this->themePath; ?>/css/pack.css" rel="stylesheet">
		<link href="<?php print $this->themePath; ?>/css/tabs.css" rel="stylesheet">
		<link href="<?php print $this->themePath; ?>/css/dart.css" rel="stylesheet">
		<link href="<?php print $this->themePath; ?>/css/colorbox.css" rel="stylesheet">
		<link href="<?php print $this->themePath; ?>/css/jquery-ui.css" rel="stylesheet">
		<link href="<?php print $this->themePath; ?>/css/stylesheet.css" rel="stylesheet">
		
		<script src="<?php print $this->themePath; ?>/js/d3.v2.js" type="text/javascript"></script>
		<script src="<?php print $this->themePath; ?>/js/kinetic-v3.8.3.js" type="text/javascript"></script>
		<script src="<?php print $this->themePath; ?>/js/jquery.js" type="text/javascript"></script>
		<script src="<?php print $this->themePath; ?>/js/modernizr.custom.54280.js" type="text/javascript"></script>
		<script src="<?php print $this->themePath; ?>/js/jquery-ui.js" type="text/javascript"></script>
		<script src="<?php print $this->themePath; ?>/js/functions.js" type="text/javascript"></script>
		<script src="<?php print $this->themePath; ?>/js/ang.js" type="text/javascript"></script>
		<script src="<?php print $this->themePath; ?>/js/donap.js" type="text/javascript"></script>
		<script src="<?php print $this->themePath; ?>/js/donab.js" type="text/javascript"></script>
		<script src="<?php print $this->themePath; ?>/js/donab_n.js" type="text/javascript"></script>
		<script src="<?php print $this->themePath; ?>/js/donap_n.js" type="text/javascript"></script>
		<script src="<?php print $this->themePath; ?>/js/d3.layout.js" type="text/javascript"></script>
		<script src="<?php print $this->themePath; ?>/js/dart.js" type="text/javascript"></script>
		<script src="<?php print $this->themePath; ?>/js/dartb.js" type="text/javascript"></script>
		<script src="<?php print $this->themePath; ?>/js/dartp.js" type="text/javascript"></script>
		<script src="<?php print $this->themePath; ?>/js/colorbox.js" type="text/javascript"></script>
		<script src="<?php print $this->themePath; ?>/js/superfish.js" type="text/javascript"></script>
		 <!--<script src="<?php print $this->themePath; ?>/js/custom.js"></script> -->
		<script type="text/javascript" src="https://www.google.com/jsapi"></script>
		
		
		<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
		<script type="text/javascript">
		  google.load("visualization", "1", {packages:["corechart"]});
		</script>
		
		<?php print $this->getCSS(); ?>
		<script type="text/javascript">
			var webURL    = "<?php echo get("webURL");?>";
			var themePath = "<?php echo $this->themePath; ?>";
		</script>
	</head>

	
<body onload="init();">
	<div class="container-idaim2012">
			<div class="container_idaim_ir">
			<div class="idaim2012" >
				<div id="ir-idaim2012">
				<a href="http://checatuley.org/"><img src="<?php print $this->themePath; ?>/css/images/idaim-2012-btn.png"  border="0"/></a>
				</div>
			</div>
		</div>
	</div>

	<div id="container">
		<header id="main-header">
			<div class="container clearfix">
				<div id="logo">
					<a href="http://idaim.org.mx"><img src="<?php print $this->themePath; ?>/css/images/logo.png" title="IDAIM" border="0"/></a>
				</div>
				
<nav id="top-menu">
	
	<script>

	jQuery(document).ready(function () {
		jQuery('ul.sf-js-enabled').superfish();
	});

</script>
	
				<ul class="nav sf-js-enabled" id="menu-main" style="visibility: visible;"><li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-10" id="menu-item-10"><a href="http://idaim.org.mx/blog/quienes-somos"><span class="main_text" style="margin-top: 0px;">Quiénes somos</span><span class="menu_slide" style="display: block;">Quiénes somos</span></a></li>
<li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item menu-item-11" id="menu-item-11"><a href="http://idaim.org.mx/blog/acerca-de" class="sf-with-ul"><span class="main_text" style="margin-top: 0px;">Acerca de<span class="sf-sub-indicator"> »</span></span><span class="menu_slide" style="display: block;">Acerca de<span class="sf-sub-indicator"> »</span></span></a>
<ul class="sub-menu" style="visibility: hidden; display: none;">
	<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-13" id="menu-item-13"><a href="http://idaim.org.mx/blog/metodologia">Ranking</a></li>
	<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-14" id="menu-item-14"><a href="http://idaim.org.mx/blog/criterios">Cuadernillo de Resultados</a></li>
	<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-15" id="menu-item-15"><a href="http://idaim.org.mx/blog/resultados">Documento de Buenas Prácticas</a></li>
	<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-138" id="menu-item-138"><a href="http://#">Base de datos</a></li>
	<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-16" id="menu-item-16"><a href="http://#">Guía de interpretación</a></li>
	<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-17" id="menu-item-17"><a href="http://idaim.org.mx/blog/glosario">Materiales de Prensa</a></li>
	<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-139" id="menu-item-139"><a href="http://#">Metodología</a></li>
</ul>
</li>
<li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-115" id="menu-item-115"><a href="http://idaim.org.mx/blog/category/blog"><span class="main_text">Blog</span><span class="menu_slide" style="display: block;">Blog</span></a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-94" id="menu-item-94"><a href="http://idaim.org.mx/blog/contacto"><span class="main_text">Contacto</span><span class="menu_slide" style="display: block;">Contacto</span></a></li>
</ul>			</nav>

				<div id="social-icons">	
						<li>
							<a target="_blank" href="#"><img src="http://idaim.org.mx/blog/wp-content/themes/Lucid/images/twitter.png" alt="Twitter" border="0"></a>
							<a target="_blank" href="http://idaim.org.mx/blog/feed"><img src="http://idaim.org.mx/blog/wp-content/themes/Lucid/images/rss.png" alt="Rss" border="0"></a>
							<a target="_blank" href="#"><img src="http://idaim.org.mx/blog/wp-content/themes/Lucid/images/facebook.png" alt="Facebook " border="0"></a>
							
						</li>
				</div>	

			</div>
		</div>
