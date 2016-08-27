<!DOCTYPE html>
<html>
<head>
	<title></title>
	 <link rel="stylesheet" href="../joyride/joyride-2.1.css">
<link rel="stylesheet" type="text/css" href="../css/formato.css">

	
	<script src="../ckeditor/ckeditor.js"></script>

		 <link rel="stylesheet" href="../joyride/joyride-2.1.css">
	<script type="text/javascript" src="../joyride/jquery.joyride-2.1.js"></script>
	<script type="text/javascript" src="../joyride/jquery-1.10.1.js"></script>

</head>
<body>
<h3 class="miembros">hola</h3>
	


	

      <!-- Tip Content -->
    <ol id="joyRideTipContent">
      <li data-class="miembros" data-text="Next" class="custom">
        <h2>Item #1</h2>
        <p>You can control all the details for you tour stop. Any valid HTML will work inside of Joyride.</p>
      </li>
      <li data-id="numero2" data-button="Next" data-options="tipLocation:top;tipAnimation:fade">
        <h2>Stop #2</h2>
        <p>Get the details right by styling Joyride with a custom stylesheet!</p>
      </li>
      <li data-id="numero3" data-button="Next" data-options="tipLocation:right">
        <h2>Stop #3</h2>
        <p>It works right aligned.</p>
      </li>
      <li data-button="Next">
        <h2>Stop #4</h2>
        <p>It works as a modal too!</p>
      </li>
      <li data-class="someclass" data-button="Next" data-options="tipLocation:right">
        <h2>Stop #4.5</h2>
        <p>It works with classes, and only on the first visible element with that class.</p>
      </li>
      <li data-id="numero5" data-button="Close">
        <h2>Stop #5</h2>
        <p>Now what are you waiting for? Add this to your projects and get the most out of your apps!</p>
      </li>
    </ol>

    <script>
      $(window).load(function() {
        $('#joyRideTipContent').joyride({
          autoStart : true,
          postStepCallback : function (index, tip) {
          if (index == 2) {
            $(this).joyride('set_li', false, 1);
          }
        },
        modal:true,
        expose: true
        });
      });
    </script>




</body>
</html>