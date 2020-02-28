<?PHP
	$cuerpo=" Nombre: $_POST[name] Email: $_POST[correo] Telefono: $_POST[tele] Mensaje: $_POST[mensaje]";
		if (@mail("ednicgv@gmail.com","Asunto","$cuerpo","De:".$correo)) {
			die("enviado con exito!");
			}else{
				die("Problema al enviar el email");
			}
?>