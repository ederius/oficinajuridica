$(document).on("ready",function () {
	

$("#busquedademanda").live("keyup", function(){

var valor =$("#busquedademanda").val();
 Data='valor='+valor;
 $.ajax({
                      type: "POST",
                       url: "busqueda_demandas.php", 
                       data: Data,
                     
                        success: function(data) {
                          
                            $('tbody').fadeIn(1).html(data);
                             

                          }
                  }); 

});



$("#busquedatutela").live("keyup", function(){

var valor =$("#busquedatutela").val();
 Data='valor='+valor;
 $.ajax({
                      type: "POST",
                       url: "busqueda_tutelas.php", 
                       data: Data,
                     
                        success: function(data) {
                          
                            $('tbody').fadeIn(1).html(data);
                             

                          }
                  }); 

});







$("#busquedaconciliacion").live("keyup", function(){

var valor =$("#busquedaconciliacion").val();
 Data='valor='+valor;
 $.ajax({
                      type: "POST",
                       url: "busqueda_conciliacion.php", 
                       data: Data,
                     
                        success: function(data) {
                          
                            $('tbody').fadeIn(1).html(data);
                             

                          }
                  }); 

});



$("#busquedaderechos").live("keyup", function(){

var valor =$("#busquedaderechos").val();
 Data='valor='+valor;
 $.ajax({
                      type: "POST",
                       url: "busqueda_derecho.php", 
                       data: Data,
                     
                        success: function(data) {
                          
                            $('tbody').fadeIn(1).html(data);
                             

                          }
                  }); 

});




$("#busquedaavances").live("keyup", function(){

var valor =$("#busquedaavances").val();
 Data='valor='+valor;
 $.ajax({
                      type: "POST",
                       url: "busqueda_avances.php", 
                       data: Data,
                     
                        success: function(data) {
                          
                            $('tbody').fadeIn(1).html(data);
                             

                          }
                  }); 

});














} );