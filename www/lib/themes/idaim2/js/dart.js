function init() {
	dartb();
}

$(document).ready( function() {
	$("#rk-but-base").click( function() {
		$("#rk-but-base").removeClass($("#rk-but-base").attr("class"));
		$("#rk-but-pro").removeClass($("#rk-but-pro").attr("class"));
		
		$("#rk-but-base").addClass("button-active");
		$("#rk-but-pro").addClass("button-inactive");
		
		$("#container-r").html("");
		dartb();
	});

	$("#rk-but-pro").click( function() {
		$("#rk-but-pro").removeClass($("#rk-but-pro").attr("class"));
		$("#rk-but-base").removeClass($("#rk-but-base").attr("class"));
		
		$("#rk-but-pro").addClass("button-active");
		$("#rk-but-base").addClass("button-inactive");
		
		$("#container-r").html("");
		dartp();
	});
});
