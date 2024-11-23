<!DOCTYPE html>
<html>
<head>
	<title>REGISTRO</title>
	<link rel="icon" type="image/jpg" href="assets/img/logo.jpeg">
  <!-- Hoja de estilos -->
  <link href="assets/css1/style.css" rel="stylesheet">

  <!-- Google fonts -->
  <link href="https://fonts.googleapis.com/css?family=Muli:400,700&display=swap" rel="stylesheet">

  <!-- Ionic icons -->
  <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">

 <!-- Bootstrap Css -->
  <link href="assets/css1/bootstrap.min.css" rel="stylesheet">
</head>

<body background="assets/img/imagen.jpeg">

<!-- Page Content -->

<?php 
include 'navega.php'
?>


   <section class="form-register"> 
    <center><a href=""target=""></a><img src="assets/img/logo2.jpg" ></a>Registro</h3>
        <form action="registrar_user.php" method="post">
            <input class="controls" type="hidden" name="conex" value = "2" readonly="readonly" >
            <input class="controls" type="text" name="nombre" placeholder="Ingrese su nombre" required="required">
            <input class="controls" type="text" name="apellido" placeholder="Ingrese su apellido" required="required">
            <input class="controls" type="text" name="correo" placeholder="Ingrese su contraseña" required="required">
            <input class="controls" type="password" name="contra" placeholder="ingrese su contraseña" required>
            
            <br>
            <input class="botons" name="boton" value="Sign up" type="submit">
        </form>
    </section>
 

</body>
</html>
<!--

-->