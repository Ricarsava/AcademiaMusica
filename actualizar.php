<?php
session_start();
include 'conexion.php';

$x= $_POST['cal'];
if($x==1){
$no= $_POST['id'];
$nom = $_POST['nombre'];
$ape = $_POST['apellido'];
$corre = $_POST['correo'];
        if($_SESSION['rol'] == 2){
            $sele= $_POST['select'];
             $user ="UPDATE USUARIO_ROL SET FK_ID_ROL='".$sele."',`UPDATE_AT` = CURRENT_TIMESTAMP(), `USER_UP` = '".$_SESSION['id']."' WHERE FK_ID_USUARIO = '".$no."' ";
             mysqli_query($conexion,$user);
  
        }
$cons = "UPDATE USUARIO SET NOMBRES= '$nom', APELLIDOS = '$ape', CORREO= '$corre', `UPDATE_AT` = CURRENT_TIMESTAMP(), `USER_UP` = '".$_SESSION['id']."' WHERE ID_USUARIO = '$no';";
if($no== $_SESSION['id']){
    $_SESSION['nombre'] = $nom;
}
if(mysqli_query($conexion,$cons)){
    
    if($_SESSION['rol'] == 1){
        header('Location: inicio.php?usu');
    }elseif ($_SESSION['rol'] == 2){
        header('Location: users.php?usu=1&p=1');
    }elseif($_SESSION['rol'] == 3){
        header('Location: inicio.php?usu=1');
    }
   
}else{
    header('Location: inicio.php');
}
}elseif($x==2){
    $no= $_POST['id'];
    $pass = $_POST['pass'];
    $pass2 = $_POST['pass2'];
    if($pass == $pass2){
    $cons = "UPDATE USUARIO SET CONTRASE='$pass', `UPDATE_AT` = CURRENT_TIMESTAMP(), `USER_UP` = '".$_SESSION['id']."' WHERE ID_USUARIO = '$no';";
        if(mysqli_query($conexion,$cons)){
            header ('Location: modif_pro.php?no='.$_SESSION['id'].'&ver=1&p=1');
    
        }

    }else {
        header ('Location: modif_pro.php?no='.$_SESSION['id'].'&ver=2&p=2');
    }
}elseif($x==3){
    $no= $_POST['id'];
    $des = $_POST['nombre'];
    $cons = "UPDATE TIPO_INSTRUMENTO SET DESCRIPCION='$des', `UPDATE_AT` = CURRENT_TIMESTAMP(), `USER_UP` = '".$_SESSION['id']."' WHERE ID_TIPO_INSTRUMENTO = '$no';";
    if(mysqli_query($conexion,$cons)){
        header ('Location: users.php?usu=2&p=1');
    }else{
        header ('Location: users.php?usu=2&p=2');
    }
}elseif($x==4){
    $no= $_POST['id'];
    $des = $_POST['nombre'];
    $cons = "UPDATE ROL SET NOMBRE='$des', `UPDATE_AT` = CURRENT_TIMESTAMP(), `USER_UP` = '".$_SESSION['id']."' WHERE ID_ROL = '$no';";
    if(mysqli_query($conexion,$cons)){
        header ('Location: users.php?usu=3&p=1');
    }else{
        header ('Location: users.php?usu=3&p=2');
    }
}elseif($x==5){
    $no= $_POST['id'];
    $des = $_POST['nombre'];
    $cons = "UPDATE TIPO_CONTENIDO SET DESCRIPCION='$des', `UPDATE_AT` = CURRENT_TIMESTAMP(), `USER_UP` = '".$_SESSION['id']."' WHERE ID_TIPO_CONTENIDO = '$no';";
    if(mysqli_query($conexion,$cons)){
        header ('Location: users.php?usu=4&p=1');
    }else{
        header ('Location: users.php?usu=4&p=2');
    }
}elseif($x==6){
    $no= $_POST['id'];
    $des = $_POST['nombre'];
    $cons = "UPDATE DIFICULTAD SET DESCRIPCION='$des', `UPDATE_AT` = CURRENT_TIMESTAMP(), `USER_UP` = '".$_SESSION['id']."' WHERE ID_DIFICULTAD = '$no';";
    if(mysqli_query($conexion,$cons)){
        header ('Location: users.php?usu=5&p=1');
    }else{
        header ('Location: users.php?usu=5&p=2');
    }
}elseif($x==7){
    $no= $_POST['id'];
    $des=$_POST["des"];
    $num = $_POST["nume"];
    $op =$_POST["select"];
    $cons = "UPDATE `curso` SET `DESCRIPCION` = '".$des."', `DURACION(N/DIAS)` = '".$num."',`FK_DIFICULTAD` = '".$op."', `UPDATE_AT` = CURRENT_TIMESTAMP(), `USER_UP` = '".$_SESSION['id']."' WHERE `curso`.`ID_CURSO` = ".$no.";";
    if(mysqli_query($conexion,$cons)){
        header ('Location: inicio.php?p=1&usu=1');
    }else{
        header ('Location: inicio.php?p=2&usu=1');
    }
}elseif($x==8){
    $no= $_POST['id'];
    $des=$_POST["des"];
    $ruta = $_POST["ruta"];
    $op =$_POST["select"];
    $cons = "UPDATE `instrumento` SET `DESCRIPCION` = '".$des."',`RUTA_FOTO` = '".$ruta."',`FK_TIPO_INSTRUMENTO` = '".$op."', `UPDATE_AT` = CURRENT_TIMESTAMP(), `USER_UP` = '".$_SESSION['id']."' WHERE `instrumento`.`ID_INSTRUMENTO` = ".$no.";";
      if(mysqli_query($conexion,$cons)){
        header ('Location: users.php?p=1&usu=6');
    }else{
        header ('Location: users.php?p=2&usu=6');
    }
}elseif($x==9){
    $no= $_POST['id'];
    $des=$_POST["des"];
    $ruta = $_POST["ruta"];
    $op =$_POST["select1"];
    $op1 = $_POST["select2"];

    $cons= "UPDATE `contenido` SET `DESCRIPCION` = '".$des."', `RUTA` = '".$ruta."',`FK_TIPO_CONTENIDO` = '".$op."',`FK_INSTRUMENTO` = '".$op1."', `UPDATE_AT` = CURRENT_TIMESTAMP(), `USER_UP` = '".$_SESSION['id']."' WHERE `contenido`.`ID_CONTENIDO` = ".$no.";";

    // $cons = "UPDATE `contenido` SET `DESCRIPCION` = '".$des."',`RUTA` = '".$ruta."',`FK_TIPO_CONTENIDO` = '".$op."',`FK_INSTRUMENTO` = '".$op1."', `UPDATE_AT` = CURRENT_TIMESTAMP(), `USER_UP` = '".$_SESSION['id']."' WHERE `contenido`.`ID_CONTENIDO` = ".$no.";";
      if(mysqli_query($conexion,$cons)){
        header ('Location: users.php?p=1&usu=7');

    }else{
        header ('Location: users.php?p=2&usu=7');
        
    }
}
elseif($x==10){
    $no= $_POST['id'];
    $op =$_POST["select1"];
    $op1 = $_POST["select2"];

    $cons= "UPDATE `tr_curso_contenido` SET `FK_ID_CURSO ` = '".$op."',`FK_ID_CONTENIDO ` = '".$op1."', `UPDATE_AT` = CURRENT_TIMESTAMP(), `USER_UP` = '".$_SESSION['id']."' WHERE `tr_curso_contenido`.`ID_CURSO_CONTENIDO ` = ".$no.";";
     if(mysqli_query($conexion,$cons)){
        header ('Location: users.php?p=1&usu=8');

    }else{
        header ('Location: users.php?p=2&usu=8');
        
    }
}elseif($x==11){
    $no= $_POST['id'];
    $des = $_POST['des'];
    $cons = "UPDATE DEPARTAMENTOS SET DESCRIPCION='$des', `UPDATE_AT` = CURRENT_TIMESTAMP(), `USER_UP` = '".$_SESSION['id']."' WHERE ID = '$no';";
    if(mysqli_query($conexion,$cons)){
        header ('Location: users.php?usu=9&p=1');
    }else{
        header ('Location: users.php?usu=9&p=2');
    }
}elseif($x==12){
    $no= $_POST['id'];
    $des = $_POST['des'];
    $op =$_POST["select"];

    $cons = "UPDATE MUNICIPIOS SET ID_DEPARTAMENTO='$op',DESCRIPCION='$des', `UPDATE_AT` = CURRENT_TIMESTAMP(), `USER_UP` = '".$_SESSION['id']."' WHERE ID = '$no';";
    if(mysqli_query($conexion,$cons)){
        header ('Location: users.php?usu=10&p=1');
    }else{
        header ('Location: users.php?usu=10&p=2');
    }
}




?>