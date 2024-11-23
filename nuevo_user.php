<?php
  session_start();
  include 'conexion.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
<title>INSTRUEDU | NUEVO</title>
  <!-- llamar al head para poder usarlos en todos los demas sin necesidad de repetir  -->
<?php

  include 'head.php';
?>
</head>
<body>
<?php
    include 'navegador_inicio.php';
    if(isset($_GET['usu'])&& $_GET['usu']== 6){
      $_SESSION['nusu']= 6;
    }
$x=$_SESSION['nusu'];
if($x==1){
    echo '<section class="form-register"> ';
    echo '    <h3 align="center">Sign up to a new user</h3>';
    echo '    <form action="registrar_user.php" method="post">';
    echo '          <input class="controls" type="hidden" name="conex" value = "1" readonly="readonly" >';
    echo '        <input class="controls" type="text" name="nombre" placeholder="Enter name" required="required">';
    echo '        <input class="controls" type="text" name="apellido" placeholder="Enter Last Name" required="required">';
    echo '        <input class="controls" type="text" name="correo" placeholder="Enter email" required="required">';
    echo '        <input class="controls" type="password" name="contra" placeholder="Enter password" required>';
    echo '        <br>';
    echo '        <input class="botons" name="boton" value="Sign up" type="submit">';
    echo '    </form>';
    echo '</section>';
  }elseif($x==2){
    echo '<section class="form-register"> ';
    echo '    <h3 align="center">Enter new information about instrument type</h3>';
    echo '    <form action="registrar_user.php" method="post">';
    echo '          <input class="controls" type="hidden" name="conex" value = "3" readonly="readonly" >';
    echo '        <input class="controls" type="text" name="des" placeholder="Enter a description" required="required">';
    echo '        <br>';
    echo '        <input class="botons" name="boton" value="Sign up" type="submit">';
    echo '    </form>';
    echo '</section>';
  }
  elseif($x==3){
    echo '<section class="form-register"> ';
    echo '    <h3 align="center">Enter a new information about Role</h3>';
    echo '    <form action="registrar_user.php" method="post">';
    echo '          <input class="controls" type="hidden" name="conex" value = "4" readonly="readonly" >';

    echo '        <input class="controls" type="text" name="des" placeholder="Enter a description" required="required">';
    echo '        <br>';
    echo '        <input class="botons" name="boton" value="Sign up" type="submit">';
    echo '    </form>';
    echo '</section>';
  }
  elseif($x==4){
    echo '<section class="form-register"> ';
    echo '    <h3 align="center">Enter a new information about Content Type</h3>';
    echo '    <form action="registrar_user.php" method="post">';
    echo '          <input class="controls" type="hidden" name="conex" value = "5" readonly="readonly" >';

    echo '        <input class="controls" type="text" name="des" placeholder="Enter a description" required="required">';
    echo '        <br>';
    echo '        <input class="botons" name="boton" value="Sign up" type="submit">';
    echo '    </form>';
    echo '</section>';
  }
  elseif($x==5){
    echo '<section class="form-register"> ';
    echo '    <h3 align="center">Enter a new information about Difficulty</h3>';
    echo '    <form action="registrar_user.php" method="post">';
    echo '          <input class="controls" type="hidden" name="conex" value = "6" readonly="readonly" >';

    echo '        <input class="controls" type="text" name="des" placeholder="Enter a description" required="required">';
    echo '        <br>';
    echo '        <input class="botons" name="boton" value="Sign up" type="submit">';
    echo '    </form>';
    echo '</section>';
  }
   elseif($x==6){
  
  $sen= 'SELECT * FROM DIFICULTAD WHERE DELETE_AT IS NULL';
  $re=  mysqli_query($conexion,$sen);
    echo '<section class="form-register"> ';
    echo '    <h3 align="center">Enter a new information about Course</h3>';
    echo '    <form action="registrar_user.php" method="post">';
    echo '          <input class="controls" type="hidden" name="conex" value = "7" readonly="readonly" >';

    echo '        <input class="controls" type="text" name="des" placeholder="ingrese descripción" required="required">';
    echo '        <input class="controls" type="number" name="nume" placeholder="Ingrese el numero de horad" required="required">';
   echo '<select class="controls" name="select" placeholder="select the difficulty">';
while ($fi = mysqli_fetch_assoc($re)){
     echo '<option value="'.$fi['ID_DIFICULTAD'].'">'.$fi['DESCRIPCION'].'</option>'; 
    }
   echo  '</select>';
  

    echo '        <br>';
    echo '        <input class="botons" name="boton" value="Sign up" type="submit">';
    echo '    </form>';
    echo '</section>';
  }elseif($x==7){
    
    $sen= 'SELECT * FROM TIPO_INSTRUMENTO WHERE DELETE_AT IS NULL';
    $re=  mysqli_query($conexion,$sen);
      echo '<section class="form-register"> ';
      echo '    <h3 align="center">Enter a new information about Instrument</h3>';
      echo '    <form action="registrar_user.php" method="post">';
      echo '        <input class="controls" type="hidden" name="conex" value = "8" readonly="readonly" >';
      echo '        <input class="controls" type="text" name="des" placeholder="ingrese descripción" required="required">';
      echo '        <input class="controls" type="text" name="ruta" placeholder="link imagen" required="required">';
      echo '<select class="controls" name="select" >';
  while ($fi = mysqli_fetch_assoc($re)){
       echo '<option value="'.$fi['ID_TIPO_INSTRUMENTO'].'">'.$fi['DESCRIPCION'].'</option>'; 
      }
     echo  '</select>';
    
  
      echo '        <br>';
      echo '        <input class="botons" name="boton" value="Sign up" type="submit">';
      echo '    </form>';
      echo '</section>';
    }
    elseif($x==8){
      
      $sen= 'SELECT * FROM tipo_contenido WHERE DELETE_AT IS NULL';
      $re=  mysqli_query($conexion,$sen);
      $sen1= 'SELECT * FROM instrumento WHERE DELETE_AT IS NULL';
      $re1=  mysqli_query($conexion,$sen1);
        echo '<section class="form-register"> ';
        echo '    <h3 align="center">Enter a new information about Content</h3>';
        echo '    <form action="registrar_user.php" method="post">';
    echo '          <input class="controls" type="hidden" name="conex" value = "9" readonly="readonly" >';

        echo '        <input class="controls" type="text" name="des" placeholder="Enter a description" required="required">';
        echo '        <input class="controls" type="text" name="ruta" placeholder="Link contenido" required="required">';
       echo '<select class="controls" name="select1" >';
    while ($fi = mysqli_fetch_assoc($re)){
         echo '<option value="'.$fi['ID_TIPO_CONTENIDO'].'">'.$fi['DESCRIPCION'].'</option>'; 
        }
       echo  '</select>';
       echo '<select class="controls" name="select2" >';
    while ($fi1 = mysqli_fetch_assoc($re1)){
            echo '<option value="'.$fi1['ID_INSTRUMENTO'].'">'.$fi1['DESCRIPCION'].'</option>'; 
           }
          echo  '</select>';
      
    
        echo '        <br>';
        echo '        <input class="botons" name="boton" value="Add" type="submit">';
        echo '    </form>';
        echo '</section>';
      }elseif($x==9){
 

        echo '<section class="form-register"> ';
        echo '    <h3 align="center">Enter a new information about Tr Course Content</h3>';
        echo '    <form action="registrar_user.php" method="post">';
    echo '          <input class="controls" type="hidden" name="conex" value = "10" readonly="readonly" >';


        $sen= 'SELECT * FROM CURSO WHERE DELETE_AT IS NULL';
        $re=  mysqli_query($conexion,$sen);
        
  
        echo '<select class="controls" name="select1">';
        while ($fi = mysqli_fetch_assoc($re)){

            echo '<option value="'.$fi['ID_CURSO'].'"'.$compa.'>'.$fi['DESCRIPCION'].'</option>'; 
  
            }
          echo  '</select>';
              $sen1= 'SELECT * FROM CONTENIDO WHERE DELETE_AT IS NULL';
              $re1 = mysqli_query($conexion,$sen1);
        
              echo '<select class="controls" name="select2">';
              while ($fi1 = mysqli_fetch_assoc($re1)){

                  echo '<option value="'.$fi1['ID_CONTENIDO'].'"'.$compa.'>'.$fi1['DESCRIPCION'].'</option>'; 
  
                  }
                echo  '</select>';
   
  
        echo '        <br>';
        echo '        <input class="botons" name="boton" value="Add" type="submit">';
        echo '       </form>';
        echo '</section>';
      }elseif($x==10){
        echo '<section class="form-register"> ';
        echo '    <h3 align="center">Enter a new information about Departament</h3>';
        echo '    <form action="registrar_user.php" method="post">';
    echo '          <input class="controls" type="hidden" name="conex" value = "11" readonly="readonly" >';
        echo '        <input class="controls" type="text" name="des" placeholder="Enter a description" required="required">';
        echo '        <br>';
        echo '        <input class="botons" name="boton" value="Add" type="submit">';
        echo '       </form>';
        echo '</section>';

      }elseif ($x==11){
        $cons= "SELECT * FROM  DEPARTAMENTOS  WHERE DELETE_AT IS NULL";
        //Enviamos la consulta
        $res = mysqli_query($conexion,$cons);

        echo '<section class="form-register"> ';
        echo '    <h3 style="color:white; align="center">Enter a new information about City</h3>';
    echo '    <h5 style="color:white;" align="left">Departamento</h5>';

        echo '    <form action="registrar_user.php" method="post">';
        echo '          <input class="controls" type="hidden" name="conex" value = "12" readonly="readonly" >';

        echo '<select class="controls" name="select">';
              while ($ob = mysqli_fetch_assoc($res)){
  
                  echo '<option value="'.$ob['ID'].'">'.$ob['DESCRIPCION'].'</option>'; 

                  }
                echo  '</select>';
    echo '    <h5 style="color:white;" align="left">Ciudad</h5>';

        echo '        <input class="controls" type="text" name="des" placeholder="Enter a description" required="required">';

        echo '        <br>';
        echo '        <input class="botons" name="boton" value="Add" type="submit">';
        echo '       </form>';
        echo '</section>';
      }
   ?>


<script>
   $("#menu-toggle").click(function (e) {
      e.preventDefault();
      $("#content-wrapper").toggleClass("toggled");
    });
</script>
</body>
</html>