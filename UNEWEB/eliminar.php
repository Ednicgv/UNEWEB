<HTML>
	<HEAD>
		<TITLE> Eliminar Usuario </TITLE>
	</HEAD>
	
	<BODY>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/> <?PHP //Acentos y caracteres especiales?>
	<?PHP include ("tope.php"); ?>
	<H1>Eliminar Usuario  </H1>
		<CENTER>
		<form id ="Eliminar_Usuario" name="Eiminar_Usuario" METHOD="POST" ACTION="">
				<table width="230" border="3">
					<tr align="center">
							<td><label for="cedula">Cedula</label></td>
							<td><input type="text" name="usuarios_cedula" id="cedula"/></td>
					</tr>
					
					<tr align="center">
						<td colspan="2"><input type="submit" name="buscar" id="buscar" value="Buscar"/></td>
					</tr>	
				</table>
		</form>
		
			<?PHP
			if($_POST['buscar']) {
				include ("conexion.php");
				$sql="SELECT * FROM usuarios WHERE usuarios_cedula='$_POST[usuarios_cedula]'";
				$consulta=@mysql_query ($sql,$conexion);
					if (list ($usuarios_cedula,$usuarios_nombre,$usuarios_apellido,$usuarios_tlfn,$usuarios_genero)=mysql_fetch_array($consulta)) {
			?>
		<FORM METHOD="POST" ACTION="procesar_eliminar.php">
			<table width="800" border="3">
				<tr align="center">
					<td><b>Cedula</b></td>
					<td><b>Nombre</b></td>
					<td><b>Apellido</b></td>
					<td><b>Telefono</b></td>
					<td><b>Genero</b></td>
				</tr>
			<tr> 
					<td> 
						<input type="hidden" name="CedulaOculta" value="<?PHP echo $usuarios_cedula; ?>" /> 
						<?PHP echo $usuarios_cedula; ?> 
					</td>
					
					<td> 
						<input type="hidden" name="nombre" value="<?PHP echo $usuarios_nombre; ?>" />
						<?PHP echo $usuarios_nombre; ?>
					</td>
					
					<td>
						<input type="hidden" name="apellido" value="<?PHP echo $usuarios_apellidos; ?>" />
						<?PHP echo $usuarios_apellido; ?>
					</td>
					
					<td>
						<input type="hidden" name="tlfn" value="<?PHP echo $usuarios_tlfn; ?>" />
						<?PHP echo $usuarios_tlfn; ?>
					</td>
					
					<td>
						<input type="hidden" name="genero" value="<?PHP echo $usuarios_genero;?>"/>
						<?PHP echo $usuarios_genero; ?>
					</td>
				</tr>
					<tr align="center">
						<CENTER>
						<td colspan="5"><input type="submit" name="eliminar" id="eliminar" value="Eliminar"/></td>
				</tr>
			</table>
		</form>
			<?PHP
			
			}else{ 
				echo "Dato no encontrado"; 
			}
			mysql_close($conexion);
			die();
		}
			?>	
		
	
	</BODY>
</HTML>