$(document).on("ready", function(){

$("#publicar_comentario_derechos").live("click", function(){

var comentario=$("#comentario_derechos").val();


if (comentario==0) {

	alert("Escriba un comentario");
}
else
{

 Data='comentario='+comentario;
 $.ajax({
                      type: "POST",
                       url: "guardar_comentario_derecho.php", 
                       data: Data,
                     
                        success: function(data) {

                            $('#mostrar_derechos').fadeIn(1).html(data);
                             $("#comentario_derechos").val('');

                          }
                  }); 
}

});



});
