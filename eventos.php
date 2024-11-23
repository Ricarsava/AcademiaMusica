<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>INSTRUEDU | EVENTOS</title>
  <!-- llamar al head para poder usarlos en todos los demas sin necesidad de repetir  -->
<?php 
  include 'head.php';
?>
</head>
<body>
<?php
    include 'navegador_inicio.php';

?>
<?php
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