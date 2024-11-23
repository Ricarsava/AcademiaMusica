<?php
  session_start();
  $mensaje= null;
  if(isset($_GET['p'])){
  if ($_GET['p']==1){
    $mensaje = 'La contraseña fue modificada satisfactoriamente';
  
  }elseif ($_GET['p']==2){
    $mensaje = 'Las contraseñas no coiciden';
  
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>INSTRUEDU | MODIFICACION</title>
  <!-- llamar al head para poder usarlos en todos los demas sin necesidad de repetir  -->
  <?php 
  include 'head.php';
?>
 
</head>
<body>
<?php
    include 'navegador_inicio.php';
    include 'conexion.php';
    if(isset($_GET['ver']) && $_GET['ver']==2){
      $_SESSION['ver'] = $_GET['ver'];
      
    }elseif(isset($_GET['ver']) && $_GET['ver']==1){
      $_SESSION['ver'] = $_GET['ver'];

    }
    $ver = $_SESSION['ver'];
    if( $ver== 1){
    $cons= "select * from USUARIO where ID_USUARIO ='".$_GET['no']."'";
    //Enviamos la consulta
    $res = mysqli_query($conexion,$cons);
    //Guardamos en un arreglo
    $ob = mysqli_fetch_array($res);
 
     
    

 echo '<section class="form-register"> ';
 echo '  <form action="actualizar.php" method = "POST" >';
 echo '          <input class="controls" type="hidden" name="cal" value = "1" readonly="readonly" >';
 echo '         <!-- Nota para mi yo del futuro, puedes hacer una validacion para que muestra "Bienvenido usuario" Cada vez que abra el perfil -->';
 echo '          <input class="controls" type="hidden" name="id" value = "'.$ob[0].'" readonly="readonly" >';
 echo '    <h5 style="color:white;" align="left">Name</h5>';
 
 echo '          <input class="controls" type="text" name="nombre" placeholder="Enter your name" value = "'.$ob[1].'" required="required">';
 echo '    <h5 style="color:white;" align="left">Last Name</h5>';
 
 echo '          <input class="controls" type="text" name="apellido" placeholder="Enter your Last Name" value = "'.$ob[2].'" required="required">';
 echo '    <h5 style="color:white;" align="left">E-mail</h5>';

 echo '          <input class="controls" type="text" name="correo" placeholder="Enter your email" value = "'.$ob[3].'" required="required">';
      if($_SESSION['rol'] == 2){
          $sen= 'SELECT * FROM ROL  WHERE DELETE_AT IS NULL ';
          $re=  mysqli_query($conexion,$sen);
      
              $consul="select * from usuario_rol where FK_ID_USUARIO='".$ob[0]."' AND DELETE_AT IS NULL";
              $resul = mysqli_query($conexion,$consul);
              $obte= mysqli_fetch_assoc($resul);
              echo '    <h5 style="color:white;" align="left">Role</h5>';

          echo '<select class="controls" name="select" value="2" placeholder="select the difficulty">';
          while ($fi = mysqli_fetch_assoc($re)){
                  if($fi['ID_ROL'] == $obte['FK_ID_ROL']){
                    $compa = 'selected="selected"';
                  }else {
                    $compa = ' ';
                  }
            echo '<option value="'.$fi['ID_ROL'].'"'.$compa.'>'.$fi['NOMBRE'].'</option>'; 
                
              
              }
              echo  '</select>';
        }
 echo '         <input class="botons" type="submit" >';
 echo '  </form>';
 echo '</section>';

     }elseif($ver==2){
      $cons= "select * from USUARIO where ID_USUARIO ='".$_GET['no']."'";
      //Enviamos la consulta
      $res = mysqli_query($conexion,$cons);
      //Guardamos en un arreglo
      $ob = mysqli_fetch_array($res);
 echo '<section class="form-register"> ';
 echo '  <form action="actualizar.php" method = "POST" >';
 echo '          <input class="controls" type="hidden" name="cal" value = "2" readonly="readonly" >';

 echo '          <input class="controls" type="hidden" name="id" value = "'.$ob[0].'" readonly="readonly" >';
 echo '    <h5 style="color:white;" align="left">Password</h5>';
 echo '          <input class="controls" type="password" name="pass" placeholder="Enter a new password" required="required">';
 echo '    <h5 style="color:white;" align="left">Password Again</h5>';
 echo '          <input class="controls" type="password" name="pass2" placeholder="Enter a new password again" required="required">';
 echo '         <input class="botons" type="submit" >';
 echo '  </form>';
 echo '</section>';
     }elseif($ver==3){
      $cons= "select * from TIPO_INSTRUMENTO where  ID_TIPO_INSTRUMENTO ='".$_GET['no']."'";
      //Enviamos la consulta
      $res = mysqli_query($conexion,$cons);
      //Guardamos en un arreglo
      $ob = mysqli_fetch_array($res);
      echo '<section class="form-register"> ';
      echo '  <form action="actualizar.php" method = "POST" >';
 echo '          <input class="controls" type="hidden" name="cal" value = "3" readonly="readonly" >';

      echo '          <input class="controls" type="hidden" name="id" value = "'.$ob[0].'" readonly="readonly" >';
 echo '    <h5 style="color:white;" align="left">Description</h5>';
      echo '          <input class="controls" type="text" name="nombre" placeholder="What do you want to add" value = "'.$ob[1].'" required="required">';     
      echo '         <input class="botons" type="submit" >';
      echo '  </form>';
      echo '</section>';
     }elseif ($ver==4){
      $cons= "select * from ROL where ID_ROL ='".$_GET['no']."'";
      //Enviamos la consulta
      $res = mysqli_query($conexion,$cons);
      //Guardamos en un arreglo
      $ob = mysqli_fetch_array($res);
      echo '<section class="form-register"> ';
      echo '  <form action="actualizar.php" method = "POST" >';
 echo '          <input class="controls" type="hidden" name="cal" value = "4" readonly="readonly" >';

      echo '          <input class="controls" type="hidden" name="id" value = "'.$ob[0].'" readonly="readonly" >';
      echo '    <h5 style="color:white;" align="left">Description</h5>';
      echo '          <input class="controls" type="text" name="nombre" placeholder="What do you want to add" value = "'.$ob[1].'" required="required">';     
      echo '         <input class="botons" type="submit" >';
      echo '  </form>';
      echo '</section>';
     }elseif ($ver==5){
      $cons= "select * from tipo_contenido where ID_TIPO_CONTENIDO ='".$_GET['no']."'";
      //Enviamos la consulta
      $res = mysqli_query($conexion,$cons);
      //Guardamos en un arreglo
      $ob = mysqli_fetch_array($res);
      echo '<section class="form-register"> ';
      echo '  <form action="actualizar.php" method = "POST" >';
 echo '          <input class="controls" type="hidden" name="cal" value = "5" readonly="readonly" >';
      echo '          <input class="controls" type="hidden" name="id" value = "'.$ob[0].'" readonly="readonly" >';
      echo '    <h5 style="color:white;" align="left">Description</h5>';
      echo '          <input class="controls" type="text" name="nombre" placeholder="What do you want to add" value = "'.$ob[1].'" required="required">';     
      echo '         <input class="botons" type="submit" >';
      echo '  </form>';
      echo '</section>';
     }elseif ($ver==6){
      $cons= "select * from DIFICULTAD where ID_DIFICULTAD ='".$_GET['no']."'";
      //Enviamos la consulta
      $res = mysqli_query($conexion,$cons);
      //Guardamos en un arreglo
      $ob = mysqli_fetch_array($res);
      echo '<section class="form-register"> ';
      echo '  <form action="actualizar.php" method = "POST" >';
 echo '          <input class="controls" type="hidden" name="cal" value = "6" readonly="readonly" >';

      echo '          <input class="controls" type="hidden" name="id" value = "'.$ob[0].'" readonly="readonly" >';
 echo '    <h5 style="color:white;" align="left">Description</h5>';

      echo '          <input class="controls" type="text" name="nombre" placeholder="What do you want to add" value = "'.$ob[1].'" required="required">';     
      echo '         <input class="botons" type="submit" >';
      echo '  </form>';
      echo '</section>';
     }
     elseif ($ver == 7){

      $cons= "select * from curso where ID_CURSO ='".$_GET['no']."'";
      //Enviamos la consulta
      $res = mysqli_query($conexion,$cons);
      //Guardamos en un arreglo
      $ob = mysqli_fetch_array($res);
      echo '<section class="form-register"> ';
      echo '  <form action="actualizar.php" method = "POST" >';
 echo '          <input class="controls" type="hidden" name="cal" value = "7" readonly="readonly" >';

      echo '          <input class="controls" type="hidden" name="id" value = "'.$ob[0].'" readonly="readonly" >';
 echo '    <h5 style="color:white;" align="left">Description</h5>';
      echo '          <input class="controls" type="text" name="des" placeholder="What do you want to add" value = "'.$ob[1].'" required="required">';
      echo '    <h5 style="color:white;" align="left">Number of days</h5>';
 
      echo '          <input class="controls" type="number" name="nume" placeholder="What do you want to add" value = "'.$ob[2].'" required="required">';     
     
      $sen= 'SELECT * FROM DIFICULTAD WHERE DELETE_AT IS NULL';
      $re=  mysqli_query($conexion,$sen);
      echo '    <h5 style="color:white;" align="left">Difficulty</h5>';
 
      echo '<select class="controls" name="select" value="2" placeholder="select the difficulty">';
      while ($fi = mysqli_fetch_assoc($re)){
        if($fi['ID_DIFICULTAD'] == $ob[3]){
          $compa = 'selected="selected"';
        }else {
          $compa = ' ';
        }
           echo '<option value="'.$fi['ID_DIFICULTAD'].'"'.$compa.'>'.$fi['DESCRIPCION'].'</option>'; 
           
          
          }
         echo  '</select>';
        
    
        echo '        <br>';
        echo '        <input class="botons" name="boton" value="Change" type="submit">';
        echo '    </form>';
        echo '</section>';
     }
     elseif ($ver == 8){
      $cons= "select * from instrumento where ID_INSTRUMENTO ='".$_GET['no']."'";
      //Enviamos la consulta
      $res = mysqli_query($conexion,$cons);
      //Guardamos en un arreglo
      $ob = mysqli_fetch_array($res);
      echo '<section class="form-register"> ';
      echo '  <form action="actualizar.php" method = "POST" >';
 echo '          <input class="controls" type="hidden" name="cal" value = "8" readonly="readonly" >';
 
      echo '          <input class="controls" type="hidden" name="id" value = "'.$ob[0].'" readonly="readonly" >';
 echo '    <h5 style="color:white;" align="left">Description</h5>';
      echo '          <input class="controls" type="text" name="des" placeholder="What do you want to add" value = "'.$ob[1].'" required="required">';
 echo '    <h5 style="color:white;" align="left">Image url</h5>';
  
      echo '          <input class="controls" type="text" name="ruta" placeholder="What do you want to add" value = "'.$ob[2].'" required="required">';     
 echo '    <h5 style="color:white;" align="left"> Type Instrument</h5>';
     
      $sen= 'SELECT * FROM TIPO_INSTRUMENTO WHERE DELETE_AT IS NULL';
      $re=  mysqli_query($conexion,$sen);
 
      echo '<select class="controls" name="select" value="2" placeholder="select the difficulty">';
      while ($fi = mysqli_fetch_assoc($re)){
        if($fi['ID_TIPO_INSTRUMENTO'] == $ob[3]){
          $compa = 'selected="selected"';
        }else {
          $compa = ' ';
        }
           echo '<option value="'.$fi['ID_TIPO_INSTRUMENTO'].'"'.$compa.'>'.$fi['DESCRIPCION'].'</option>'; 
           
          
          }
         echo  '</select>';
        
    
        echo '        <br>';
        echo '        <input class="botons" name="boton" value="Change" type="submit">';
        echo '    </form>';
        echo '</section>';
     }
     elseif ($ver == 9){
      $cons= "select * from contenido where ID_CONTENIDO ='".$_GET['no']."'";
      //Enviamos la consulta
      $res = mysqli_query($conexion,$cons);
      //Guardamos en un arreglo
      $ob = mysqli_fetch_array($res);
      echo '<section class="form-register"> ';
      echo '  <form action="actualizar.php" method = "POST" >';
 echo '          <input class="controls" type="hidden" name="cal" value = "9" readonly="readonly" >';

      echo '          <input class="controls" type="hidden" name="id" value = "'.$ob[0].'" readonly="readonly" >';
 echo '    <h5 style="color:white;" align="left">Description</h5>';
      echo '          <input class="controls" type="text" name="des" placeholder="What do you want to add" value = "'.$ob[1].'" required="required">';
 echo '    <h5 style="color:white;" align="left">URL</h5>';

      echo '          <input class="controls" type="text" name="ruta" placeholder="What do you want to add" value = "'.$ob[2].'" required="required">';     
 echo '    <h5 style="color:white;" align="left">Content</h5>';
     
      $sen= 'SELECT * FROM tipo_contenido WHERE DELETE_AT IS NULL';
      $re=  mysqli_query($conexion,$sen);
 
      echo '<select class="controls" name="select1">';
      while ($fi = mysqli_fetch_assoc($re)){
                if($fi['ID_TIPO_CONTENIDO'] == $ob[3]){
                  $compa = 'selected="selected"';
                }else {
                  $compa = ' ';
                }
           echo '<option value="'.$fi['ID_TIPO_CONTENIDO'].'"'.$compa.'>'.$fi['DESCRIPCION'].'</option>'; 
    
          }
 

         echo  '</select>';
         echo '    <h5 style="color:white;" align="left">Instrument</h5>';

         $sen1= 'SELECT * FROM instrumento WHERE DELETE_AT IS NULL';
         $re1=  mysqli_query($conexion,$sen1);
    
         echo '<select class="controls" name="select2" >';
         while ($fi1 = mysqli_fetch_assoc($re1)){
                   if($fi1['ID_INSTRUMENTO'] == $ob[4]){
                     $compa = 'selected="selected"';
                   }else {
                     $compa = ' ';
                   }
              echo '<option value="'.$fi1['ID_INSTRUMENTO'].'"'.$compa.'>'.$fi1['DESCRIPCION'].'</option>'; 
              
             }
            echo  '</select>';
        
    
        echo '        <br>';
        echo '        <input class="botons" name="boton" value="Change" type="submit">';
        echo '    </form>';
        echo '</section>';
     }elseif ($ver == 10){
      $cons= "SELECT * FROM  TR_CURSO_CONTENIDO  WHERE DELETE_AT IS NULL AND ID_CURSO_CONTENIDO ='".$_GET['no']."'";
      //Enviamos la consulta
      $res = mysqli_query($conexion,$cons);
      //Guardamos en un arreglo
      $ob = mysqli_fetch_array($res);
      echo '<section class="form-register"> ';
      echo '  <form action="actualizar.php" method = "POST" >';
 echo '          <input class="controls" type="hidden" name="cal" value = "10" readonly="readonly" >';
      echo '          <input class="controls" type="hidden" name="id" value = "'.$ob[0].'" readonly="readonly" >';
 echo '    <h5 style="color:white;" align="left">Course</h5>';

      $sen= 'SELECT * FROM CURSO WHERE DELETE_AT IS NULL';
      $re=  mysqli_query($conexion,$sen);

      echo '<select class="controls" name="select1">';
      while ($fi = mysqli_fetch_assoc($re)){
              if($fi['ID_CURSO '] == $ob[1]){
                $compa = 'selected="selected"';
              }else {
                $compa = ' ';
              }
          echo '<option value="'.$fi['ID_CURSO  '].'"'.$compa.'>'.$fi['DESCRIPCION'].'</option>'; 

          }
        echo  '</select>';
 echo '    <h5 style="color:white;" align="left">Content</h5>';
            $sen1= 'SELECT * FROM CONTENIDO WHERE DELETE_AT IS NULL';
            $re1 = mysqli_query($conexion,$sen1);
      
            echo '<select class="controls" name="select2">';
            while ($fi1 = mysqli_fetch_assoc($re1)){
                    if($fi1['ID_CONTENIDO'] == $ob[2]){
                      $compa = 'selected="selected"';
                    }else {
                      $compa = ' ';
                    }
                echo '<option value="'.$fi1['ID_CONTENIDO '].'"'.$compa.'>'.$fi1['DESCRIPCION'].'</option>'; 

                }
              echo  '</select>';
 

      echo '        <br>';
      echo '        <input class="botons" name="boton" value="Change" type="submit">';
      echo '       </form>';
      echo '</section>';
     }elseif ($ver == 11){
      $cons= "SELECT * FROM  DEPARTAMENTOS  WHERE DELETE_AT IS NULL AND ID ='".$_GET['no']."'";
      //Enviamos la consulta
      $res = mysqli_query($conexion,$cons);
      //Guardamos en un arreglo
      $ob = mysqli_fetch_array($res);
      echo '<section class="form-register"> ';
      echo '  <form action="actualizar.php" method = "POST" >';
 echo '          <input class="controls" type="hidden" name="cal" value = "11" readonly="readonly" >';
      echo '          <input class="controls" type="hidden" name="id" value = "'.$ob[0].'" readonly="readonly" >';
 echo '    <h5 style="color:white;" align="left">Departamento</h5>';
      echo '          <input class="controls" type="text" name="des" placeholder="What do you want to add" value = "'.$ob[1].'" required="required">';
      echo '        <br>';
      echo '        <input class="botons" name="boton" value="Change" type="submit">';
      echo '       </form>';
      echo '</section>';
     }elseif ($ver == 12){
      $cons= "SELECT * FROM  MUNICIPIOS  WHERE DELETE_AT IS NULL AND ID ='".$_GET['no']."'";
      //Enviamos la consulta
      $res = mysqli_query($conexion,$cons);
      //Guardamos en un arreglo
      $ob = mysqli_fetch_assoc($res);
      echo '<section class="form-register"> ';
      echo '  <form action="actualizar.php" method = "POST" >';
 echo '          <input class="controls" type="hidden" name="cal" value = "12" readonly="readonly" >';
 echo '          <input class="controls" type="hidden" name="id" value = "'.$ob['ID'].'" readonly="readonly" >';
 echo '    <h5 style="color:white;" align="left">Description</h5>';

 $cons1= "SELECT * FROM  DEPARTAMENTOS  WHERE DELETE_AT IS NULL ";
 //Enviamos la consulta
 $res1 = mysqli_query($conexion,$cons1);
 //Guardamos en un arreglo
 
    echo '<select class="controls" name="select">';
    while ($ob1 = mysqli_fetch_assoc($res1)){
         if($ob['ID_DEPARTAMENTO'] == $ob1['ID']){
           $compa = 'selected="selected"';
         }else {
           $compa = ' ';
         }
     echo '<option value="'.$ob1['ID'].'"'.$compa.'>'.$ob1['DESCRIPCION'].'</option>'; 

     }
   echo  '</select>';
   echo '    <h5 style="color:white;" align="left">Description</h5>';

 echo '          <input class="controls" type="text" name="des" placeholder="What do you want to add" value = "'.$ob['DESCRIPCION'].'" required="required">';
 echo '        <br>';
 echo '        <input class="botons" name="boton" value="Change" type="submit">';
 echo '       </form>';
 echo '</section>';
     }
     
     ?>

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

  <!--  Movimiento del menu de inicio -->
<script>
 $(document).ready(function(){
    if('<?php echo $mensaje; ?>'){
      $('#ejemplomodal').modal({
        show: true
          });}
       });
$("#menu-toggle").click(function (e) {
      e.preventDefault();
      $("#content-wrapper").toggleClass("toggled");
    });
</script>
</body>
</html>