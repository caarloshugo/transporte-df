function init() {
	dartb();
}

$(document).ready( function() {
	$("#rk-but-base").click( function() {
		$("#rk-but-base").removeClass($("#rk-but-base").attr("class"));
		$("#rk-but-pro").removeClass($("#rk-but-pro").attr("class"));
		
		$("#rk-but-base").addClass("button-active");
		$("#rk-but-pro").addClass("button-inactive");
		
		$("#rk-but-base .botones-dart a").removeClass("boton-base-inactive");
		$("#rk-but-base .botones-dart a").addClass("boton-base-active");
		
		$("#rk-but-pro .botones-dart a").removeClass("boton-progresivo-active");
		$("#rk-but-pro .botones-dart a").addClass("boton-progresivo-inactive");
		
		$("#container-r").html("");
		dartb();
	});

	$("#rk-but-pro").click( function() {
		$("#rk-but-pro").removeClass($("#rk-but-pro").attr("class"));
		$("#rk-but-base").removeClass($("#rk-but-base").attr("class"));
		
		$("#rk-but-pro").addClass("button-active");
		$("#rk-but-base").addClass("button-inactive");
		
		$("#rk-but-pro .botones-dart a").removeClass("boton-progresivo-inactive");
		$("#rk-but-pro .botones-dart a").addClass("boton-progresivo-active");
		
		$("#rk-but-base .botones-dart a").removeClass("boton-base-active");
		$("#rk-but-base .botones-dart a").addClass("boton-base-inactive");
		
		$("#container-r").html("");
		dartp();
	});
});
