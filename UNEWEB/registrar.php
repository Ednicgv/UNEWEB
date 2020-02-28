<HTML>
	<HEAD>
		<TITLE> Registrar Usuario </TITLE>
	</HEAD>
	
	<BODY>
	
		<?PHP include ("tope.php"); ?>
		<CENTER>
		<form id ="form1" name="form1" METHOD="POST" ACTION="">
				<p>
				<label for="cedula">Cedula</label>
				<input type="text" name="usuarios_cedula" id="cedula"/>
				</p>
				
				<p>
				<label for="nombre">Nombre</label>
				<input type="text" name="usuarios_nombre" id="nombre"/> 
				</p>
				
				<p>
				<label for="apellido">Apellido</label>
				<input type="text" name="usuarios_apellido" id="apellido"/> 
				</p>
				
				<p>
				<label for="tlfn">Telefono</label>
				<input type="text" name="usuarios_tlfn" id="tlfn"/> 
				</p>
				
				<p>
				<label for="genero">Genero</label>
				<input type="radio" name="usuarios_genero" id="genero" value="Femenino"/> Femenino 
				<input type="radio" name="usuarios_genero" id="genero" value="Masculino"/> Masculino 
				<input type="radio" name="usuarios_genero" id="genero" value="Otro"/> Otro 
				</p>
				
				
				<p>
				<input type="submit" name="registrar" id="registrar" value="Enviar"/>
				</p>
		</form>
		<?php
			error_reporting(0);
			if ($_POST ['registrar']) {
				include "conexion.php";
				$sql="Insert into usuarios values  ('$_POST[usuarios_cedula]','$_POST[usuarios_nombre]','$_POST[usuarios_apellido]','$_POST[usuarios_tlfn]','$_POST[usuarios_genero]')";
				$consulta=@mysql_query($sql,$conexion);
					if (!mysql_error() ){
						echo "Enviado con exito!";
					}
				}
		?>	
	</BODY>
</HTML>