$(document).on("ready", function(){

$("#publicar_comentario_polizas").live("click", function(){



var comentario=$("#comentarios_polizas").val();


if (comentario==0) {

	alert("Escriba un comentario");
}
else
{

 Data='comentario='+comentario;
 $.ajax({
                      type: "POST",
                       url: "guardar_comentario_polizas.php", 
                       data: Data,
                     
                        success: function(data) {

                            $('#mostrar_polizas1').fadeIn(1).html(data);
                             $("#comentarios_polizas").val('');

                          }
                  }); 
}

});



});
