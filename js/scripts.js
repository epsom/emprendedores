/*Login/Registro*/
$(document).ready(function(){
  $("#loginb").click(function(){
    $("#login").show();
  });
  $("#close").click(function(){
    $("#login").hide();
  });
  $("#regb").click(function(){
    $("#login").hide();    
    $("#registro").show();
  });
  $("#backb").click(function(){
    $("#login").show();    
    $("#registro").hide();
  });
  $("#closer").click(function(){
    $("#registro").hide();
  });
});

$( document ).on( 'keydown', function ( e ) {
    if ( e.keyCode === 27 ) { // ESC
       $("#login").hide();
      $("#registro").hide();
    }
});
/*Funciones*/
/*********************************************************************************************************************/
/*Recargar pantalla*/
function datos(){
		setTimeout(function(){
			$("#datos").load("tabladatos.php");
			datos();
		}, 1000); 
	}