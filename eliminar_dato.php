<?php
include 'conexion.php';
if($_POST['dato']==1){
// echo $_POST['id_curso_elimina']. ' con el id '.$_POST['id_usuario'];
$eliminar = "UPDATE CURSO SET 
            DELETE_AT = CURRENT_TIMESTAMP(), 
            USER_DEL = '".$_POST['id_usuario']."' 
            WHERE ID_CURSO =".$_POST['id_curso_elimina'];
mysqli_query($conexion, $eliminar);
exit;
}elseif($_POST['dato']==2){
    $eliminar = "UPDATE USUARIO SET 
            DELETE_AT = CURRENT_TIMESTAMP(), 
            USER_DEL = '".$_POST['id_usuario']."' 
            WHERE ID_USUARIO =".$_POST['id_curso_elimina'];
mysqli_query($conexion, $eliminar);
exit;
}elseif($_POST['dato']==3){
    $eliminar = "UPDATE TIPO_INSTRUMENTO SET 
            DELETE_AT = CURRENT_TIMESTAMP(), 
            USER_DEL = '".$_POST['id_usuario']."' 
            WHERE ID_TIPO_INSTRUMENTO =".$_POST['id_curso_elimina'];
mysqli_query($conexion, $eliminar);
exit;
}elseif($_POST['dato']==4){
    $eliminar = "UPDATE ROL SET 
            DELETE_AT = CURRENT_TIMESTAMP(), 
            USER_DEL = '".$_POST['id_usuario']."' 
            WHERE ID_ROL =".$_POST['id_curso_elimina'];
mysqli_query($conexion, $eliminar);
exit;
}elseif($_POST['dato']==5){
    $eliminar = "UPDATE TIPO_CONTENIDO SET 
            DELETE_AT = CURRENT_TIMESTAMP(), 
            USER_DEL = '".$_POST['id_usuario']."' 
            WHERE ID_TIPO_CONTENIDO =".$_POST['id_curso_elimina'];
mysqli_query($conexion, $eliminar);
exit;
}elseif($_POST['dato']==6){
    $eliminar = "UPDATE DIFICULTAD SET 
            DELETE_AT = CURRENT_TIMESTAMP(), 
            USER_DEL = '".$_POST['id_usuario']."' 
            WHERE ID_DIFICULTAD =".$_POST['id_curso_elimina'];
mysqli_query($conexion, $eliminar);
exit;
}elseif($_POST['dato']==7){
    $eliminar = "UPDATE INSTRUMENTO SET 
            DELETE_AT = CURRENT_TIMESTAMP(), 
            USER_DEL = '".$_POST['id_usuario']."' 
            WHERE ID_INSTRUMENTO =".$_POST['id_curso_elimina'];
mysqli_query($conexion, $eliminar);
exit;
}elseif($_POST['dato']==8){
    $eliminar = "UPDATE contenido SET 
            DELETE_AT = CURRENT_TIMESTAMP(), 
            USER_DEL = '".$_POST['id_usuario']."' 
            WHERE ID_CONTENIDO =".$_POST['id_curso_elimina'];
mysqli_query($conexion, $eliminar);
exit;
}elseif($_POST['dato']==9){
    $eliminar = "UPDATE TR_CURSO_CONTENIDO SET 
            DELETE_AT = CURRENT_TIMESTAMP(), 
            USER_DEL = '".$_POST['id_usuario']."' 
            WHERE ID_CURSO_CONTENIDO =".$_POST['id_curso_elimina'];
mysqli_query($conexion, $eliminar);
exit;
}elseif($_POST['dato']==10){
    $eliminar = "UPDATE DEPARTAMENTOS SET 
            DELETE_AT = CURRENT_TIMESTAMP(), 
            USER_DEL = '".$_POST['id_usuario']."' 
            WHERE ID =".$_POST['id_curso_elimina'];
mysqli_query($conexion, $eliminar);
exit;
}elseif($_POST['dato']==11){
    $eliminar = "UPDATE MUNICIPIOS SET 
            DELETE_AT = CURRENT_TIMESTAMP(), 
            USER_DEL = '".$_POST['id_usuario']."' 
            WHERE ID =".$_POST['id_curso_elimina'];
mysqli_query($conexion, $eliminar);
exit;
}


// Todo empezaria a manejarse por AJAX: 
// include 'conexion.php';
// if($_GET['ta']==1){
// $eliminar = "UPDATE curso SET 
//             DELETED_AT = CURRENT_TIMESTAMP(), 
//             USER_DEL = '".$_SESSION['id']."' 
//             WHERE ID_CURSO =".$_GET['nu'];
//     if( mysqli_query($conexion, $eliminar)){
//         header('inicio.php?p=5&usu=1');
//     }else{
//         header('inicio.php?p=6&usu=1');

//     }
// }
?>