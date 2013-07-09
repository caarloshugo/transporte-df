function dartp() {
	var stage = new Kinetic.Stage("container-r", 440, 370);
	var layer = new Kinetic.Layer();
	var draggingShape = undefined;
	var draggingRectOffsetX = 0;
	var draggingRectOffsetY = 0;
	var html = "";

	/* Circle */
	var circle = new Kinetic.Shape({
		drawFunc: function(stroke){
			var context = this.getContext();
			context.beginPath();
			context.arc(0,0,330,0, 0.610865238, false); 
			context.lineTo(0,0);
			context.closePath();
			context.fillStyle="#de2b33";
			context.fill();
		}
	});
	
	circle.rotateDeg(180);
	circle.setCenterOffset(191,101);
	
	circle.on("mousedown", function(){ draggingShape = this; var mousePos = stage.getMousePosition(); draggingRectOffsetX = mousePos.x - circle._x; draggingRectOffsetY = mousePos.y - circle._y; });
	circle.on("mouseout", function(){ edefault(); });
	circle.on("mouseover", function(){ rank1p(); });
	
	/* Circle 2 */
	var circle2 = new Kinetic.Shape({
		drawFunc: function(){
			var context = this.getContext();
			context.beginPath();
			context.arc(0,0,230,0, 0.610865238, false); 
			context.lineTo(0,0);
			context.closePath();
			context.fillStyle="#df6c4f";
			context.fill();
		}
	});
	
	circle2.rotateDeg(145);
	circle2.setCenterOffset(158,160);
	
	circle2.on("mousedown", function(){ draggingShape = this; var mousePos = stage.getMousePosition(); draggingRectOffsetX = mousePos.x - circle._x; draggingRectOffsetY = mousePos.y - circle._y; });
	circle2.on("mouseout", function(){ edefault(); });
	circle2.on("mouseover", function(){ rank2p(); });
	

	/* Circle 3 */
	var circle3 = new Kinetic.Shape({
		drawFunc: function(){
			var context = this.getContext();
			
			context.beginPath();
			context.arc(0,0,165,0, 0.610865238, false); 
			context.lineTo(0,0);
			context.closePath();
			context.fillStyle="#ebd06e";
			context.fill();
		}
	});
	
	circle3.rotateDeg(110);
	circle3.setCenterOffset(120,233);
	
	circle3.on("mousedown", function(){ draggingShape = this; var mousePos = stage.getMousePosition(); draggingRectOffsetX = mousePos.x - circle._x; draggingRectOffsetY = mousePos.y - circle._y; });
	circle3.on("mouseout", function(){ edefault(); });
	circle3.on("mouseover", function(){ rank3p(); });
	
	
	/* Circle 4 */
	var circle4 = new Kinetic.Shape({
		drawFunc: function(){
			var context = this.getContext();
			context.beginPath();
			context.arc(0,0,40,0, 0.610865238, false); 
			context.lineTo(0,0);
			context.closePath();
			context.fillStyle="#79c452";
			context.fill();
		}
	});
	
	circle4.rotateDeg(75);
	circle4.setCenterOffset(60,346);
	
	circle4.on("mousedown", function(){ draggingShape = this; var mousePos = stage.getMousePosition(); draggingRectOffsetX = mousePos.x - circle._x; draggingRectOffsetY = mousePos.y - circle._y; });
	circle4.on("mouseout", function(){ edefault(); });
	circle4.on("mouseover", function(){ rank4p(); });
	

	/* Circle 5 */
	var circle5 = new Kinetic.Shape({
		drawFunc: function(){
			var context = this.getContext();
			context.beginPath();
			context.arc(0,0,33,0, 0.610865238, false); 
			context.lineTo(0,0);
			context.closePath();
			context.fillStyle="#388652";
			context.fill();
		}
	});
	
	circle5.rotateDeg(40);
	circle5.setCenterOffset(-84,620);
	
	circle5.on("mousedown", function(){ draggingShape = this; var mousePos = stage.getMousePosition(); draggingRectOffsetX = mousePos.x - circle._x; draggingRectOffsetY = mousePos.y - circle._y; });
	circle5.on("mouseout", function(){ edefault(); });
	circle5.on("mouseover", function(){ rank5p(); });


	/* Circle 6 */
	/*
	var circle6 = new Kinetic.Shape({
		drawFunc: function(){
			var context = this.getContext();
			context.beginPath();
			context.arc(0,0,33,0, 0.610865238, false); 
			context.lineTo(0,0);
			context.closePath();
			context.fillStyle="#79c452";
			context.fill();
		}
	});
	
	circle6.rotateDeg(5);
	circle6.setCenterOffset(-2090,4440);
	
	circle6.on("mousedown", function(){ draggingShape = this; var mousePos = stage.getMousePosition(); draggingRectOffsetX = mousePos.x - circle._x; draggingRectOffsetY = mousePos.y - circle._y; });
	circle6.on("mouseout", function(){ edefault(); });
	circle6.on("mouseover", function(){ rank6(); });
	*/
	
	/* Add Circle on Layer*/
	
	setTimeout( function(){ layer.add(circle); stage.add(layer); } , 200)
	setTimeout( function(){ layer.add(circle2); stage.add(layer); } , 400)
	setTimeout( function(){ layer.add(circle3); stage.add(layer); } , 600)
	setTimeout( function(){ layer.add(circle4); stage.add(layer); } , 800)
	setTimeout( function(){ layer.add(circle5); stage.add(layer); } , 1000)
	
	$(".color1").hover(function() { rank1p() }, function() { edefault() });
	$(".color2").hover(function() { rank2p() }, function() { edefault() });
	$(".color3").hover(function() { rank3p() }, function() { edefault() });
	$(".color4").hover(function() { rank4p() }, function() { edefault() });
	$(".color5").hover(function() { rank5p() }, function() { edefault() });
	$(".color6").hover(function() { rank6p() }, function() { edefault() });
}

function rank1p() {
	document.body.style.cursor = "pointer";
	
	html = "<li>Baja California Sur</li>";
	html += "<li>Michoacán</li>";
	html += "<li>Tabasco</li>";
	html += "<li>Hidalgo</li>";
	html += "<li>Guanajuato</li>";
	html += "<li>Querétaro</li>";
	html += "<li>Sonora</li>";
	html += "<li>Sinaloa</li>";
	html += "<li>Tamaulipas</li>";
	html += "<li>Yucatán</li>";
	html += "<li>Quintana Roo</li>";
	
	$("#interval-rank").css("background-color", "#de2b33");
	$("#interval-rank").html("<span>0 a 5.59</span>")
	$("#rank-estados").html("<ul>" + html + "</ul>");
}

function rank2p() {
	document.body.style.cursor = "pointer";

	html = "<li>San Luis Potosi</li>";
	html += "<li>México</li>";
	html += "<li>Campeche</li>";
	html += "<li>Veracruz</li>";
	html += "<li>Zacatecas</li>";
	html += "<li>Jalisco</li>";
	html += "<li>Aguascalientes</li>";
	html += "<li>Colima</li>";
	html += "<li>Chiapas</li>";
	
	$("#interval-rank").html("<span>5.6 a 6.39</span>");
	$("#interval-rank").css("background-color", "#df6c4f");
	$("#rank-estados").html("<ul>" + html + "</ul>");
}

function rank3p() {
	document.body.style.cursor = "pointer";

	html = "<li>Baja California</li>";
	html += "<li>Puebla</li>";
	html += "<li>Durango</li>";
	html += "<li>Tlaxcala</li>";
	html += "<li>Morelos</li>";
	html += "<li>Nuevo León</li>";
	html += "<li>Coahuila</li>";
	html += "<li>Nayarit</li>";

	$("#interval-rank").html("<span>6.4 a 6.99</span>");
	$("#interval-rank").css("background-color", "#ebd06e");
	$("#rank-estados").html("<ul>" + html + "</ul>");
}

function rank4p() {
	document.body.style.cursor = "pointer";
	
	html = "<li>Oaxaca</li>";
	html += "<li>Chihuahua</li>";
	html += "<li>Guerrero</li>";
	
	$("#interval-rank").html("<span>7.00 a 8.00</span>");
	$("#interval-rank").css("background-color", "#79c452");
	$("#rank-estados").html("<ul>" + html + "</ul>");
}

function rank5p() {
	document.body.style.cursor = "pointer";
	html = "<li>Distrito Federal</li>";
	$("#interval-rank").html("<span>8.10 a 10.00</span>");
	$("#interval-rank").css("background-color", "#388652");
	$("#rank-estados").html("<ul>" + html + "</ul>");
}
