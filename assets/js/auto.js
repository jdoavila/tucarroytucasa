$(document).on("ready",star);

function star()
{
	$("#banner").show();
	if ($(window).width() <= 767)
	{
		$(".publicidad").hide();
		$("#autolote").hide();
		$("#banner").hide();
		$("#banner2").show();

	}
	
	$(window).resize(function() {
		if ($(window).width() >767)
  			{
  				$(".publicidad").show();
  				$("#autolote").slideDown("speed");
  				$("#banner2").hide();
  				$("#banner").show();
  			}
  		if ($(window).width() <=767)
	  		{
	  			$("#banner2").show();
	  			$("#banner").hide();
	  			$(".publicidad").hide();
	  			$("#autolote").hide();
	  		}
  	});

	
	$("#btncontacto").click(function(e){
		e.preventDefault();
		var miCSS ={
			"background": "fff",
			
		};
		var miCSS2 ={
			"display": "none",
		};

		$(".contacto").css(miCSS);
		$(".contacto").slideDown("slow");
		$("#banner").css(miCSS2);
		$("#autolote").css(miCSS2);
		$(".publicidad").css(miCSS2);
	});
	

	$("#btnCancelar").click(function(e){
	e.preventDefault();
	$("#nombre").val("");
	$("#apellido").val("");
	$("#email").val("");
	$("#mensaje").val("");
	$(".contacto").slideUp();
	$("#banner").slideDown();
	
	
	if ($(window).width() <= 767)
	{
		$(".publicidad").hide();
		$("#autolote").hide();
		$("#banner").hide();
		$("#banner2").show();

	}

	if ($(window).width() > 767)
	{
		$(".publicidad").show();
		$("#autolote").show();

	}
});

}

