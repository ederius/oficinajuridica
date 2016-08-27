<?php
include('conexion.php');

$asunto="Centro Juridico Uniguajira: Notificacion";

$fecha15=date("d/m/Y",strtotime('+15 day'));
$fecha5=date("d/m/Y",strtotime('+5 day'));
$fecha2=date("d/m/Y",strtotime('+2 day'));
$fecha=date("d/m/Y");

echo $fecha15;
echo $fecha5;
echo $fecha2;
echo $fecha;
//   MAIL DE DEMANDASSSSSSSSSSSSSSSSSSSSSSS ///////////////////////////////////////////////////////////

$consulta15=mysql_query("SELECT * FROM dmo_demanda WHERE contestacion = '".$fecha15."'  ");
$consulta5=mysql_query("SELECT * FROM dmo_demanda WHERE contestacion = '".$fecha5."'  ");
$consulta2=mysql_query("SELECT * FROM dmo_demanda WHERE contestacion = '".$fecha2."'  ");
$consulta=mysql_query("SELECT * FROM dmo_demanda WHERE contestacion = '".$fecha."'  ");


while ($array=mysql_fetch_array($consulta15)) 

	{ 
$mensaje="Se le informa que la demanda con radicado: ".$array['radicado']." esta a quince(15) dias de cumplir el plazo de ser contestada.
		Gracias por utilizar nuestro servicio,

Cordial Saludo,
Comunidad de Centro Juridico Uniguajira

************NO RESPONDER - Mensaje Generado Automáticamente********	

Este correo es únicamente informativo y es de uso exclusivo del destinatario(a), puede contener información privilegiada y/o confidencial. Si no es usted el destinatario(a) deberá borrarlo inmediatamente. Queda notificado que el mal uso, divulgación no autorizada, alteración y/o modificación malintencionada sobre este mensaje y sus anexos quedan estrictamente prohibidos y pueden ser legalmente sancionados.";
		$consulta1=mysql_query("SELECT * FROM administradores WHERE idusuario = '".$array['id_asesor']."'  ");
		$array1=mysql_fetch_array($consulta1);

		mail($array1['email'], $asunto, $mensaje);

	}
while ($array=mysql_fetch_array($consulta5)) 

	{ 
$mensaje="Se le informa que la demanda con radicado: ".$array['radicado']." esta a cinco(5) dias de cumplir el plazo de ser contestada.
		Gracias por utilizar nuestro servicio,

Cordial Saludo,
Comunidad de Centro Juridico Uniguajira

************NO RESPONDER - Mensaje Generado Automáticamente********	

Este correo es únicamente informativo y es de uso exclusivo del destinatario(a), puede contener información privilegiada y/o confidencial. Si no es usted el destinatario(a) deberá borrarlo inmediatamente. Queda notificado que el mal uso, divulgación no autorizada, alteración y/o modificación malintencionada sobre este mensaje y sus anexos quedan estrictamente prohibidos y pueden ser legalmente sancionados.";
		$consulta1=mysql_query("SELECT * FROM administradores WHERE idusuario = '".$array['id_asesor']."'  ");
		$array1=mysql_fetch_array($consulta1);

		mail($array1['email'], $asunto, $mensaje);

	}



while ($array=mysql_fetch_array($consulta2)) 

	{ 
$mensaje="Se le informa que la demanda con radicado: ".$array['radicado']." esta a dos(2) dias de cumplir el plazo de ser contestada.
		Gracias por utilizar nuestro servicio,

Cordial Saludo,
Comunidad de Centro Juridico Uniguajira

************NO RESPONDER - Mensaje Generado Automáticamente********	

Este correo es únicamente informativo y es de uso exclusivo del destinatario(a), puede contener información privilegiada y/o confidencial. Si no es usted el destinatario(a) deberá borrarlo inmediatamente. Queda notificado que el mal uso, divulgación no autorizada, alteración y/o modificación malintencionada sobre este mensaje y sus anexos quedan estrictamente prohibidos y pueden ser legalmente sancionados.";
				$consulta1=mysql_query("SELECT * FROM administradores WHERE idusuario = '".$array['id_asesor']."'  ");
		$array1=mysql_fetch_array($consulta1);

		mail($array1['email'], $asunto, $mensaje);

	}


	while ($array=mysql_fetch_array($consulta)) 

	{ 
		$mensaje="Se le informa que la demanda con radicado: ".$array['radicado']." cumple hoy el plazo de ser contestada.
		Gracias por utilizar nuestro servicio,

Cordial Saludo,
Comunidad de Centro Juridico Uniguajira

************NO RESPONDER - Mensaje Generado Automáticamente********	

Este correo es únicamente informativo y es de uso exclusivo del destinatario(a), puede contener información privilegiada y/o confidencial. Si no es usted el destinatario(a) deberá borrarlo inmediatamente. Queda notificado que el mal uso, divulgación no autorizada, alteración y/o modificación malintencionada sobre este mensaje y sus anexos quedan estrictamente prohibidos y pueden ser legalmente sancionados.";
		$consulta1=mysql_query("SELECT * FROM administradores WHERE idusuario = '".$array['id_asesor']."'  ");
		$array1=mysql_fetch_array($consulta1);

		mail($array1['email'], $asunto, $mensaje);

	}
//   MAIL DE DEMANDASSSSSSSSSSSSSSSSSSSSSSS ///////////////////////////////////////////////////////////




//   MAIL DE tutelASSSSSSSSSSSSSSSSSSSSSSS ///////////////////////////////////////////////////////////
$consulta15=mysql_query("SELECT * FROM tutelas WHERE contestacion = '".$fecha15."'  ");
$consulta5=mysql_query("SELECT * FROM tutelas WHERE contestacion = '".$fecha5."'  ");
$consulta2=mysql_query("SELECT * FROM tutelas WHERE contestacion = '".$fecha2."'  ");
$consulta=mysql_query("SELECT * FROM tutelas WHERE contestacion = '".$fecha."'  ");
while ($array=mysql_fetch_array($consulta15)) 

	{ 
$mensaje="Se le informa que la tutela con radicado: ".$array['radicado']." esta a quince(15) dias de cumplir el plazo de ser contestada.
		Gracias por utilizar nuestro servicio,

Cordial Saludo,
Comunidad de Centro Juridico Uniguajira

************NO RESPONDER - Mensaje Generado Automáticamente********	

Este correo es únicamente informativo y es de uso exclusivo del destinatario(a), puede contener información privilegiada y/o confidencial. Si no es usted el destinatario(a) deberá borrarlo inmediatamente. Queda notificado que el mal uso, divulgación no autorizada, alteración y/o modificación malintencionada sobre este mensaje y sus anexos quedan estrictamente prohibidos y pueden ser legalmente sancionados.";
		$consulta1=mysql_query("SELECT * FROM administradores WHERE idusuario = '".$array['asesor_encargado']."'  ");
		$array1=mysql_fetch_array($consulta1);

		mail($array1['email'], $asunto, $mensaje);

	}


while ($array=mysql_fetch_array($consulta5)) 

	{ 
$mensaje="Se le informa que la tutela con radicado: ".$array['radicado']." esta a cinco(5) dias de cumplir el plazo de ser contestada.
		Gracias por utilizar nuestro servicio,

Cordial Saludo,
Comunidad de Centro Juridico Uniguajira

************NO RESPONDER - Mensaje Generado Automáticamente********	

Este correo es únicamente informativo y es de uso exclusivo del destinatario(a), puede contener información privilegiada y/o confidencial. Si no es usted el destinatario(a) deberá borrarlo inmediatamente. Queda notificado que el mal uso, divulgación no autorizada, alteración y/o modificación malintencionada sobre este mensaje y sus anexos quedan estrictamente prohibidos y pueden ser legalmente sancionados.";
		$consulta1=mysql_query("SELECT * FROM administradores WHERE idusuario = '".$array['asesor_encargado']."'  ");
		$array1=mysql_fetch_array($consulta1);

		mail($array1['email'], $asunto, $mensaje);

	}

while ($array=mysql_fetch_array($consulta5)) 

	{ 
$mensaje="Se le informa que la tutela con radicado: ".$array['radicado']." esta a cinco(5) dias de cumplir el plazo de ser contestada.
		Gracias por utilizar nuestro servicio,

Cordial Saludo,
Comunidad de Centro Juridico Uniguajira

************NO RESPONDER - Mensaje Generado Automáticamente********	

Este correo es únicamente informativo y es de uso exclusivo del destinatario(a), puede contener información privilegiada y/o confidencial. Si no es usted el destinatario(a) deberá borrarlo inmediatamente. Queda notificado que el mal uso, divulgación no autorizada, alteración y/o modificación malintencionada sobre este mensaje y sus anexos quedan estrictamente prohibidos y pueden ser legalmente sancionados.";
		$consulta1=mysql_query("SELECT * FROM administradores WHERE idusuario = '".$array['asesor_encargado']."'  ");
		$array1=mysql_fetch_array($consulta1);

		mail($array1['email'], $asunto, $mensaje);

	}




while ($array=mysql_fetch_array($consulta2)) 

	{ 
$mensaje="Se le informa que la tutela con radicado: ".$array['radicado']." esta a dos(2) dias de cumplir el plazo de ser contestada.
		Gracias por utilizar nuestro servicio,

Cordial Saludo,
Comunidad de Centro Juridico Uniguajira

************NO RESPONDER - Mensaje Generado Automáticamente********	

Este correo es únicamente informativo y es de uso exclusivo del destinatario(a), puede contener información privilegiada y/o confidencial. Si no es usted el destinatario(a) deberá borrarlo inmediatamente. Queda notificado que el mal uso, divulgación no autorizada, alteración y/o modificación malintencionada sobre este mensaje y sus anexos quedan estrictamente prohibidos y pueden ser legalmente sancionados.";
		$consulta1=mysql_query("SELECT * FROM administradores WHERE idusuario = '".$array['asesor_encargado']."'  ");
		$array1=mysql_fetch_array($consulta1);

		mail($array1['email'], $asunto, $mensaje);

	}




while ($array=mysql_fetch_array($consulta)) 

	{ 
$mensaje="Se le informa que la tutela con radicado: ".$array['radicado']." hoy cumple el plazo de ser contestada.
		Gracias por utilizar nuestro servicio,

Cordial Saludo,
Comunidad de Centro Juridico Uniguajira

************NO RESPONDER - Mensaje Generado Automáticamente********	

Este correo es únicamente informativo y es de uso exclusivo del destinatario(a), puede contener información privilegiada y/o confidencial. Si no es usted el destinatario(a) deberá borrarlo inmediatamente. Queda notificado que el mal uso, divulgación no autorizada, alteración y/o modificación malintencionada sobre este mensaje y sus anexos quedan estrictamente prohibidos y pueden ser legalmente sancionados.";
		$consulta1=mysql_query("SELECT * FROM administradores WHERE idusuario = '".$array['asesor_encargado']."'  ");
		$array1=mysql_fetch_array($consulta1);

		mail($array1['email'], $asunto, $mensaje);

	}


//   MAIL DE tutelASSSSSSSSSSSSSSSSSSSSSSS ///////////////////////////////////////////////////////////




//   MAIL DE DERECHOSSSSSSSSSSSSSSSSSSSSSSSS ///////////////////////////////////////////////////////////
$consulta15=mysql_query("SELECT * FROM dmo_derecho WHERE vencimientotermino = '".$fecha15."'  ");
$consulta5=mysql_query("SELECT * FROM dmo_derecho WHERE vencimientotermino = '".$fecha5."'  ");
$consulta2=mysql_query("SELECT * FROM dmo_derecho WHERE vencimientotermino = '".$fecha2."'  ");
$consulta=mysql_query("SELECT * FROM dmo_derecho WHERE vencimientotermino = '".$fecha."'  ");

while ($array=mysql_fetch_array($consulta15)) 

	{ 
$mensaje="Se le informa que el derecho de petición con ID: ".$array['id_derechopeticion']." esta a quince(15) dias del vencimiento de termino.
		Gracias por utilizar nuestro servicio,

Cordial Saludo,
Comunidad de Centro Juridico Uniguajira

************NO RESPONDER - Mensaje Generado Automáticamente********	

Este correo es únicamente informativo y es de uso exclusivo del destinatario(a), puede contener información privilegiada y/o confidencial. Si no es usted el destinatario(a) deberá borrarlo inmediatamente. Queda notificado que el mal uso, divulgación no autorizada, alteración y/o modificación malintencionada sobre este mensaje y sus anexos quedan estrictamente prohibidos y pueden ser legalmente sancionados.";
		$consulta1=mysql_query("SELECT * FROM administradores WHERE idusuario = '".$array['id_asesor']."'  ");
		$array1=mysql_fetch_array($consulta1);

		mail($array1['email'], $asunto, $mensaje);

	}


while ($array=mysql_fetch_array($consulta5)) 

	{ 
$mensaje="Se le informa que el derecho de petición con ID: ".$array['id_derechopeticion']." esta a cinco(5) dias del vencimiento de termino.
		Gracias por utilizar nuestro servicio,

Cordial Saludo,
Comunidad de Centro Juridico Uniguajira

************NO RESPONDER - Mensaje Generado Automáticamente********	

Este correo es únicamente informativo y es de uso exclusivo del destinatario(a), puede contener información privilegiada y/o confidencial. Si no es usted el destinatario(a) deberá borrarlo inmediatamente. Queda notificado que el mal uso, divulgación no autorizada, alteración y/o modificación malintencionada sobre este mensaje y sus anexos quedan estrictamente prohibidos y pueden ser legalmente sancionados.";
		$consulta1=mysql_query("SELECT * FROM administradores WHERE idusuario = '".$array['id_asesor']."'  ");
		$array1=mysql_fetch_array($consulta1);

		mail($array1['email'], $asunto, $mensaje);

	}

while ($array=mysql_fetch_array($consulta2)) 

	{ 
$mensaje="Se le informa que el derecho de petición con ID: ".$array['id_derechopeticion']." esta a dis(2) dias del vencimiento de termino.
		Gracias por utilizar nuestro servicio,

Cordial Saludo,
Comunidad de Centro Juridico Uniguajira

************NO RESPONDER - Mensaje Generado Automáticamente********	

Este correo es únicamente informativo y es de uso exclusivo del destinatario(a), puede contener información privilegiada y/o confidencial. Si no es usted el destinatario(a) deberá borrarlo inmediatamente. Queda notificado que el mal uso, divulgación no autorizada, alteración y/o modificación malintencionada sobre este mensaje y sus anexos quedan estrictamente prohibidos y pueden ser legalmente sancionados.";
		$consulta1=mysql_query("SELECT * FROM administradores WHERE idusuario = '".$array['id_asesor']."'  ");
		$array1=mysql_fetch_array($consulta1);

		mail($array1['email'], $asunto, $mensaje);

	}

while ($array=mysql_fetch_array($consulta)) 
{ 
$mensaje="Se le informa que el derecho de petición con ID: ".$array['id_derechopeticion']." hoy cumple vencimiento de termino.
		Gracias por utilizar nuestro servicio,

Cordial Saludo,
Comunidad de Centro Juridico Uniguajira

************NO RESPONDER - Mensaje Generado Automáticamente********	

Este correo es únicamente informativo y es de uso exclusivo del destinatario(a), puede contener información privilegiada y/o confidencial. Si no es usted el destinatario(a) deberá borrarlo inmediatamente. Queda notificado que el mal uso, divulgación no autorizada, alteración y/o modificación malintencionada sobre este mensaje y sus anexos quedan estrictamente prohibidos y pueden ser legalmente sancionados.";
		$consulta1=mysql_query("SELECT * FROM administradores WHERE idusuario = '".$array['id_asesor']."'  ");
		$array1=mysql_fetch_array($consulta1);

		mail($array1['email'], $asunto, $mensaje);

	}

?>