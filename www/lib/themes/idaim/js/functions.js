$(document).ready( function() {
	$("#uns-html5").hide();
	
	if(Modernizr.canvas) {
		
	} else {
		$("#container").hide();
		$("#content").hide();
		$("#footer").hide();
		$("#uns-html5").show();
	}
	
	$(".ajax").colorbox({iframe:true, width:"980", height:"400"});
	$(".loading").hide();
	$("#pro-chart").hide();	
	$("#npro-chart").hide();
    $(".tooltip").tooltip();
    

	
	$("#button-base").click( function() {
		$("#button-base").removeClass($("#button-base").attr("class"));
		$("#button-pro").removeClass($("#button-pro").attr("class"));
		
		$("#button-base").addClass("button-active");
		$("#button-pro").addClass("button-inactive");
		
		$("#button-base .title").css("color", "#5e5e5e");
		$("#button-pro .title").css("color", "#868686");
		
		$("#button-base").css("border-bottom", "2px solid #6c6b6b");
		$("#button-pro").css("border-bottom", "none");
		$(".triangulo_sup").css("margin", "13px 0 0 70px");
		
		$("#base-chart").show();
		$("#pro-chart").hide();	
	});
	
	$("#button-pro").click( function() {
		$("#button-pro").removeClass($("#button-pro").attr("class"));
		$("#button-base").removeClass($("#button-base").attr("class"));
		
		$("#button-pro").addClass("button-active");
		$("#button-base").addClass("button-inactive");
		
		$("#button-pro .title").css("color", "#5e5e5e");
		$("#button-base .title").css("color", "#868686");
		
		$("#button-pro").css("border-bottom", "2px solid #6c6b6b");
		$("#button-base").css("border-bottom", "none");
		$(".triangulo_sup").css("margin", "13px 0 0 313px");
		
		$("#pro-chart").show();	
		$("#base-chart").hide();
	});
	
	$("#ntab-1").click( function() {
		$("#nbase-chart").show();
		$("#npro-chart").hide();	
	});
	
	$("#ntab-2").click( function() {
		$("#npro-chart").show();	
		$("#nbase-chart").hide();
	});
	
	
	// Nacional
	$("#indice-nacional").toggle( 
		function() {
			$("#results-estatal").slideUp("slow");
			$("#results-nacional").slideDown("slow");
		},
		function() {
			$("#results-nacional").slideUp("slow");
		}
	);
	
	
	// Estatal
	$("#indice-estatal").toggle( 
		function() {
			$("#results-nacional").slideUp("slow");
			$("#results-estatal").slideDown("slow");
		},
		 function() {
			$("#results-estatal").slideUp("slow");
		}
	);
			  
	$(".button-seek").click( function() {
		$.ajax({
			beforeSend: function(){
				$(".loading").show();
		    },
			url: "get/" + $("#estados").val()
		}).done(function(response) {
			//$("#chart").slideUp("slow");
			//$("#chart2").slideUp("slow");
			
			data = JSON.parse(response);
			
			if(($("#showes").val() == "0" || $("#showes").val() == "1") && $("#estados").val() != "Aguascalientes") {
				var stateObj = { foo: $("#estados option:selected").text() };
				history.pushState(stateObj, $("#estados option:selected").text(), webURL + "/estado/" + $("#estados").val());
			} else if($("#showes").val() == "1" && $("#estados").val() == "Aguascalientes") {
				var stateObj = { foo: $("#estados option:selected").text() };
				history.pushState(stateObj, $("#estados option:selected").text(), webURL + "/estado/" + $("#estados").val());
			}
			
			$("#showes").val("1");
			
			if(data.key=="Estado") {
				$("#mapa").html("");
			} else {
				$("#button-download").attr("href", data.ficha);
				$("#button-download").show();
				$("#mapa").html('<img src="'+themePath+'/css/images/estados/'+data.key+'.png" title="'+$("#estados option:selected").text()+'" />');
			}
		
			$("#name-estado").html($("#estados option:selected").text());
			$("#iprogresivo").html(data.indice.progresivo);
			$("#ibase").html(data.indice.base);
			
			$("#indice-base .circle").css("background-color",  data.data.base.indice.color);
			$("#indice-pro .circle").css("background-color",  data.data.progresivo.indice.color);
			
			chartp(data.data.progresivo);
			chartb(data.data.base);
			
			$(".loading").hide();
		});
		
		return false;
	});
	
	$("#estados").change( function () { $(".button-seek").click(); });
	
	if($("#showes").val() == "0") {
		$("#results-estatal").hide();
		$("#results-estatal .tabs").hide();
		$("#button-download").hide();
		$("#results-nacional").hide();
		$(".button-seek").click();
	} else {
		$("#results-nacional").hide();
		$(".button-seek").click();
	}
	
	$.ajax({
		url: "get/Nacional"
	}).done(function(response) {
		data = JSON.parse(response);
		
		$("#indice-base .circlen").css("background-color",  data.data.base.indice.color);
		$("#indice-pro .circlen").css("background-color",  data.data.progresivo.indice.color);
		
		$("#button-download-nacional").attr("href", data.ficha);
		$("#mapan").html('<img src="'+themePath+'/css/images/estados/federal2.png" title="Nacional" />');
		
		chartb_n(data.data.base);
		chartp_n(data.data.progresivo);
	});
	
	$("#button-base-n").click( function() {
		$("#button-base-n").removeClass($("#button-base-n").attr("class"));
		$("#button-pro-n").removeClass($("#button-pro-n").attr("class"));
		
		$("#button-base-n").addClass("button-active");
		$("#button-pro-n").addClass("button-inactive");
		
		$("#nbase-chart").show();
		$("#npro-chart").hide();	
	});
	
	$("#button-pro-n").click( function() {
		$("#button-pro-n").removeClass($("#button-pro-n").attr("class"));
		$("#button-base-n").removeClass($("#button-base-n").attr("class"));
		
		$("#button-pro-n").addClass("button-active");
		$("#button-base-n").addClass("button-inactive");
		
		$("#npro-chart").show();	
		$("#nbase-chart").hide();
	});
});
