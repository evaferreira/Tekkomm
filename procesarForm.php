<?php 

	if (!$_POST["nombre"] || !$_POST["apellido"] || !$_POST["tel"] || 
		!$_POST["mensaje"] || !$_POST["mail"])
	{
		echo "Falta que ponga algo";
	}
	else
	{
		$Name = $_POST["nombre"] . $_POST["apellido"]; //senders name
		$email = $_POST["mail"]; //senders e-mail adress
		$recipient = "nicolas.m.giudice@gmail.com"; //recipient
		$mail_body = $_POST["mensaje"]; //mail body
		$subject = "Consulta desde la Pagina Web"; //subject
		$header = "From: ". $Name . " <" . $email . ">\r\n"; //optional headerfields

		mail($recipient, $subject, $mail_body, $header); 
	}
 ?>
