$(document).on("ready", function(){

$("#publicar_comentario").live("click", function(){

  

var comentario=$("#comentario").val();


if (comentario==0) {

	alert("Escriba un comentario");
}
else
{

 Data='comentario='+comentario;
 $.ajax({
                      type: "POST",
                       url: "guardar_comentario_demanda.php", 
                       data: Data,
                     
                        success: function(data) {

                            $('#demanda_comentarios').fadeIn(1).html(data);
                             $("textarea").val('');

                          }
                  }); 

}

});



});
