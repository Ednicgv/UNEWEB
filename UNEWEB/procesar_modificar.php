<?PHP
	if ($_POST ['modificar']) {
		include "conexion.php";
		$sql="UPDATE usuarios set usuarios_nombre='$_POST[nombre]', usuarios_apellido='$_POST[apellido]', usuarios_tlfn='$_POST[tlfn]', usuarios_genero='$_POST[genero]' WHERE usuarios_cedula='$_POST[CedulaOculta]'";
		$consulta=@mysql_query($sql,$conexion);
			if ( !mysql_error() ) {
				echo "Datos Actualizados!";
			} else{
				echo "Error, no se modificaron los datos";
			}
		mysql_close($conexion);
	}
?>