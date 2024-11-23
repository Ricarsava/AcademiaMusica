<?php 
session_start();

if( isset($_SESSION['esta_logueado']) && $_SESSION['esta_logueado'] == true ){
 //
}else{
  //Redirrecionando al login
  header ('Location: login.php');
  //Cerramos la conexion inciada
  mysqli_close($conexion);
  //Matamos el proceso en php
  exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>INSTRUEDU | PERFIL</title>
  <!-- llamar al head para poder usarlos en todos los demas sin necesidad de repetir  -->
<?php 
  include 'head.php';
?>
</head>
<body>
<?php
    include 'navegador_inicio.php';
 include 'mensaje.php';
 ?>




  <!--  Movimiento del menu de inicio -->
  <script>
$("#menu-toggle").click(function (e) {
    e.preventDefault();
    $("#content-wrapper").toggleClass("toggled");
  });
</script>
</body>
</html>