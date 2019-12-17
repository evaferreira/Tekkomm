<?php
	$Name = $_POST["nombre"];
	$apellido = $_POST["apellido"];
	$email = $_POST["mail"];
	$tel = $_POST["tel"];
	$ciudad = $_POST["ciudad"];
	$mensaje = $_POST["mensaje"]; 

	// Eliminamos espacio en blanco del inicio y el final de la cadena.
	$Name = trim ($Name);
	$apellido = trim ($apellido);
	$email = trim ($email);
	$tel = trim ($tel);
	$ciudad = trim ($ciudad);
	$mensaje = trim ($mensaje); 

	// Error que no se ingreso email.
	if ($Name == NULL || $Name == "" || $apellido == NULL || $apellido == "" ||
		$email == NULL || $email == "" || $tel == NULL || $tel == "" || $mensaje == NULL || $mensaje == "")
	{
		header ("location: ../contacto.php?error=1");
	}
	else if (ctype_alpha ($Name) == FALSE){
		header ("location: ../contacto.php?error=2");
	}
	else if (ctype_alpha ($apellido) == FALSE){
		header ("location: ../contacto.php?error=3");
	}
	else if (ctype_digit ($tel) == FALSE){
		header ("location: ../contacto.php?error=4");
	}
	else
	{
		// ENVIAMOS UN MAIL CON EL CONTENIDO DE LA CONSULTA.
		$mail_body = '<html><body>';		
		$mail_body .= $mensaje;
		$mail_body .= '<br>';
		$mail_body .= '<h3>Datos Personales:</h3>';
		$mail_body .= '<strong>Nombre: </strong><spam>'.$Name.'</spam> <spam> '.$apellido.'</spam>';
		$mail_body .= '<br>';
		$mail_body .= '<strong>Email: </strong><spam>'.$email.'</spam>';
		$mail_body .= '<br>';
		$mail_body .= '<strong>Ciudad: </strong><spam>'.$ciudad.'</spam>';

		$recipient = "nicolas.m.giudice@gmail.com"; //recipient
		$subject = "Consulta desde la Pagina Web"; //subject

		// Encabezado para enviar mails con formato HTML.
		$header  = "MIME-Version: 1.0" . "\r\n";
		$header .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
		$header .= "From: $Name <$email>";

		mail($recipient, $subject, $mail_body, $header);
		

		// VAMOS A GUARDAR EN LA BASE DE DATOS LOS DATOS QUE RECIBIMOS EN EL FORMULARIO. SI EXISTE ALGUN TIPO DE ERROR NO NOS IMPORTA, SOLAMENTE NO VAMOS A GUARDAR LOS DATOS.
		include ("conexionBD.php");
		
		if ($enlace == NULL)
		{
			// quiero mandar aca un mensaje a nosotros mismos avisando que hay problema de base de datos.
			$mail_body = "Ocurrio alguna falla en el servidor y no se puede conectar."; //mail body	
			$subject = "Falla en el Servidor"; //subject
			$header = "From: Pagina Tekkomm\r\n"; //optional headerfields
			
			mail($recipient, $subject, $mail_body, $header);
		}

		// Agrego los datos a la base de datos.
		$consulta = "INSERT INTO contactos_web VALUES (0,'$nombre', '$apellido', '$email', '$tel', '$ciudad')";

		mysqli_query($enlace, $consulta);

		header ("location: ../contacto.php?error=0");
	}
 ?>