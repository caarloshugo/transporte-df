function chartb_n(data) {	
	$("#nchart2").html("");
	
	var stage  = new Kinetic.Stage("nchart2", 530, 580);
	var layer1  = new Kinetic.Layer();
	var layer2  = new Kinetic.Layer();
	var layer3  = new Kinetic.Layer();
	var layer4  = new Kinetic.Layer();
	var layer5  = new Kinetic.Layer();
	var arcs   = draw();
	
	function draw() {
		var x = 260;
		var y = 300;
		
		var startAngle = 0;
		var endAngle   = 0;
		
		for(i in data.indicadores) {
			startAngle = (s_indi[i]*Math.PI)/180;
			endAngle   = (e_indi[i]*Math.PI)/180;
			arc        = drawArc(x,y,254,startAngle,endAngle,data.indicadores[i].color,data.indicadores[i].value,data.indicadores[i].desc,data.indicadores[i].extra);
			layer1.add(arc);
		}
		
		for(i in data.variablesi) {
			startAngle = (s_vari[i]*Math.PI)/180;
			endAngle   = (e_vari[i]*Math.PI)/180;
			arc        = drawArc(x,y,204,startAngle,endAngle,data.variablesi[i].color,data.variablesi[i].value,data.variablesi[i].desc,data.variablesi[i].extra);
			layer2.add(arc);
		}
		
		for(i in data.variablesp) {
			startAngle = (s_varp[i]*Math.PI)/180;
			endAngle   = (e_varp[i]*Math.PI)/180;
			arc        = drawArc(x,y,150,startAngle,endAngle,data.variablesp[i].color,data.variablesp[i].value,data.variablesp[i].desc,data.variablesp[i].extra);
			layer3.add(arc);
		}
		
		var simpleText = new Kinetic.Text({
			x: 225,
			y: 285,
			text: data.indice.value,
			fontSize: 35,
			fontFamily: 'Calibri',
			textFill: '#e3e6e4'
		});
      
		/* Indice */
		startAngle = (0*Math.PI)/180;
		endAngle   = (360*Math.PI)/180;
		var indice = drawArc(x,y,70,startAngle, endAngle, data.indice.color,data.indice.value,data.indice.desc,data.indice.extra);
		
		layer4.add(indice);
		layer5.add(simpleText);
		//stage.add(layer);
		
		setTimeout( function(){ stage.add(layer1); } , 300)
		setTimeout( function(){  stage.add(layer2); } , 500)
		setTimeout( function(){  stage.add(layer3); } , 700)
		setTimeout( function(){  stage.add(layer4); } , 800)
		setTimeout( function(){  stage.add(layer5); } , 900)
	}

	function drawArc(x, y, r, startAngle, endAngle, color, value, desc, extra) {
		var arc = new Kinetic.Shape({
			drawFunc: function(stroke){
				var context = this.getContext();
				context.save();
				context.beginPath();
				context.arc(x, y, r, startAngle, endAngle, false); 
				context.lineTo(x,y);
				context.lineWidth   = 2;
				context.strokeStyle = "#e3e6e4";
				context.stroke();
				
				if(stroke!=undefined) context.fillStyle = stroke;
				else context.fillStyle = color;
				
				context.fill();
				
				if(stroke!=undefined) var array = new Array(x, y, r, startAngle, endAngle, stroke);
				else var array = new Array(x, y, r, startAngle, endAngle, color);
				
				return array;
			},
			
			get_Fill : function() {
				return color;
			}
		});
		
		arc.on("mousedown", function(){ draggingShape = this; var mousePos = stage.getMousePosition(); draggingRectOffsetX = mousePos.x - arc._x; draggingRectOffsetY = mousePos.y - arc._y; });
		arc.on("mouseout", function(){ 
			document.body.style.cursor = "default";
			$("#value-basen span").html("");
			$("#value-namen").html("");
			$("#value-basen").css("background-color", "transparent");
		});
		
		arc.on("mouseover", function(){
			var html = desc;
			
			if(extra != 0) {
				if(desc == 'Prueba tripartita') {
					html += "<p class='description tripartita'>" + extra + "</p>"
				} else {
					html += "<p class='description'>" + extra + "</p>"
				}
			}
			
			$("#value-namen").html(html);
			$("#value-basen span").html(value);
			$("#value-basen").css("background-color", color);
			document.body.style.cursor = "pointer"; 
		});
		
		return arc;
	}
}
