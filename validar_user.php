<?php
 session_start();
    $user = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];

include 'conexion.php';
    
$consulta="select * from usuario where CORREO='".$user."' AND DELETE_AT IS NULL";
$resulta = mysqli_query($conexion,$consulta);
	//Valida si existe el usuaio
	if(mysqli_num_rows($resulta) == 0){
		//Redirrecionando al login
		header ('Location: login.php?mensaje=1');
		//Cerramos la conexion inciada
		mysqli_close($conexion);
		//Matamos el proceso en php
		exit();
	}
	//convetir el resultado en un arreglo
	$obtener = mysqli_fetch_array($resulta);

 if($contrasena == $obtener ['CONTRASE']){
	//Definir las variables de sesion
		$_SESSION['esta_logueado'] = true;
		$_SESSION['nombre']= $obtener ['NOMBRES'];
		$_SESSION['id'] = $obtener ['ID_USUARIO'];

				$consul="select * from usuario_rol where FK_ID_USUARIO='".$obtener['ID_USUARIO']."' AND DELETE_AT IS NULL";
				$resul = mysqli_query($conexion,$consul);
				$obte= mysqli_fetch_array($resul);
				
				$_SESSION['rol'] = $obte['FK_ID_ROL'];
				


			$consul1= "select * from rol where ID_ROL='".$obte['FK_ID_ROL']."' AND DELETE_AT IS NULL";
			$resul1= mysqli_query($conexion,$consul1);
			$obten1= mysqli_fetch_array($resul1);
			$_SESSION['NOMBRE_ROL'] = $obten1['NOMBRE'];
			//Redirrecion a la pagina principal= HOME or DASHBOARD
			if($obte['FK_ID_ROL'] == 1){
				$_SESSION['usu'] = 2;
				header('Location: inicio.php');
			}elseif ($obte['FK_ID_ROL'] == 2){
				header('Location: users.php?usu=1');
			}elseif($obte['FK_ID_ROL'] == 3){
				$_SESSION['usu'] = 1;
				header('Location: inicio.php');
			}
	

 }else{
	header('Location: login.php?mensaje=1');

	mysqli_close($conexion);
 }
?>