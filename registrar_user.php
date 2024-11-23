<?php
session_start();
//Conectando con el servidor de la base datos
include 'conexion.php';
//Validacion para que la informacion pueda ser llevada a cabo
  if(isset($_POST["boton"])){
    // $x= $_GET['conex'];
    $x= $_POST['conex'];

   if($x ==1 ||  $x==2){
      
      $nombre=$_POST["nombre"];
      $apellido=$_POST["apellido"];
      $correo=$_POST["correo"];
      $contrasena=$_POST["contra"];

     $sql1='INSERT INTO USUARIO (`NOMBRES`,`APELLIDOS`,`CORREO`,`CONTRASE`,`CREATED_AT`,`USER_AT`) VALUES ("'.$nombre.'","'.$apellido.'","'.$correo.'","'.$contrasena.'",CURRENT_TIMESTAMP(),"'.$_SESSION['id'].'")';

    if(mysqli_query($conexion,$sql1)){
        $con = mysqli_fetch_assoc(mysqli_query($conexion,'SELECT * FROM USUARIO WHERE CORREO="'.$correo.'" AND DELETE_AT IS NULL'));
              if( $x==2){
                    $_SESSION['esta_logueado'] = true;
                    $_SESSION['nombre']= $nombre;
                    $_SESSION['id']= $con['ID_USUARIO'];
                    if((mysqli_query($conexion,'INSERT INTO USUARIO_ROL (`FK_ID_USUARIO`,`FK_ID_ROL`,`CREATED_AT`,`USER_AT`) VALUES ("'.$con['ID_USUARIO'].'",1,CURRENT_TIMESTAMP(),"'.$_SESSION['id'].'")'))== true){
                        
                        $consul="select * from usuario_rol where FK_ID_USUARIO='".$con['ID_USUARIO']."' AND DELETE_AT IS NULL";
                        $resul = mysqli_query($conexion,$consul);
                        $obte= mysqli_fetch_array($resul);
                        
                        $_SESSION['rol'] = $obte['FK_ID_ROL'];
                            $consul1= "select * from rol where ID_ROL='".$obte['FK_ID_ROL']."' AND DELETE_AT IS NULL";
                            $resul1= mysqli_query($conexion,$consul1);
                            $obten1= mysqli_fetch_array($resul1);
                            $_SESSION['NOMBRE_ROL'] = $obten1['NOMBRE'];
                            $_SESSION['usu']=2;
                        header("Location: inicio.php");
                    }
              }else if( $x==1){
                if((mysqli_query($conexion,'INSERT INTO USUARIO_ROL (`FK_ID_USUARIO`,`FK_ID_ROL`,`CREATED_AT`,`USER_AT`) VALUES ("'.$con['ID_USUARIO'].'",1,CURRENT_TIMESTAMP(),"'.$_SESSION['id'].'")'))== true){
                        
                  $consul="select * from usuario_rol where FK_ID_USUARIO='".$con['ID_USUARIO']."' AND DELETE_AT IS NULL";
                  $resul = mysqli_query($conexion,$consul);
          
                  
          
                      $consul1= "select * from rol where ID_ROL='".$obte['FK_ID_ROL']."' AND DELETE_AT IS NULL";
                      $resul1= mysqli_query($conexion,$consul1);
 
                      header("Location:users.php?usu=1&p=3");
                  
              }
              }
      }else{
        header("Location: login.php");
      } 
   }elseif ( $x==3){
    $des=$_POST["des"];
    $sql1='INSERT INTO TIPO_INSTRUMENTO (`DESCRIPCION`,`CREATED_AT`,`USER_AT`) VALUES ("'.$des.'",CURRENT_TIMESTAMP(),"'.$_SESSION['id'].'")';
      if(mysqli_query($conexion,$sql1)){
        header ('Location: users.php?usu=2&p=3');
      }else{
        header ('Location: users.php?usu=2&p=4');
      }
   }elseif ($x==4){
    $des=$_POST["des"];
    $sql1='INSERT INTO ROL (`NOMBRE`,`CREATED_AT`,`USER_AT`) VALUES ("'.$des.'",CURRENT_TIMESTAMP(),"'.$_SESSION['id'].'")';
      if(mysqli_query($conexion,$sql1)){
        header ('Location: users.php?usu=3&p=3');
      }else{
        header ('Location: users.php?usu=3&p=4');
      }
   }elseif  ($x==5){
    $des=$_POST["des"];
    $sql1='INSERT INTO tipo_contenido (`DESCRIPCION`,`CREATED_AT`,`USER_AT`) VALUES ("'.$des.'",CURRENT_TIMESTAMP(),"'.$_SESSION['id'].'")';
      if(mysqli_query($conexion,$sql1)){
        header ('Location: users.php?usu=4&p=3');
      }else{
        header ('Location: users.php?usu=4&p=4');
      }
   }elseif ( $x==6){
    $des=$_POST["des"];
    $sql1='INSERT INTO DIFICULTAD (`DESCRIPCION`,`CREATED_AT`,`USER_AT`) VALUES ("'.$des.'",CURRENT_TIMESTAMP(),"'.$_SESSION['id'].'")';
      if(mysqli_query($conexion,$sql1)){
        header ('Location: users.php?usu=5&p=3');
      }else{
        header ('Location: users.php?usu=5&p=4');
      }
   }elseif ( $x==7){
    $des=$_POST["des"];
    $num = $_POST["nume"];
    $op =$_POST["select"];
    $sql1="INSERT INTO `curso` (`ID_CURSO`, `DESCRIPCION`, `DURACION(N/DIAS)`, `FK_DIFICULTAD`,`CREATED_AT`,`USER_AT`) VALUES (NULL, '".$des."','".$num."', '".$op."',CURRENT_TIMESTAMP(),'".$_SESSION['id']."');"; 
      if(mysqli_query($conexion,$sql1)){
        header ('Location: inicio.php?p=3');
      }else{
        header ('Location: inicio.php?p=4');
      }
   }elseif ( $x==8){
    $des=$_POST["des"];
    $ruta = $_POST["ruta"];
    $op =$_POST["select"];
    $sql1="INSERT INTO `instrumento` (`ID_INSTRUMENTO`, `DESCRIPCION`, `RUTA_FOTO`, `FK_TIPO_INSTRUMENTO`,`CREATED_AT`,`USER_AT`) VALUES (NULL, '".$des."','".$ruta."', '".$op."',CURRENT_TIMESTAMP(),'".$_SESSION['id']."');"; 
      if(mysqli_query($conexion,$sql1)){
        header ('Location: users.php?p=3&usu=6');
      }else{
        header ('Location: users.php?p=4&usu=6');
      }
   }
   elseif ( $x==9){
    $des=$_POST["des"];
    $ruta = $_POST["ruta"];
    $op =$_POST["select1"];
    $op1 = $_POST["select2"];

    $sql1="INSERT INTO `contenido` (`ID_CONTENIDO`, `DESCRIPCION`, `RUTA`, `FK_TIPO_CONTENIDO`,`FK_INSTRUMENTO`,`CREATED_AT`,`USER_AT`) VALUES (NULL, '".$des."','".$ruta."', '".$op."','".$op1."',CURRENT_TIMESTAMP(),'".$_SESSION['id']."');"; 

      if(mysqli_query($conexion,$sql1)){
        header ('Location: users.php?p=3&usu=7');
      }else{
        header ('Location: users.php?p=4&usu=7');
      }
   }
   elseif ( $x==10){
   
    $op =$_POST["select1"];
    $op1 = $_POST["select2"];
    $sql1="INSERT INTO `tr_curso_contenido` (`ID_CURSO_CONTENIDO`,`FK_ID_CURSO`,`FK_ID_CONTENIDO`,`CREATED_AT`,`USER_AT`) VALUES (NULL,'".$op."','".$op1."',CURRENT_TIMESTAMP(),'".$_SESSION['id']."')";
   
    if(mysqli_query($conexion,$sql1)){
      header ('Location: users.php?p=3&usu=8');
    }else{
      header ('Location: users.php?p=4&usu=8');
    }
   }elseif ( $x==11){
    $des=$_POST["des"];
    $sql1='INSERT INTO DEPARTAMENTOS (`DESCRIPCION`,`CREATED_AT`,`USER_AT`) VALUES ("'.$des.'",CURRENT_TIMESTAMP(),"'.$_SESSION['id'].'")';
      if(mysqli_query($conexion,$sql1)){
        header ('Location: users.php?usu=9&p=3');
      }else{
        header ('Location: users.php?usu=9&p=4');
      }
   }elseif ( $x==12){
    $des=$_POST["des"];
    $op =$_POST["select"];
    $sql1='INSERT INTO MUNICIPIOS (`ID_DEPARTAMENTO`,`DESCRIPCION`,`CREATED_AT`,`USER_AT`) VALUES ("'.$op.'","'.$des.'",CURRENT_TIMESTAMP(),"'.$_SESSION['id'].'")';
      if(mysqli_query($conexion,$sql1)){
        header ('Location: users.php?usu=10&p=3');
      }else{
        header ('Location: users.php?usu=10&p=4');
      }
   }
}

  ?>