<!DOCTYPE html>
<html lang="es">
 <head>
  <meta charset="utf-8">
	<title>login</title>


<script src="../js/jquery-1.8.2.min.js" type="text/javascript"></script>


     <link href="../css/styles.css" rel="stylesheet" type="text/css">
 	<!-- Bootstrap -->
	<link href="../css/bootstrap.css" rel="stylesheet" type="text/css">
	<script type="text/javascript" src="../js/bootstrap.js"></script>

	<script type="text/javascript">
		
	$(document).on("ready", function() 
	{
                       
       $("#sig").on("click", function() 
		{
        
		var usuario=$("#usuario").val();
		var contra=$("#contra").val();

		if(usuario=="" || contra=="")
		{
		}
		else{
         
          var dataString = 'usuario='+usuario+'&contra='+contra; 
		
        $.ajax({
            type: "POST",
            url: "php/inicio_de_sesion.php",
            data: dataString,
            success: function(data) {

            	 if (data == 0 )
                	 {

                       document.location.href="frontend.html";

                }

            	else
            		if (data != "") {
                $('#error').fadeIn(100).html(data);
                $("#usuario").val("");
		        $("#contra").val("");
                }
              
            }
        
        });
 



		}

	});
    
    });
	</script>
<script type="text/javascript">
	
	function anular_form()
	{

		return false;
	}
</script>
<script type="text/javascript">
	
$(".alert").alert()

</script>

  </head>

  <body>
<img src="../imagenes/escudo.png">
    <div class="contenedor-registros">
<br></br>






       <p>
       		<br></br>
       </p>
        <button id="sig" class="btn btn-lg btn-primary btn-block"  type="submit">iniciar sesi&oacute;n <span  class = "glyphicon glyphicon-ok-sign" > </ span></button>


       
    </div> <!-- /container --> 
<div id="footer"><h5 >Oficina Juridica - Universidad de la Guajira</spam></br><p > 2014 © </p></h5>
</html>


