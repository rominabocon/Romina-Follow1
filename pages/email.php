<?php
$email_to = "romina.bocon@followyourdreamstravels.com";
$email_subject = "Contacto desde la web";
$email_message = "Detalles del formulario de contacto:\n\n";
$email_message .= "Nombre: " . $_POST['inp_nombre'] . "\n";
$email_message .= "Telefono: " . $_POST['inp_tel'] . "\n";
$email_message .= "E-mail: " . $_POST['inp_mail'] . "\n";
$email_message .= "Cantidad de adultos: " . $_POST['inp_adultos'] . "\n";
$email_message .= "Cantidad de niños: " . $_POST['inp_ninos'] . "\n";
$email_message .= "Parques: " . $_POST['inp_parques'] . "\n";
$email_message .= "Comentarios: " . $_POST['inp_coment'] . "\n\n";
$headers = 'From: ' . $email_to . "\r\n" . 'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);
echo '<script type="text/javascript">
		    	alert("Gracias por su consulta, me comunicaré dentro de las proximas 48hs para comenzar a programar sus proximas vacaciones mágicas.");
		    	window.location.href="/index.html";
		      </script>';