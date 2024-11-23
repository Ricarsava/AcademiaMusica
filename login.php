<?php
   session_start();

   session_destroy();

$mensaje= null;
if(isset($_GET['mensaje'])){
if($_GET['mensaje']==1){
 $mensaje = 'Contraseña o usuario incorrecta';
}else if($_GET['mensaje']==2){
  $mensaje = 'Sesion cerrada correctamente';
}
}
?>
<!DOCTYPE html>
<html>
<head> 
    
    <link rel="icon" type="image/jpg" href="assets/img/logo.jpeg">
	<!-- Bootstrap Css -->
    <link href="assets/css1/bootstrap.min.css" rel="stylesheet">

    <!-- Hoja de estilos -->
    <link href="assets/css1/style.css" rel="stylesheet">
  
    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Muli:400,700&display=swap" rel="stylesheet">
  
    <!-- Ionic icons -->
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
 <title>Login</title>
 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</head>
<body>
 
<!-- Page Content --> 
<body background="assets/img/imagen-empresa.jpeg">

<div id="page-content-wrapper" >

<?php 
include 'navega.php';
?>

    


   <section class="form-register">
     <center><a href=""target=""></a><img src="assets/img/logo2.jpg" ></a></center>
        <form action="validar_user.php" method="post">
            <h1>Email</h1>
            <input class="controls" type="text" name="usuario" placeholder="Enter your email" required>
            <h1>Password</h1>
            <input class="controls" type="password" name="contrasena" placeholder="Enter your password" required>
            <br>
            <input class="botons" value="Log in" type="submit">

        </form>
        <a href="regis.php">  <button class="botons" onclick="Location:'regis.php'" >Sign up</button></a>
    </section>



<!-- Modal -->
<div class="modal fade" id="ejemplomodal" tabindex="-1" aria-labelledby="ejemplomodalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ejemplomodalLabel">Mensaje del sistema</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <?php echo $mensaje;?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      
      </div>
    </div>
  </div>
</div>

</body>
</html>
<script>
  $(document).ready(function(){
    if('<?php echo $mensaje; ?>'){
      $('#ejemplomodal').modal({
        show: true
          });}
       });
  

</script>
