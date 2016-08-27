$(document).on("ready", function(){

$("#publicar_comentario_tutela").live("click", function(){



var comentario=$("#comentario_tutela").val();


if (comentario==0) {

	alert("Escriba un comentario");
}
else
{

 Data='comentario='+comentario;
 $.ajax({
                      type: "POST",
                       url: "guardar_comentario_tutela.php", 
                       data: Data,
                     
                        success: function(data) {

                            $('#tutelas').fadeIn(1).html(data);
                             $("#comentario_tutela").val('');

                          }
                  }); 

}
});



});
