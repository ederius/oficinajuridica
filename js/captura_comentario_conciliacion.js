$(document).on("ready", function(){

$("#publicar_comentario_conciliacion").live("click", function(){



var comentario=$("#comentario_conciliacion").val();


if (comentario==0) {

	alert("Escriba un comentario");
}
else
{

 Data='comentario='+comentario;
 $.ajax({
                      type: "POST",
                       url: "guardar_comentario_conciliacion.php", 
                       data: Data,
                     
                        success: function(data) {

                            $('#mostrar_comentario_conciliacion').fadeIn(1).html(data);
                             $("#comentario_conciliacion").val('');

                          }
                  }); 
}

});



});
