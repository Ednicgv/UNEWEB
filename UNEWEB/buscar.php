<HTML>
	<HEAD>
		<TITLE> Buscar Usuario </TITLE>
	</HEAD>
	
	<BODY>
		<CENTER>
			<?PHP include ("tope.php"); ?>
			<H1> Buscar Usuario </H1>
				<form id ="Buscar_Usuario" name="Buscar_Usuario" METHOD="POST" ACTION="">
					<table width="230" border="3">
						<tr align="center">
							<td><label for="cedula">Cedula</label></td>
							<td><input type="text" name="cedula" id="cedula"/></td>
						</tr>
						
						<tr align="center">
							<td colspan="2"><input type="submit" name="buscar" id="buscar" value="Buscar"/></td>
						</tr>
					
				</form>
			<?PHP
					error_reporting(0);
					if($_POST['buscar']) {
						include ("conexion.php");
						$sql="SELECT * FROM usuarios WHERE cedula='$_POST[cedula]'";
						$consulta=@mysql_query ($sql,$conexion);
							if (list ($cedula,$nombre,$apellido,$tlfn,$genero)=mysql_fetch_array($consulta)) {
							?>	
							<br>
							<table width="850" border="1">
							<tr align="center">
								<td>
									<b> Cedula:</b> <?PHP echo $cedula; ?> <br>
								</td>
							    
								<td>
									<b> Nombre:</b> <?PHP echo $nombre; ?> <br>
								</td>
								
								<td>
									<b> Apellido:</b><?PHP echo $apellido; ?> <br>
								
								</td>
								
								<td>
									<b> Telefono:</b> <?PHP echo $tlfn; ?> <br>
								</td>
								
								<td>
									<b> Genero:</b> <?PHP echo $genero; ?> <br>
								</td>
							</tr>
							<?PHP
								
							} else{ 
								echo "Dato no encontrado";
							}
						mysql_close($conexion);	
						}
			?>
						</table>
	</BODY>
</HTML>