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
$mensaje= null;
if(isset($_GET['p'])){
if ($_GET['p']==3){
  $mensaje = 'El dato fue agregado correctamente';

}elseif ($_GET['p']==4){
  $mensaje = 'El dato no fue agregado';

}elseif($_GET['p']==1){
  $mensaje = 'Se modificaron los datos correctamente';

}elseif($_GET['p']==2){
  $mensaje = 'No se pudo modificar los datos';

}elseif($_GET['p']==5){
  $mensaje = 'El dato fue eliminado satisfactoriamente';

}elseif($_GET['p']==6){
  $mensaje = 'No se pudo eliminar el dato';

}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>INSTRUEDU | CURSOS</title>
<?php 
  include 'head.php';
?>
</head>
   
<body>
<?php
include 'conexion.php';
  include 'navegador_inicio.php';
  ?>
      <div id="content" class="container-fluid p-5">
        <section class="py-3">
          

          <div class="row mb-3">
  <?php
 if(isset($_POST['dato'])){
  $_SESSION['usu']= $_POST['dato'];
 }
    $cu= $_SESSION['usu'];
  if($cu== 1){
?>


            <!-- Tabla usuarios -->
            <div class="col-xl-7 col-lg-12">
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th colspan="2"><small class="font-weight-bold">Users<small></th>
                      <th scope="col"><small class="font-weight-bold">Status<small></th>
                      <th scope="col"><small class="font-weight-bold">Setting<small></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr class="shadow-sm">
                      <td><img src="assets/img/user-1.png" class="img-fluid rounded-circle avatar"
                          alt="https://generated.photos/" /></td>
                      <td><span class="d-block">Cristian Ramirez</span><small class="text-muted">cristian@templune.com</small>
                      </td>
                      <td class="align-middle"><span class="badge badge-primary text-primary">Active</span></td>
                      <td class="align-middle"><span class="badge badge-secondary">Edit <i
                            class="icon ion-md-settings ml-2"></i></span></td>
                    </tr>

                    <tr class="shadow-sm">
                      <td><img src="assets/img/user-5.png" class="img-fluid rounded-circle avatar"
                          alt="https://generated.photos/" /></td>
                      <td><span class="d-block">Samuel Villamil</span><small class="text-muted">samuel@gmail.com</small>
                      </td>
                      <td class="align-middle"><span class="badge badge-primary text-primary">Active</span></td>
                      <td class="align-middle"><span class="badge badge-secondary">Edit <i
                            class="icon ion-md-settings ml-2"></i></span></td>
                    </tr>    

                    <tr class="shadow-sm">
                      <td><img src="assets/img/user-3.png" class="img-fluid rounded-circle avatar"
                          alt="https://generated.photos/" /></td>
                      <td><span class="d-block">Diego Arangure</span><small class="text-muted">diego@templune.com</small></td>
                      <td class="align-middle"><span class="badge badge-primary text-primary">Active</span></td>
                      <td class="align-middle"><span class="badge badge-secondary">Edit <i
                            class="icon ion-md-settings ml-2"></i></span></td>
                    </tr>
                    
                    <tr class="shadow-sm">
                      <td><img src="assets/img/user-4.png" class="img-fluid rounded-circle avatar"
                          alt="https://generated.photos/" /></td>
                      <td><span class="d-block">Luisa Cataño</span><small class="text-muted">irina@templune.com</small></td>
                      <td class="align-middle"><span class="badge badge-primary text-primary">Active</span></td>
                      <td class="align-middle"><span class="badge badge-secondary">Edit <i
                            class="icon ion-md-settings ml-2"></i></span></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <!-- Fin tabla usarios -->


            <!-- Mensajes -->
            <div class="col-xl-5 col-lg-12">
              <div class="card mb-5 shadow-sm border-0 shadow-hover">
                <div class="card-header bg-light border-0 pt-3 pb-0">
                  <h6 class="mb-0">Messages</h6>
                </div>
                <div class="card-body">
                  <div class="d-flex border-bottom py-3">
                    <div class="mr-3">
                      <img src="assets/img/estudiante-1.png" class="img-fluid rounded-circle avatar"
                        alt="https://generated.photos/" />
                    </div>
                    <div>
                      <div class="d-flex">
                        <p class="mb-0">Hector Palacios</p>
                        <small class="text-muted ml-auto">Hace 2 horas</small>
                      </div>
                      <small class="text-muted">Me podrías Informar sobre la clase de piano.</small>
                    </div>
                  </div>

                  <div class="d-flex border-bottom py-3">
                    <div class="mr-3">
                      <img src="assets/img/estudiante-2.jpg" class="img-fluid rounded-circle avatar"
                        alt="https://generated.photos/" />
                    </div>
                    <div>
                      <div class="d-flex">
                        <p class="mb-0">Adriana Arenas</p>
                        <small class="text-muted ml-auto">2 hours ago</small>
                      </div>
                      <small class="text-muted">Hello, today's class is at 10 in office 2.</small>
                    </div>
                  </div>

                  <div class="text-center pt-3">
                    <a href=""><small>See all messages</small></a>
                  </div>
                </div>
              </div>
            </div>
            <!-- Fin mensajes -->
          </div>

          <!-- Eventos -->
          <div class="row">
            <div class="col-lg-4">
              <div class="card d-inline-block border-0 shadow-sm shadow-hover w-100 mr-3 mb-5">
                <div class="card-body">
                  <h5 class="mb-0">Product presentation</h5>
                  <small class="d-inline-block text-muted mb-2">12:30 - 15:45</small>
                  <div class="mb-4">
                    <span class="badge badge-primary text-primary mr-1">Marketing</span> <span
                      class="badge badge-primary text-primary">Directors</span>
                  </div>
                  <div class="d-flex">
                    <div>
                      <img src="assets/img/user-1.png" class="img-fluid rounded-circle avatar"
                        alt="https://generated.photos/" />
                      <img src="assets/img/user-2.png" class="img-fluid rounded-circle avatar"
                        alt="https://generated.photos/" />
                    </div>
                    <div class="d-flex ml-auto">
                      <span class="badge badge-secondary align-self-center">Assist <i
                          class="icon ion-md-checkmark-circle ml-2"></i></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="card d-inline-block border-0 shadow-sm shadow-hover w-100 mr-3 mb-5">
                <div class="card-body">
                  <h5 class="mb-0">Results Board</h5>
                  <small class="d-inline-block text-muted mb-2">12:30 - 15:45</small>
                  <div class="mb-4">
                    <span class="badge badge-primary text-primary mr-1">Sales</span> <span
                      class="badge badge-primary text-primary">Marketing</span>
                  </div>
                  <div class="d-flex">
                    <div>
                      <img src="assets/img/user-1.png" class="img-fluid rounded-circle avatar"
                        alt="https://generated.photos/" />
                      <img src="assets/img/user-2.png" class="img-fluid rounded-circle avatar"
                        alt="https://generated.photos/" />
                    </div>
                    <div class="d-flex ml-auto">
                      <span class="badge badge-secondary align-self-center">Assist <i
                          class="icon ion-md-checkmark-circle ml-2"></i></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="card d-inline-block border-0 shadow-sm shadow-hover w-100 mr-3 mb-5">
                <div class="card-body">
                  <h5 class="mb-0">Meeting with marketing</h5>
                  <small class="d-inline-block text-muted mb-2">12:30 - 15:45</small>
                  <div class="mb-4">
                    <span class="badge badge-primary text-primary mr-1">Marketing</span> <span
                      class="badge badge-primary text-primary">Creative</span>
                  </div>
                  <div class="d-flex">
                    <div>
                      <img src="assets/img/user-1.png" class="img-fluid rounded-circle avatar"
                        alt="https://generated.photos/" />
                      <img src="assets/img/user-2.png" class="img-fluid rounded-circle avatar"
                        alt="https://generated.photos/" />
                    </div>
                    <div class="d-flex ml-auto">
                      <span class="badge badge-secondary align-self-center">Assist <i
                          class="icon ion-md-checkmark-circle ml-2"></i></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Fin Eventos -->

        </section>

        <!-- <table>
          <thead>
            <tr>
              <th>Descripcion</th>
              <th>Duracion</th>
              <th>Dificultad</th>
              <th>Opciones</th>
            </tr>
          </thead>
          <tbody>
            <?php 
              include 'conexion.php';

              $consulta_muni = 'SELECT CUR.*, DIF.DESCRIPCION AS DESCRIP_DIFI FROM CURSO AS CUR, DIFICULTAD AS DIF
                                WHERE DIF.ID_DIFICULTAD = CUR.FK_DIFICULTAD AND CUR.DELETE_AT IS NULL';
              $ejecuta_con = mysqli_query($conexion, $consulta_muni);
              while($fila_muni = mysqli_fetch_array($ejecuta_con)){
            ?>

                <tr>
                  <td><?php echo $fila_muni['DESCRIPCION'];?></td>
                  <td><?php echo $fila_muni["DURACION(N/DIAS)"]; ?></td>
                  <td><?php echo $fila_muni["DESCRIP_DIFI"]; ?></td>
                  <td>
                    <button type="button" id="eliminar_2" class = "btn btn-danger eliminar_2" data-id="<?php echo $fila_muni['ID_CURSO'];?>" data-toggle="modal" data-target="#Modal_eliminacion_2">ELIMINAR</button>
                  </td>
                </tr>

            <?php }?>
          </tbody>
        </table> -->

        <table class="table responsive">
        <?php 
     $sentencia= 'SELECT * FROM curso WHERE DELETE_AT IS NULL';
     $resultado = mysqli_query($conexion,$sentencia);
     echo '<button type="button" class="btn btn-outline-secondary" onclick="location.href=\'nuevo_user.php?usu=6\'" >Nuevo Curso</button>';
     echo '<tr>';
     echo   '<td>Descripcion</td>' ;
     echo   '<td>Duracion (N/DIAS)</td>' ;
     echo   '<td>Dificultad</td>' ;

     echo   '<td>Opciones</td>';
     echo   '<td> </td>';
     echo '</tr>';
     $_SESSION['ver']=7;
     while ($filas = mysqli_fetch_assoc($resultado)){
       echo '<tr>';
         echo '<td>'; echo $filas['DESCRIPCION']; echo '</td>';
         echo '<td>'; echo $filas["DURACION(N/DIAS)"]; echo '</td>';
              $sen= 'SELECT * FROM DIFICULTAD WHERE DELETE_AT IS NULL AND ID_DIFICULTAD ="'.$filas['FK_DIFICULTAD'].'"';
              $re=  mysqli_query($conexion,$sen);
              $fi = mysqli_fetch_assoc($re);
         echo '<td>'; echo $fi['DESCRIPCION']; echo '</td>';

         echo '<td><a href = "modif_pro.php?no='.$filas["ID_CURSO"].'"><button type="button" class = "btn btn-success">Modificar </button></a> </td>';
      
         echo '<td><button type="button" id="eliminar_2" class = "btn btn-danger eliminar_2" data-id="'.$filas['ID_CURSO'].'" data-toggle="modal" data-target="#Modal_eliminacion_2">ELIMINAR</button></td>';
 
       echo '</tr>';
     }
    }elseif($cu== 2){
      ECHO '  <table class="table responsive">';
      $sentencia= 'SELECT * FROM curso WHERE DELETE_AT IS NULL';
      $resultado = mysqli_query($conexion,$sentencia);
       echo '<tr>';
      echo   '<td>Descripcion</td>' ;
      echo   '<td>Duracion (N/DIAS)</td>' ;
      echo   '<td>Dificultad</td>' ;
 
      echo   '<td>Instrumento</td>';
      echo   '<td>Ver</td>';
      echo '</tr>';
      while ($filas = mysqli_fetch_assoc($resultado)){
        echo '<tr>';
          echo '<td>'; echo $filas['DESCRIPCION']; echo '</td>';
          echo '<td>'; echo $filas["DURACION(N/DIAS)"]; echo '</td>';
               $sen= 'SELECT * FROM DIFICULTAD WHERE DELETE_AT IS NULL AND ID_DIFICULTAD ="'.$filas['FK_DIFICULTAD'].'"';
               $re=  mysqli_query($conexion,$sen);
               $fi = mysqli_fetch_assoc($re);
          echo '<td>'; echo $fi['DESCRIPCION']; echo '</td>';
          $en ='SELECT FK_ID_CONTENIDO FROM tr_curso_contenido WHERE DELETE_AT IS NULL AND FK_ID_CURSO ='.$filas['ID_CURSO'];
          $res = mysqli_query($conexion,$en);
          $obtener = mysqli_fetch_array($res);
          $en1 ='SELECT FK_INSTRUMENTO  FROM contenido WHERE DELETE_AT IS NULL AND ID_CONTENIDO  ='.$obtener[0];
          $res1 = mysqli_query($conexion,$en1);
          $obtener1 = mysqli_fetch_array($res1);
          $en2 ='SELECT * FROM instrumento WHERE DELETE_AT IS NULL AND ID_INSTRUMENTO   ='.$obtener1[0];
          $res2 = mysqli_query($conexion,$en2);
          $obtener2 = mysqli_fetch_array($res2);
          echo '<td>';echo $obtener2[1];  echo '</td>';
     
 
          echo '<td><a href = "users.php?no='.$filas["ID_CURSO"].'&usu=11"><button type="button" class = "btn btn-success">Ver</button></a> </td>';
       
  
        echo '</tr>';
      }
    }
  ?>  </table>
  <br>
  <br>
  <br>

      </div>
 
    </div>
    <!-- Fin Page Content -->
  
  </div>
  <!-- Fin wrapper -->
   


    
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

</body>

</html>

<!-- Abrir / cerrar menu -->
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
          dato:<?php echo $_GET['usu'];?>
        }
      }).done(function (respuesta){
        location.reload();
      }).fail(function (error){
        console.log('se ha generado un error', error);
      });
    });

});



  </script>


