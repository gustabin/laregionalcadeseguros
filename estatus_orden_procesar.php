<?php

//=========================Recuperar datos del formulario ============================================

$Dir=$_GET['Variable']; //Departamento a donde va el correo

$Nombre=$_POST['txt_Nombre'];

$Email=$_POST['txt_Email'];



//-------------------------seleccion de email---------------------------------------------------------\\

if ($Dir=Produccion)

{

	$asunto = "Contacto para solicitar informaci�n al dtpo. de Producci�n - laregionalcadeseguros.com";

	$destino = "produccion@laregionalcadeseguros.com";

	$cuerpo ="Alguien te ha contactado para saber optener informacion del departamento de Producci�n.<br>

	Estos son los datos de la persona:<br>

	<b>Nombre: </b>$Nombre<br>

	<b>Email: </b>$Email<br>

	<br>

	<br>

	<br>Saludos.<br>

	<br>El equipo de La Regional c.a. de Seguros.<br>

	<img src=http://www.laregionalcadeseguros.com/images/logotipo.jpg>";		

}

elseif ($Dir=Renovacion)

{

	$destino = "renovacion@laregionalcadeseguros.com";

	$asunto = "Contacto para solicitar informaci�n para una Renovaci�n - laregionalcadeseguros.com";

	$cuerpo ="Alguien te ha contactado para los requisitos de una renovaci�n de poliza.<br>

	Estos son los datos de la persona:<br>

	<b>Nombre: </b>$Nombre<br>

	<b>Email: </b>$Email<br>

	<br>

	<br>

	<br>Saludos.<br>

	<br>El equipo de La Regional c.a. de Seguros.<br>

	<img src=http://www.laregionalcadeseguros.com/images/logotipo.jpg>";		

}

elseif ($Dir=Siniestros)

{

	$destino = "jefesiniestros@laregionalcadeseguros.com";

	$asunto = "Contacto para solicitar informaci�n de un Siniestro - laregionalcadeseguros.com";

	$cuerpo ="Alguien te ha contactado para solicitar informaci�n de un Siniestro.<br>

	Estos son los datos de la persona:<br>

	<b>Nombre: </b>$Nombre<br>

	<b>Email: </b>$Email<br>

	<br>

	<br>

	<br>Saludos.<br>

	<br>El equipo de La Regional c.a. de Seguros.<br>

	<img src=http://www.laregionalcadeseguros.com/images/logotipo.jpg>";		

}

elseif ($Dir=Repuestos)

{

	$destino = "repuestos@laregionalcadeseguros.com";

	$asunto = "Contacto para solicitar informaci�n sobre Repuestos - laregionalcadeseguros.com";

	$cuerpo ="Alguien te ha contactado para solicitar informaci�n sobre los repuestos para mi vehiculo.<br>

	Estos son los datos de la persona:<br>

	<b>Nombre: </b>$Nombre<br>

	<b>Email: </b>$Email<br>

	<br>

	<br>

	<br>Saludos.<br>

	<br>El equipo de La Regional c.a. de Seguros.<br>

	<img src=http://www.laregionalcadeseguros.com/images/logotipo.jpg>";		

}

elseif ($Dir=AnalistaI)

{

	$destino = "admon1@laregionalcadeseguros.com";

	$asunto = "Contacto para solicitar una cotizaci�n - laregionalcadeseguros.com";

	$cuerpo ="Alguien te ha contactado para solicitar informaci�n sobre una cotizaci�n.<br>

	Estos son los datos de la persona:<br>

	<b>Nombre: </b>$Nombre<br>

	<b>Email: </b>$Email<br>

	<br>

	<br>

	<br>Saludos.<br>

	<br>El equipo de La Regional c.a. de Seguros.<br>

	<img src=http://www.laregionalcadeseguros.com/images/logotipo.jpg>";		

}

elseif ($Dir=AnalistaII)

{

	$destino = "admon2@laregionalcadeseguros.com";

	$asunto = "Contacto para solicitar una cotizaci�n - laregionalcadeseguros.com";

	$cuerpo ="Alguien te ha contactado para solicitar informaci�n sobre una cotizaci�n.<br>

	Estos son los datos de la persona:<br>

	<b>Nombre: </b>$Nombre<br>

	<b>Email: </b>$Email<br>

	<br>

	<br>

	<br>Saludos.<br>

	<br>El equipo de La Regional c.a. de Seguros.<br>

	<img src=http://www.laregionalcadeseguros.com/images/logotipo.jpg>";		

}

elseif ($Dir=Legal)

{

	$destino = "dptolegal@laregionalcadeseguros.com";

	$asunto = "Contacto para solicitar informaci�n Legal - laregionalcadeseguros.com";

	$cuerpo ="Alguien te ha contactado para solicitar informaci�n del departamento Legal.<br>

	Estos son los datos de la persona:<br>

	<b>Nombre: </b>$Nombre<br>

	<b>Email: </b>$Email<br>

	<br>

	<br>

	<br>Saludos.<br>

	<br>El equipo de La Regional c.a. de Seguros.<br>

	<img src=http://www.laregionalcadeseguros.com/images/logotipo.jpg>";		

}

elseif ($Dir=Oficial)

{

	$destino = "oficialdecumplimiento@laregionalcadeseguros.com";

	$asunto = "Contacto para solicitarle informaci�n a la Oficial de cumplimiento - laregionalcadeseguros.com";

	$cuerpo ="Alguien te ha contactado para solicitar informaci�n a la Oficial de cumplimiento.<br>

	Estos son los datos de la persona:<br>

	<b>Nombre: </b>$Nombre<br>

	<b>Email: </b>$Email<br>

	<br>

	<br>

	<br>Saludos.<br>

	<br>El equipo de La Regional c.a. de Seguros.<br>

	<img src=http://www.laregionalcadeseguros.com/images/logotipo.jpg>";		

}

elseif ($Dir=Status)

{

	$destino = "jefesiniestros@laregionalcadeseguros.com";

	$asunto = "Contacto para saber el estatus de una orden de reparacion - laregionalcadeseguros.com";

	$cuerpo ="Alguien te ha contactado para saber acerca del estatus de una orden de reparacion.<br>

	Estos son los datos de la persona:<br>

	<b>Nombre: </b>$Nombre<br>

	<b>Email: </b>$Email<br>

	<br>

	<br>

	<br>Saludos.<br>

	<br>El equipo de La Regional c.a. de Seguros.<br>

	<img src=http://www.laregionalcadeseguros.com/images/logotipo.jpg>";	



}

//-------------------------Fin de la Seleccion--------------------------------------------------------\\

	// ===============================================Grabar los datos ====Guardar el PIN============================================

	// ===============================================Conectar a base de datos====================================

	//$database = "a4417033_citadr";

	//mysql_select_db($database);

	// ===============================================Introducir los datos en la tabla=====================================

	//$query_rs_insertUsuario = "INSERT INTO citas (ID_Dr, nombre_Paciente, apellido_Paciente, email, celular, motivo, fecha, hora, dia, pin, tipo) VALUES ('".$ID_Dr."',

	//'".$nombre_Paciente."', '".$apellido_Paciente."', '".$email."', '".$celular."', '".$motivo."', '".$fecha."', '".$hora."', '".$dia."', '".$Pin."', '".$_SESSION['MM_consulta']."');";



	//$rs_insertUsuario = mysql_query($query_rs_insertUsuario); 

	//if($rs_insertUsuario == false) 

	//{

		//==========================Error al insertar los campos en la tabla.=========================================

	//}

	//else

	//{

		//============================Los datos se han insertado correctamente.=========================================

		//============== leer el id del ultimo registro ======================

		//$rs = mysql_query("SELECT @@identity AS id");

		//if ($row = mysql_fetch_row($rs)) 

		//{

		//	$id = trim($row[0]);

		//}

		//========asignar valor a variable de session ==============

		//$_SESSION['MM_idCita']=$id;

		//desconectar();

		//mysql_close();

	//}	

		//===================Enviar PIN de confirmacion via correo

		//$destino = $Email;

		//$destino = "jefesiniestros@laregionalcadeseguros.com"; // MODIFICAR, ESTA LINEA DEBE IR

		//$destino = "gustavoarias@outlook.com";  // LINEA TEMPORAL SOLO PARA PRUEBAS DE EMISION DE EMAIL

		//$asunto = "Contacto para saber el estatus de una orden de reparacion - laregionalcadeseguros.com";

		$cabeceras = "Content-type: text/html";

//		$cuerpo ="Alguien te ha contactado para saber acerca del estatus de una orden de reparacion.<br>

//		Estos son los datos de la persona:<br>

//		<b>Nombre: </b>$Nombre<br>

//		<b>Email: </b>$Email<br>

//		<br>

//		<br>

//		<br>Saludos.<br>

//		<br>El equipo de La Regional c.a. de Seguros.<br>

//		<img src=http://www.laregionalcadeseguros.com/images/logotipo.jpg>";	

		//echo $cuerpo;

		$yourWebsite = "laregionalcadeseguros.com";

		$yourEmail   = "sistemas@laregionalcadeseguros.com";

	    $cabeceras = "From: $yourWebsite <$yourEmail>\n" . "Content-type: text/html" ;

		//echo $cuerpo;

		mail($destino,$asunto,$cuerpo,$cabeceras);

//}

				//===================================================Redirigir a otra pagina============================================

	header("Location: cotizacion_enviada.html");

?>