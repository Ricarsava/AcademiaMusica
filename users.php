<?php
  session_start();
  $mensaje= null;
  $x= $_GET['usu'];
  if(isset($_GET['p'])){
 if ($_GET['p']==3){
    $mensaje = 'El dato fue agregado correctamente';
  
  }elseif ($_GET['p']==4){
    $mensaje = 'El dato no fue agregado';
  
  }elseif($_GET['p']==1){
    $mensaje = 'Se modificaron los datos correctamente';

  }elseif($_GET['p']==2){
    $mensaje = 'No se pudo modificar los datos';

  }
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <!-- llamar al head para poder usarlos en todos los demas sin necesidad de repetir  -->
  <?php 
if($x==1){
  echo '<title>INSTRUEDU | USUARIOS</title>';
}elseif ($x==2){
  echo '<title>INSTRUEDU | TIPO INSTRUMENTO</title>';

}elseif ($x==3){
  echo '<title>INSTRUEDU | ROL</title>';

}elseif ($x==4){
  echo '<title>INSTRUEDU | TIPO CONTENIDO</title>';

}elseif ($x==5){
  echo '<title>INSTRUEDU | DIFICULTAD</title>';

}elseif($x==6){
  echo '<title>INSTRUEDU | INSTRUMENTOS</title>';
} elseif ($x==7){
  echo '<title>INSTRUEDU | CONTENIDO</title>';

}elseif ($x==8){
  echo '<title>INSTRUEDU | RELACION</title>';

}
elseif ($x==9){
  echo '<title>INSTRUEDU | DEPARTAMENTOS</title>';

}
elseif ($x==10){
  echo '<title>INSTRUEDU | Ciudades</title>';

}elseif ($x==11){
  echo '<title>CONTENIDO</title>';

}
  include 'head.php';
?>

</head>
<body>
<?php

    include 'navegador_inicio.php';
?>

<div id="content" class="container-fluid p-5">
          <div class="row mb-3">

<table class="table responsive">

 <?php
    include 'conexion.php';
    $x= $_GET['usu'];
 
    if($x==1){
    $sentencia= 'SELECT * FROM USUARIO WHERE DELETE_AT IS NULL';
    $resultado = mysqli_query($conexion,$sentencia);
    $_SESSION['nusu']=1;
    $_SESSION['ver'] =1;
echo '<button type="button" class="btn btn-outline-secondary" onclick="location.href=\'nuevo_user.php\'" >Nuevo usuario</button>';
echo '<div class="prueb">';  
  echo '<tr>';
   echo   '<td>Nombres</td>' ;
   echo   '<td>Apellidos</td>';
   echo   '<td>Correos</td>';
   echo   '<td>Opciones</td>';
   echo   '<td> </td>';
   echo '</tr>';
    while ($filas = mysqli_fetch_assoc($resultado)){
      echo '<tr>';
        echo '<td>'; echo $filas['NOMBRES']; echo '</td>';
        echo '<td>'; echo $filas['APELLIDOS']; echo '</td>';
        echo '<td>'; echo $filas['CORREO']; echo '</td>';

        echo '<td><a href = "modif_pro.php?no='.$filas["ID_USUARIO"].'"><button type="button" class = "btn btn-success">Modificar </button></a> </td>';
        echo '<td><button type="button" id="eliminar_2" class = "btn btn-danger eliminar_2" data-id="'.$filas['ID_USUARIO'].'" data-toggle="modal" data-target="#Modal_eliminacion_2">ELIMINAR</button></td>';
  
      echo '</tr>';

    }
  }elseif ($x==2){
    $sentencia= 'SELECT * FROM tipo_instrumento WHERE DELETE_AT IS NULL';
    $resultado = mysqli_query($conexion,$sentencia);
    $_SESSION['nusu']=2;
    $_SESSION['ver'] =3;
    echo '<button type="button" class="btn btn-outline-secondary" onclick="location.href=\'nuevo_user.php\'" >Nuevo Tipo de Instrumento</button>';
    echo '<tr>';
    echo   '<td>Descripcion</td>' ;
    echo   '<td>Opciones</td>';
    echo   '<td> </td>';
    echo '</tr>';
    while ($filas = mysqli_fetch_assoc($resultado)){
      echo '<tr>';
        echo '<td>'; echo $filas['DESCRIPCION']; echo '</td>';
        echo '<td><a href = "modif_pro.php?no='.$filas["ID_TIPO_INSTRUMENTO"].'&ver=3"><button type="button" class = "btn btn-success">Modificar </button></a> </td>';
        echo '<td><button type="button" id="eliminar_2" class = "btn btn-danger eliminar_2" data-id="'.$filas['ID_TIPO_INSTRUMENTO'].'" data-toggle="modal" data-target="#Modal_eliminacion_2">ELIMINAR</button></td>';
 
      echo '</tr>';

    }
  }elseif ($x==3){
    $sentencia= 'SELECT * FROM rol WHERE DELETE_AT IS NULL';
    $resultado = mysqli_query($conexion,$sentencia);
    $_SESSION['nusu'] = 3;
    $_SESSION['ver'] =4;
    echo '<button type="button" class="btn btn-outline-secondary" onclick="location.href=\'nuevo_user.php\'" >Nuevo Rol</button>';
    echo '<tr>';
    echo   '<td>Nombre</td>' ;
    echo   '<td>Opciones</td>';
    echo   '<td> </td>';
    echo '</tr>';
    while ($filas = mysqli_fetch_assoc($resultado)){
      echo '<tr>';
        echo '<td>'; echo $filas['NOMBRE']; echo '</td>';
        echo '<td><a href = "modif_pro.php?no='.$filas["ID_ROL"].'"><button type="button" class = "btn btn-success">Modificar </button></a> </td>';
        echo '<td><button type="button" id="eliminar_2" class = "btn btn-danger eliminar_2" data-id="'.$filas['ID_ROL'].'" data-toggle="modal" data-target="#Modal_eliminacion_2">ELIMINAR</button></td>';
  
      echo '</tr>';
    }
  }elseif ($x==4){
    $sentencia= 'SELECT * FROM tipo_contenido WHERE DELETE_AT IS NULL';
    $resultado = mysqli_query($conexion,$sentencia);
    $_SESSION['nusu'] = 4;
    $_SESSION['ver'] =5;
    echo '<button type="button" class="btn btn-outline-secondary" onclick="location.href=\'nuevo_user.php\'" >Nuevo Tipo de Contenido</button>';
    echo '<tr>';
    echo   '<td>Descripcion</td>' ;
    echo   '<td>Opciones </td>';
    echo   '<td> </td>';
    echo '</tr>';
    while ($filas = mysqli_fetch_assoc($resultado)){
      echo '<tr>';
        echo '<td>'; echo $filas['DESCRIPCION']; echo '</td>';
        echo '<td><a href = "modif_pro.php?no='.$filas["ID_TIPO_CONTENIDO"].'"><button type="button" class = "btn btn-success">Modificar </button></a> </td>';
        echo '<td><button type="button" id="eliminar_2" class = "btn btn-danger eliminar_2" data-id="'.$filas['ID_TIPO_CONTENIDO'].'" data-toggle="modal" data-target="#Modal_eliminacion_2">ELIMINAR</button></td>';
 
      echo '</tr>';
    }
  }
  elseif ($x==5){
    $sentencia= 'SELECT * FROM DIFICULTAD WHERE DELETE_AT IS NULL';
    $resultado = mysqli_query($conexion,$sentencia);
    $_SESSION['nusu']= 5;
    $_SESSION['ver'] =6;
    echo '<button type="button" class="btn btn-outline-secondary" onclick="location.href=\'nuevo_user.php\'" >Nueva Dificultad</button>';
    echo '<tr>';
    echo   '<td>Descripcion</td>' ;
    echo   '<td>Opciones </td>';
    echo   '<td> </td>';
    echo '</tr>';
    while ($filas = mysqli_fetch_assoc($resultado)){
      echo '<tr>';
        echo '<td>'; echo $filas['DESCRIPCION']; echo '</td>';
        echo '<td><a href = "modif_pro.php?no='.$filas["ID_DIFICULTAD"].'"><button type="button" class = "btn btn-success">Modificar </button></a> </td>';
        echo '<td><button type="button" id="eliminar_2" class = "btn btn-danger eliminar_2" data-id="'.$filas['ID_DIFICULTAD'].'" data-toggle="modal" data-target="#Modal_eliminacion_2">ELIMINAR</button></td>';
  
      echo '</tr>';
    }
  }
  elseif ($x==6){
    $sentencia= 'SELECT * FROM INSTRUMENTO WHERE DELETE_AT IS NULL';
    $resultado = mysqli_query($conexion,$sentencia);
    $_SESSION['nusu'] =7;
    $_SESSION['ver'] =8;
    echo '<button type="button" class="btn btn-outline-secondary" onclick="location.href=\'nuevo_user.php\'" >Nuevo Instrumento</button>';
    echo '<tr>';
    echo   '<td>Descripcion</td>' ;
    echo   '<td>Foto</td>' ;
    echo   '<td>Tipo de instrumento</td>' ;
    echo   '<td>Opciones </td>';
    echo   '<td> </td>';
    echo '</tr>';
    while ($filas = mysqli_fetch_assoc($resultado)){
      echo '<tr>';
        echo '<td>'; echo $filas['DESCRIPCION']; echo '</td>';
        echo '<td>'; echo '<img style="width:100px;heigth:100px;" src ="'.$filas['RUTA_FOTO'].'">'; echo '</td>';
        $sen= 'SELECT * FROM TIPO_INSTRUMENTO WHERE DELETE_AT IS NULL  AND ID_TIPO_INSTRUMENTO ="'.$filas['FK_TIPO_INSTRUMENTO'].'" ' ;
        $re=  mysqli_query($conexion,$sen);
        $fi = mysqli_fetch_assoc($re);
         echo '<td>'; echo $fi['DESCRIPCION']; echo '</td>';

        echo '<td><a href = "modif_pro.php?no='.$filas["ID_INSTRUMENTO"].'"><button type="button" class = "btn btn-success">Modificar </button></a> </td>';
        echo '<td><button type="button" id="eliminar_2" class = "btn btn-danger eliminar_2" data-id="'.$filas['ID_INSTRUMENTO'].'" data-toggle="modal" data-target="#Modal_eliminacion_2">ELIMINAR</button></td>';
   
      echo '</tr>';
    }
  }
  elseif ($x==7){
    $sentencia= 'SELECT * FROM contenido WHERE DELETE_AT IS NULL';
    $resultado = mysqli_query($conexion,$sentencia);
    $_SESSION['nusu'] =8;
    $_SESSION['ver'] =9;
    echo '<button type="button" class="btn btn-outline-secondary" onclick="location.href=\'nuevo_user.php\'" >Nuevo Contenido</button>';
    echo '<tr>';
    echo   '<td>Descripcion</td>' ;
    echo   '<td>Ruta</td>' ;
    echo   '<td>Tipo de Contenido</td>' ;
    echo   '<td>Instrumento</td>' ;
    echo   '<td>Opciones </td>';
    echo   '<td> </td>';
    echo '</tr>';
    while ($filas = mysqli_fetch_assoc($resultado)){
      echo '<tr>';
        echo '<td>'; echo $filas['DESCRIPCION']; echo '</td>';
        echo '<td>'; echo '<img style="width:100px;heigth:100px;" src ="'.$filas['RUTA'].'">'; echo '</td>';
        $sen= 'SELECT * FROM TIPO_CONTENIDO WHERE DELETE_AT IS NULL  AND ID_TIPO_CONTENIDO ="'.$filas['FK_TIPO_CONTENIDO'].'" AND DELETE_AT IS NULL';
        $re=  mysqli_query($conexion,$sen);
        $fi = mysqli_fetch_assoc($re);
         echo '<td>'; echo $fi['DESCRIPCION']; echo '</td>';

        $sen1= 'SELECT * FROM INSTRUMENTO WHERE DELETE_AT IS NULL  AND ID_INSTRUMENTO  ="'.$filas['FK_INSTRUMENTO'].'" AND DELETE_AT IS NULL';
        $re1=  mysqli_query($conexion,$sen1);
        $fi1 = mysqli_fetch_assoc($re1);
        echo '<td>'; echo $fi1['DESCRIPCION']; echo '</td>';



        echo '<td><a href = "modif_pro.php?no='.$filas["ID_CONTENIDO"].'"><button type="button" class = "btn btn-success">Modificar </button></a> </td>';
        echo '<td><button type="button" id="eliminar_2" class = "btn btn-danger eliminar_2" data-id="'.$filas['ID_CONTENIDO'].'" data-toggle="modal" data-target="#Modal_eliminacion_2">ELIMINAR</button></td>';

      echo '</tr>';
    }
  }elseif ($x==8){
    $sentencia= 'SELECT * FROM  TR_CURSO_CONTENIDO  WHERE DELETE_AT IS NULL';
    $resultado = mysqli_query($conexion,$sentencia);
    $_SESSION['nusu']=9;
    $_SESSION['ver'] =10;
    echo '<button type="button" class="btn btn-outline-secondary" onclick="location.href=\'nuevo_user.php\'" >Nuevo Curso Contenido</button>';
    echo '<tr>';
    echo   '<td>Curso</td>' ;
    echo   '<td>Contenido</td>' ;
    echo   '<td>Opciones </td>';
    echo   '<td> </td>';
    echo '</tr>';
    while ($filas = mysqli_fetch_assoc($resultado)){
    echo '<tr>';

      $sen= 'SELECT * FROM CURSO WHERE DELETE_AT IS NULL AND ID_CURSO ='.$filas['FK_ID_CURSO'];
      $re=  mysqli_query($conexion,$sen);
      $fi = mysqli_fetch_assoc($re);
      echo '<td>'; echo $fi['DESCRIPCION']; echo '</td>';

      $sen1= 'SELECT * FROM CONTENIDO WHERE DELETE_AT IS NULL AND ID_CONTENIDO ='.$filas['FK_ID_CONTENIDO'];
      $re1 = mysqli_query($conexion,$sen1);
      $fi1 = mysqli_fetch_assoc($re1);
      echo '<td>'; echo $fi1['DESCRIPCION']; echo '</td>';
    
      echo '<td><a href = "modif_pro.php?no='.$filas["ID_CURSO_CONTENIDO"].'"><button type="button" class = "btn btn-success">Modificar </button></a> </td>';
      echo '<td><button type="button" id="eliminar_2" class = "btn btn-danger eliminar_2" data-id="'.$filas['ID_CURSO_CONTENIDO'].'" data-toggle="modal" data-target="#Modal_eliminacion_2">ELIMINAR</button></td>';
      echo '</tr>';

    }
  }elseif ($x==9){
    $_SESSION['nusu']=10;
    $_SESSION['ver'] =11;
    $sentencia= 'SELECT * FROM  DEPARTAMENTOS  WHERE DELETE_AT IS NULL';
    $resultado = mysqli_query($conexion,$sentencia);
    echo '<button type="button" class="btn btn-outline-secondary" onclick="location.href=\'nuevo_user.php\'" >Nuevo Departamento</button>';
    echo '<tr>';
    echo   '<td>Descripcion</td>' ;
    echo   '<td>Opciones</td>' ;
    echo   '<td> </td>';
    echo '</tr>';
    while ($filas = mysqli_fetch_assoc($resultado)){
      echo '<tr>';
      echo '<td>'; echo $filas['DESCRIPCION']; echo '</td>';
      echo '<td><a href = "modif_pro.php?no='.$filas["ID"].'"><button type="button" class = "btn btn-success">Modificar </button></a> </td>';
      echo '<td><button type="button" id="eliminar_2" class = "btn btn-danger eliminar_2" data-id="'.$filas['ID'].'" data-toggle="modal" data-target="#Modal_eliminacion_2">ELIMINAR</button></td>';
      echo '</tr>';

    }
  }
  elseif ($x==10){
    $_SESSION['nusu']=11;
    $_SESSION['ver'] =12;
    $sentencia= 'SELECT * FROM  MUNICIPIOS  WHERE DELETE_AT IS NULL';
    $resultado = mysqli_query($conexion,$sentencia);
    echo '<button type="button" class="btn btn-outline-secondary" onclick="location.href=\'nuevo_user.php\'" >Nuevo City</button>';
    echo '<tr>';
    echo   '<td>Departamento</td>' ;
    echo   '<td>Descripcion</td>' ;
    echo   '<td>Opciones</td>' ;
    echo   '<td> </td>';
    echo '</tr>';
    while ($filas = mysqli_fetch_assoc($resultado)){
          $sentencia1= 'SELECT * FROM  DEPARTAMENTOS  WHERE DELETE_AT IS NULL AND ID ='.$filas["ID_DEPARTAMENTO"];
          $resultado1 = mysqli_query($conexion,$sentencia1);
          $filas1 = mysqli_fetch_assoc($resultado1);
      echo '<tr>';
      echo '<td>'; echo $filas1['DESCRIPCION']; echo '</td>';
      echo '<td>'; echo $filas['DESCRIPCION']; echo '</td>';
      echo '<td><a href = "modif_pro.php?no='.$filas["ID"].'"><button type="button" class = "btn btn-success">Modificar </button></a> </td>';
      echo '<td><button type="button" id="eliminar_2" class = "btn btn-danger eliminar_2" data-id="'.$filas['ID'].'" data-toggle="modal" data-target="#Modal_eliminacion_2">ELIMINAR</button></td>';
      echo '</tr>';

    }
  }elseif ($x==11){
    $sen= 'SELECT * FROM tr_curso_contenido WHERE DELETE_AT IS NULL AND FK_ID_CURSO ='.$_GET['no'];
    $re= mysqli_query($conexion,$sen);
    
  
  
    // echo '<button type="button" class="btn btn-outline-secondary" id="volver" name="volver" >Volver</button>';
    echo '<tr>';
    echo   '<td>Descripcion</td>' ;
    echo   '<td>Ruta</td>' ;
    echo   '<td>Tipo de Contenido</td>' ;
    echo   '<td>Instrumento</td>' ;

    echo '</tr>';
      while($ob= mysqli_fetch_assoc($re)){
    echo '<tr>';

          $sentencia= 'SELECT * FROM contenido WHERE DELETE_AT IS NULL AND ID_CONTENIDO ='.$ob['FK_ID_CONTENIDO'];
          $resultado = mysqli_query($conexion,$sentencia);
          $obtener =  mysqli_fetch_assoc($resultado);
      echo '<td>'; echo $obtener['DESCRIPCION']; echo '</td>';
      echo '<td>'; echo '<a href="'.$obtener['RUTA'].'">VER</a> '; echo '</td>';
      $sentencia1= 'SELECT * FROM tipo_contenido  WHERE DELETE_AT IS NULL AND ID_TIPO_CONTENIDO  ='.$obtener['FK_TIPO_CONTENIDO'];
      $resultado1 = mysqli_query($conexion,$sentencia1);
      $obtener1 =  mysqli_fetch_assoc($resultado1);
      echo '<td>'; echo $obtener1['DESCRIPCION']; echo '</td>';

      $sentencia2= 'SELECT * FROM instrumento WHERE DELETE_AT IS NULL AND ID_INSTRUMENTO  ='.$obtener['FK_INSTRUMENTO'];
      $resultado2 = mysqli_query($conexion,$sentencia2);
      $obtener2 =  mysqli_fetch_assoc($resultado2);
      echo '<td>'; echo $obtener2['DESCRIPCION']; echo '</td>';
      echo '</tr>';

        }
  }

 ?>

    </table>
    </div>
 
 </div>
 <!-- Fin Page Content -->

   <!-- Modal -->
   <div class="modal fade" id="Modal_eliminacion_2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">ELIMINAR REGISTRO</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        ¿Desea Continuar con la eliminación del registro?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-danger" id="elimina_registro" name="elimina_registro" data-dismiss="modal">ELIMINAR</button>
                    </div>
                    </div>
                </div>
                </div>

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
  
  <script>
$(document).ready(function(){
    if('<?php echo $mensaje; ?>'){
      $('#ejemplomodal').modal({
        show: true
      });
    }
    $("#menu-toggle").click(function (e) {
      e.preventDefault();
      $("#content-wrapper").toggleClass("toggled");
    });

    /**************************EJECUTAMOS TODO LO NECESARIO PARA EL AJAX******************/
    var id_curso = null;

    $(document).on('click', '.eliminar_2', function(){
      id_curso = $(this).data('id');
    });

    $(document).on('click', '#elimina_registro', function(){

      $.ajax({
        method: 'POST',
        url: 'eliminar_dato.php',
        data: {
          id_curso_elimina : id_curso,
          id_usuario: <?php echo $_SESSION['id'];?>,
          dato:(<?php echo $x;?>+1)
          // otro_dato: 'valor'
        }
      }).done(function (respuesta){
        location.reload();
      }).fail(function (error){
        console.log('se ha generado un error', error);
      });
    });
  //  $(document).on('click','#volver', function (){
  //     $ajax({
  //       method: 'POST',
  //       url: 'inicio.php',
  //       data: {
  //         dato: 2
  //       }
  //     }).done(function (respuesta){
  //       window.location ='inicio.php';
  //     }).fail(function (error){
  //       console.log('se ha generado un error', error);
  //   });

});
</script>
</body>
</html>