<?php
$mensaje='Hola, Admin



Te estoy enviando este mensaje para alertarte que e plazo para la audiencia esta por caducar.
att:Administrador de plataforma del departamento Juridico Uniguajira.

Saludos

Uniguajira.edu.co';

if(mail("ederdiaz_@hotmail.com", "Advertencia", $mensaje, "micorreo@otrodominio.com")){

echo "Se a enviado el correo Correctamente";

}

else
{


	echo "No se envio el correo correctamente";
}


?>