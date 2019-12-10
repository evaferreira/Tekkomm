<?php
	$Name = $_POST["nombre"];
	$apellido = $_POST["apellido"];
	$email = $_POST["mail"];
	$tel = $_POST["tel"];
	$mensaje = $_POST["mensaje"]; 

	// Eliminamos espacio en blanco del inicio y el final de la cadena.
	$Name = trim ($Name);
	$apellido = trim ($apellido);
	$email = trim ($email);
	$tel = trim ($tel);
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
		$recipient = "nicolas.m.giudice@gmail.com"; //recipient
		$mail_body = $_POST["mensaje"]; //mail body
		$subject = "Consulta desde la Pagina Web"; //subject
		$header = "From: ". $Name . " <" . $email . ">\r\n"; //optional headerfields

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
		$consulta = "INSERT INTO clientes VALUES (0,'$nombre', '$apellido', '$email', '$tel')";

		mysqli_query($enlace, $consulta);

		header ("location: ../contacto.php?error=0");
	}
 ?>