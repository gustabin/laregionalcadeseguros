<?php

//=========================Recuperar datos del formulario ============================================

$Nombre=$_POST['txt_Nombre'];

$Cedula=$_POST['txt_Cedula'];

$Direccion=$_POST['txt_Direccion'];

$Telefono=$_POST['txt_Telefono'];

$Email=$_POST['txt_Email'];

$Edad=$_POST['txt_Edad'];

$EdoCivil=$_POST['txt_EdoCivil'];

$Sexo=$_POST['rad_Sexo'];

$Marca=$_POST['txt_Marca'];

$Modelo=$_POST['txt_Modelo'];

$Año=$_POST['txt_Año'];

$Uso=$_POST['txt_Uso'];

$Contactado=$_POST['rad_Contactado'];



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

		$destino = "produccion@laregionalcadeseguros.com";  //MODIFICAR, ESTA LINEA DEBE IR

		//$destino = "gustavoarias@outlook.com";  // LINEA TEMPORAL SOLO PARA PRUEBAS DE EMISION DE EMAIL

		$asunto = "Contacto para cotizacion de poliza - laregionalcadeseguros.com";

		$cabeceras = "Content-type: text/html";

		$cuerpo ="Alguien te ha contactado para saber acerca de una cotización de poliza.<br>

		Estos son los datos de la persona:<br>

		<b>Nombre: </b>$Nombre<br>

		<b>Cedula: </b>$Cedula<br>

		<b>Direccion: </b>$Direccion<br>

		<b>Teléfono: </b>$Telefono<br>

		<b>Email: </b>$Email<br>

		<b>Edad: </b>$Edad<br>

		<b>EdoCivil: </b>$EdoCivil<br>

		<b>Sexo: </b>$Sexo<br>

		<b>Marca: </b>$Marca<br>

		<b>Modelo: </b>$Modelo<br>

		<b>Año: </b>$Año<br>

		<b>Uso: </b>$Uso<br>

		<b>Prefiere ser contactado por: </b>$Contactado<br>

		<br>

		<br>

		<br>Saludos.<br>

		<br>El equipo de La Regional c.a. de Seguros.<br>

		<img src=http://www.laregionalcadeseguros.com/images/logotipo.jpg>";	

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