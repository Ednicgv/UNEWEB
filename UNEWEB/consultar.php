<HTML>
	<HEAD>
		<TITLE> Consultar </TITLE>
	</HEAD>
	
	<BODY>
		<CENTER>
		<?PHP include ("tope.php"); ?>
		<H1>Consulta
		<table width="800" border="1">
			<tr align="center">
				<td><strong>Cedula</strong></td>
				<td><strong>Nombre</strong></td>
				<td><strong>Apellido</strong></td>
				<td><strong>Telefono</strong></td>
				<td><strong>Genero</strong></td>
			</tr>
		<?PHP
		include ("conexion.php");
		$sql="SELECT * FROM usuarios";
		$consulta=@mysql_query($sql,$conexion);
			while (list($cedula,$nombre,$apellido,$tlfn,$genero)=mysql_fetch_array($consulta)) {
			?>
			<tr>
				<td>
					<?PHP 
						echo $cedula; 
					?>
				</td>
				
				<td>
					<?PHP
						echo $nombre;
					?>
				</td>
				
				<td>
					<?PHP
						echo $apellido;
					?>
				</td>
				
				<td>
					<?PHP
						echo $tlfn;
					?>
				</td>

				<td>
					<?PHP
						echo $genero;
					?>
				</td>
				

				</tr>
			<?PHP }	
			?>
		</table>
		</BODY>
	</HTML>