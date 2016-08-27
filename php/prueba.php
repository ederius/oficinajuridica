<html>
<head>
<script src="../js/jquery-1.8.2.min.js" type="text/javascript"></script>


<script type="text/javascript">

$(document).on("ready", function(){
	$("#button").on("click", function(){
		alert("click");
	var Data = new FormData(form); 
        $.ajax({
                        type: "POST",
                        url: "subir_archivo.php", 
                        data: Data,
                        contentType: false,
                        processData: false,
                        success: function(data) {

                            $('#result').fadeIn(1000).html(data).fadeOut(9000);



                          }
                  }); 
});
});

</script>
</head>
<body>

<form action="subir_archivo.php" name="form" method="post" id="form" enctype="multipart/form-data" >
<input type="file" name="eder"  >
<input type="button" value="enviar" id="button"> 
</form>
<div id="result"></div>






</body>
</html>