<div id="message">
	
<div id="message-content">
		<div id="slogan-video">
		<div class="slogan">
	        <h2>
			<span class="idaim">El IDAIM</span>
			<span class="calidad">mide la calidad</span>
			<span class="leyes">de las leyes de transparencia</span>
			<span class="estados"> y acceso a la informaci&oacute;n en M&eacute;xico </span>
			<span class="principios">con relaci&oacute;n a los principios</span>
			<span class="constitucion">constitucionales</span>
			<span class="mejores">y a las mejores pr&aacute;cticas</span>
			<span class="internacional">internacionales</span>
		</h2>
		 
		</div>
		<div class="video">
			<!--<iframe width="469" height="270" src="http://www.youtube.com/embed/pAdSSIVF6Xo" frameborder="0" allowfullscreen></iframe>-->
		</div>
		</div>
	</div>
</div>

<div id="bar-downloads">
	<div class="downloadsb">
		<div class="left">
			<a class="ajax cboxElement downloads rankingb-download" title="Ranking final base" href="<?php print $this->themePath; ?>/rankingbase.html">
				Ranking final base
			</a>
			
			<a class="ajax cboxElement downloads rankingp-download" title="Ranking final progresivo" href="<?php print $this->themePath; ?>/rankingpro.html">
				Ranking final progresivo
			</a>
			
			<a href="<?php echo get("webURL") . "/docs/docto_ranking.pdf";?>" title="Descarga el ranking final" class="downloads indice-download">
				Descarga el ranking final
			</a>
			
			<a href="<?php echo get("webURL") . "/docs/basededatos.xlsx";?>" title="Descarga la base de datos del IDAIM" class="downloads ranking-download">
				Descarga la base de datos del IDAIM
			</a>
		</div>
		
		<div class="left2">
			<a>
				Ranking base
			</a>
			<a style="margin-left:122px;">
				Ranking progresivo
			</a>
			<a style="margin-left:93px;">
				Descarga el Ranking
			</a>
			<a style="margin-left:93px; width:164px;">
				Descarga la Base de Datos del IDAIM
			</a>
		</div>
	</div>
</div>

<div class="clear"></div>
<div id="results-graph">
	<div id="results-graph-content">
		<div id="buttons-ranking">
			<h2>Ranking general de las entidades</h2>
			<div class="clear"></div>
			<div id="rk-but-base" class="button-active">
				
				<div class="botones-dart">
					<a class="boton-base-active botones_indice" title="Índice base">&Iacute;ndice base</a>
					<span>&Iacute;ndice base</span>
				</div>
				
				<span class="desc-dart">Mide el cumplimiento de los principios constitucionales</span>
			</div>
			
			<div class="clear"></div>
			
			<div id="rk-but-pro" class="button-inactive">
				
				<div class="botones-dart">
					<a class="boton-progresivo-inactive botones_indice" title="Índice progresivo">&Iacute;ndice progresivo</a>
					<span>&Iacute;ndice progresivo</span>
				</div>
				
				<span class="desc-dart-pro">Mide el grado de progresividad de la ley seg&uacute;n los est&aacute;ndares internacionales</span>
			</div>

		</div>
		
		<div id="container-r"></div>
		
		<div id="container-result">
			<div id="cont-bar">
				<span class="text-bar">Alta transparencia</span>
					<div id="bar-colors">
						<span class="color color1"></span>
						<span class="color color2"></span>
						<span class="color color3"></span>
						<span class="color color4"></span>
						<span class="color color5"></span>
					</div>
				<span class="text-bar">Baja transparencia</span>
			</div>
			
			<div id="interval-rank"></div>
			<div id="rank-estados">
				<div id="information-dart">
					<span>Mueva el cursor sobre los colores para obtener m&aacute;s informaci&oacute;n</span>
					<img src="<?php print $this->themePath; ?>/css/images/cursor.png" title="Cursor" alt="Cursor"/>
				</div>
			</div>
		</div>
    </div>	
</div>

<!--
<div id="indice-nacional">
	<div id="indice-nacional-content">
		<h3>&Iacute;ndice Rep&uacute;blica Mexicana</h3>
		<img src="<?php print $this->themePath; ?>/css/images/flecha.png" class="indice-icon" alt="Nacional" />
	</div>
</div>
-->

<div id="indice-estatal">
	<div id="indice-estatal-content">
		<h3>Evaluaci&oacute;n de las leyes de transparencia por entidad y de la ley federal</h3>
		<img src="<?php print $this->themePath; ?>/css/images/flecha.png" class="indice-icon" alt="Estado" />
	</div>
</div>

<div id="results-nacional">
	<div id="results-nacional-content">
		<div id="top-resutls">
			<a id="button-download-nacional" class="button-download" href="/" title="Descargar Ficha Nacional">
				<span>Descargar Ficha</span>
			</a>
			
			<a id="button-download-nacional-des" class="button-download-des" href="/" title="Descargar evaluación desagregada">
				<span>Descargar evaluaci&oacute;n desagregada</span>
			</a>
		</div>
				
			<div class="clear"></div>
				
			<div id="resultados-estado">
				<div id="desc-estado">
					<div id="nname-estado">Nacional</div>
					<div id="mapan" class="estado img-estados">
						
					</div>
				</div>
				
				<div id="indice-estado">
					<div id="indice-pro">
						<div class="name">&Iacute;ndice progresivo</div>
						<div class="clear"></div>
						<div class="circlen"><span id="niprogresivo">6.1</span></div>
					</div>
					
					<div id="indice-base">
						<div class="name">&Iacute;ndice base</div>
						<div class="clear"></div>
						<div class="circlen"><span id="nibase">7.1</span></div>
					</div>
				</div>
			</div>
		
		
		<div class="clear"></div>

		<div id="burbujas">
			<div id="buttons">
				<div id="button-base-n" class="button-active">
					<a class="tooltip" title="Mide el cumplimiento de los principios constitucionales">&Iacute;ndice base</a>
				</div>
				<div id="button-pro-n"  class="button-inactive">
					<a class="tooltip" title="Mide el grado de progresividad de la ley según los estándares internacionales">&Iacute;ndice progresivo</a>
				</div>
			</div>
			
			<div id="npro-chart">
				<div id="nchart"></div>
				
				<div id="info-pro">
					<div id="value-pron">
						<span></span>
					</div>
					
					<div class="clear"></div>
					
					<div id="value-namepn"></div>
				</div>
			</div>
			
			<div id="nbase-chart">
				<div id="nchart2"></div>
				
				<div id="info-base">
					<div id="value-basen">
						<span></span>
					</div>
					
					<div class="clear"></div>
					
					<div id="value-namen"></div>
				</div>
			</div>
			
			<div class="clear"></div>
			
			<div id="buttons-more">
				<a class="metodologia" href="<?php echo get("webURL") . "/docs/docto_metodologia.pdf";?>" title="Metodología">Metodolog&iacute;a</a>
				<a class="guia-inter" href="<?php echo get("webURL") . "/docs/docto_guiadeinterpretacion.pdf";?>" title="Guía de interpretación">Gu&iacute;a de interpretaci&oacute;n</a>
			</div>
		</div>
	</div>
</div>

<div class="clear"></div>

<div id="results-estatal">
	<div id="top-results">
		<div id="top-results-content">
			<a id="button-download" class="download-fichas download-ficha" href="/" title="Descargar Ficha del estado">
				<span>Descargar Ficha</span>
			</a>
			
			<a class="a-ficha" href="/" title="Descargar Ficha del estado">
				<span>Descargar Ficha</span>
			</a>
			
			
			<a id="button-download-des"  class="download-fichas download-ficha" href="/" title="Descargar evaluación desagregada">
				<span>Descargar evaluaci&oacute;n desagregada</span>
			</a>
			
			<a class="a-ficha-des" href="/" title="Descargar Ficha del estado">
				<span>Descargar evaluaci&oacute;n desagregada</span>
			</a>
			
			
			<div id="form-estados">
				<div class="loading"></div>
				<?php $estado = segment(1);?>
				<?php echo ($estado==false) ? '<input id="showes" name="showes" value="0" type="hidden" />' : '<input type="hidden" id="showes" name="showes" value="1" />' ?>
				<select id="estados" name="estados">
					<option value="Aguascalientes" <?php echo ($estado=="Aguascalientes") ? 'selected="selected"' : "";?>>Aguascalientes</option>
					<option value="BC" <?php echo ($estado=="BC") ? 'selected="selected"' : "";?>>Baja California</option>
					<option value="BCS" <?php echo ($estado=="BCS") ? 'selected="selected"' : "";?>>Baja California Sur</option>
					<option value="Campeche" <?php echo ($estado=="Campeche") ? 'selected="selected"' : "";?>>Campeche</option>
					<option value="Chiapas" <?php echo ($estado=="Chiapas") ? 'selected="selected"' : "";?>>Chiapas</option>
					<option value="Chihuahua" <?php echo ($estado=="Chihuahua") ? 'selected="selected"' : "";?>>Chihuahua</option>
					<option value="Coahuila" <?php echo ($estado=="Coahuila") ? 'selected="selected"' : "";?>>Coahuila</option>
					<option value="Colima" <?php echo ($estado=="Colima") ? 'selected="selected"' : "";?>>Colima</option>
					<option value="DF" <?php echo ($estado=="DF") ? 'selected="selected"' : "";?>>Distrito Federal</option>
					<option value="Durango" <?php echo ($estado=="Durango") ? 'selected="selected"' : "";?>>Durango</option>
					<option value="Mexico" <?php echo ($estado=="Mexico") ? 'selected="selected"' : "";?>>M&eacute;xico</option>
					<option value="Guanajuato" <?php echo ($estado=="Guanajuato") ? 'selected="selected"' : "";?>>Guanajuato</option>
					<option value="Guerrero" <?php echo ($estado=="Guerrero") ? 'selected="selected"' : "";?>>Guerrero</option>
					<option value="Hidalgo" <?php echo ($estado=="Hidalgo") ? 'selected="selected"' : "";?>>Hidalgo</option>
					<option value="Jalisco" <?php echo ($estado=="Jalisco") ? 'selected="selected"' : "";?>>Jalisco</option>
					<option value="Michoacan" <?php echo ($estado=="Michoacan") ? 'selected="selected"' : "";?>>Michoac&aacute;n</option>
					<option value="Morelos" <?php echo ($estado=="Morelos") ? 'selected="selected"' : "";?>>Morelos</option>
					<option value="Nayarit" <?php echo ($estado=="Nayarit") ? 'selected="selected"' : "";?>>Nayarit</option>
					<option value="NL" <?php echo ($estado=="NL") ? 'selected="selected"' : "";?>>Nuevo Le&oacute;n</option>
					<option value="Oaxaca" <?php echo ($estado=="Oaxaca") ? 'selected="selected"' : "";?>>Oaxaca</option>
					<option value="Puebla" <?php echo ($estado=="Puebla") ? 'selected="selected"' : "";?>>Puebla</option>
					<option value="Queretaro" <?php echo ($estado=="Queretaro") ? 'selected="selected"' : "";?>>Quer&eacute;taro</option>
					<option value="QR" <?php echo ($estado=="QR") ? 'selected="selected"' : "";?>>Quintana Roo</option>
					<option value="SLP" <?php echo ($estado=="SLP") ? 'selected="selected"' : "";?>>San Luis Potos&iacute;</option>
					<option value="Sinaloa" <?php echo ($estado=="Sinaloa") ? 'selected="selected"' : "";?>>Sinaloa</option>
					<option value="Sonora" <?php echo ($estado=="Sonora") ? 'selected="selected"' : "";?>>Sonora</option>
					<option value="Tabasco" <?php echo ($estado=="Tabasco") ? 'selected="selected"' : "";?>>Tabasco</option>
					<option value="Tamaulipas" <?php echo ($estado=="Tamaulipas") ? 'selected="selected"' : "";?>>Tamaulipas</option>
					<option value="Tlaxcala" <?php echo ($estado=="Tlaxcala") ? 'selected="selected"' : "";?>>Tlaxcala</option>
					<option value="Veracruz" <?php echo ($estado=="Veracruz") ? 'selected="selected"' : "";?>>Veracruz</option>
					<option value="Yucatan" <?php echo ($estado=="Yucatan") ? 'selected="selected"' : "";?>>Yucat&aacute;n</option>
					<option value="Zacatecas" <?php echo ($estado=="Zacatecas") ? 'selected="selected"' : "";?>>Zacatecas</option>
					<option value="Federal" <?php echo ($estado=="Federal") ? 'selected="selected"' : "";?>>Federal</option>
				</select>
				<a class="button-seek" href="/" title="Buscar por estado">
					<span>Ir</span>
				</a>
			</div>
		</div>
	</div>
	
	<div class="clear"></div>
	
	<div id="results-estatal-content">
		<div id="resultados-estado">
			<div id="desc-estado">
				<div id="name-estado"></div>
				<div id="mapa" class="estado img-estados">
					<div id="img-estado" class=""></div>
				</div>
			</div>
			
			<div id="indice-estado">
				<div id="indice-pro">
					<div class="name">&Iacute;ndice progresivo</div>
					<div class="clear"></div>
					<div class="circle"><span id="iprogresivo"></span></div>
				</div>
				
				<div id="indice-base">
					<div class="name">&Iacute;ndice base</div>
					<div class="clear"></div>
					<div class="circle"><span id="ibase"></span></div>
				</div>
			</div>
			
			<div id="buttons-indices">
				<div id="button-base" class="button-active">
					<span class="title">&Iacute;ndice base</span>
					<span class="desc">Mide el cumplimiento de los principios constitucionales</span>
					<div class="triangulo_sup"></div>
				</div>
				<div id="button-pro"  class="button-inactive">
					<span class="title">&Iacute;ndice progresivo</span>
					<span class="desc">Mide el grado de progresividad de la ley seg&uacute;n los estándares internacionales</span>
				</div>
			</div>
		</div>
		
		<div class="clear"></div>

		<div id="burbujas">
			<div id="pro-chart">
				<div id="chart"></div>
				
				<div id="info-pro">
					<div id="value-pro">
						<span></span>
					</div>
					
					<div class="clear"></div>
					
					<div id="value-namep"></div>
				</div>
				
				<div class="cursor-chart">
					<span>Mueva el cursor sobre los colores para obtener m&aacute;s informaci&oacute;n</span>
					<img src="<?php print $this->themePath; ?>/css/images/cursor.png" title="Cursor" alt="Cursor"/>
				</div>
			</div>
			
			<div id="base-chart">
				<div id="chart2"></div>
				
				<div id="info-base">
					<div id="value-base">
						<span></span>
					</div>
					
					<div class="clear"></div>
					
					<div id="value-name"></div>
				</div>
				
				<div class="cursor-chart">
					<span>Mueva el cursor sobre los colores para obtener m&aacute;s informaci&oacute;n</span>
					<img src="<?php print $this->themePath; ?>/css/images/cursor.png" title="Cursor" alt="Cursor"/>
				</div>
			</div>
			
			<div id="cont-bar2">
				<span class="text-bar">Alta transparencia</span>
					<div id="bar-colors">
						<span class="color scolor1"></span>
						<span class="color scolor2"></span>
						<span class="color scolor3"></span>
						<span class="color scolor4"></span>
						<span class="color scolor5"></span>
					</div>
				<span class="text-bar">Baja transparencia</span>
			</div>
			
			<div class="clear"></div>
			
			<div id="buttons-more">
				<a id="metodologia-box" href="<?php echo get("webURL") . "/docs/docto_metodologia.pdf";?>" title="Metodología">
					<span class="metodologia-img">Metodolog&iacute;a</span>
					<span class="metodologia-desc">Metodolog&iacute;a</span>
				</a>
				
				<a id="guia-inter-box" href="<?php echo get("webURL") . "/docs/docto_guiadeinterpretacion.pdf";?>" title="Guía de interpretación">
					<span class="guia-inter-img">Gu&iacute;a de interpretaci&oacute;n</span>
					<span class="guia-inter-desc">Gu&iacute;a de interpretaci&oacute;n</span>
				</a>
			</div>
		</div>
	</div>
</div>
