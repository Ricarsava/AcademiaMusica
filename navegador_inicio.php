<div class="d-flex" id="content-wrapper">
    <!-- Sidebar -->
    <div id="sidebar-container" class="menu_contenedor">
        <div class="logo">
        <!-- <center><a href=""target=""></a><img src="assets/img/imagen-empresa.jpeg" width="100" height="100"  ></a></center> -->
        <center><h4 class="font-weight-bold mb-0" style="padding:15px;">Instruedu</h4></center>
        </div>

        <div class="btn-group-vertical" role="group" aria-label="Button group with nested dropdown">
        <?php
        
       
          $x= $_SESSION['rol'];
 
        if($x== 2 ){
         echo  '<button type="button" class="btn btn-secondary" style="width:270px;" onclick="location.href=\'users.php?usu=1\'">
           <i class="icon ion-md-person"></i>
           Usuarios
          </button>';
        }
        if($x==1){
         echo  '<button type="button" class="btn btn-secondary" style="width:270px;" onclick="location.href=\'inicio.php?usu=2\'">
           <i class="icon ion-ios-apps"></i>
           Cursos</button>';
          }
          if($x==3){
            echo  '<button type="button" class="btn btn-secondary" style="width:270px;" onclick="location.href=\'inicio.php?usu=1\'">
              <i class="icon ion-ios-apps"></i>
              Cursos</button>';
             }
        if($x== 1||$x== 2||$x== 3){
          echo'  <div class="dropdown">
              <button class="btn btn-secondary dropdown-toggle" style="width:270px;" type="button" id="drop"
              data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
              <i class="icon ion-md-calendar lead mr-2"></i> Reportes
              </button>
              <div class="dropdown-menu" aria-labelledby="drop">
              ';
              if($x==1){
              
                echo ' <a href="perfil.php" class="dropdown-item" style="width:270px;">Ingresos                </a>';
              }
              if($x==2){
                echo ' <a href="perfil.php" class="dropdown-item" style="width:270px;">Estadisticas            </a>';

              }
              if($x == 3){
                echo   '<a href="perfil.php" class="dropdown-item" style="width:270px;">Ediciones               </a>';
              }


          echo   ' </div>
            </div>';
            }
 
       if($x==2){
        echo  '<button type="button" class="btn btn-secondary" onclick="location.href=\'users.php?usu=2\'">
        <i class="icon ion-md-done-all"></i>
         Tipo de Instrumentos </button>
      ';
       }
       if($x==2){
        echo  '<button type="button" class="btn btn-secondary" onclick="location.href=\'users.php?usu=3\'">
          <i class="icon ion-md-bookmark"></i>
          Roles</button>
        ';
       }
             
       if($x==2){
        echo  '<button type="button" class="btn btn-secondary" onclick="location.href=\'users.php?usu=4\'">
          <i class="icon ion-md-keypad"></i>
          Tipo de Contentido</button>
        ';
       }
       if($x==2){
        echo  '<button type="button" class="btn btn-secondary" onclick="location.href=\'users.php?usu=5\'">
          <i class="icon ion-md-podium"></i>
          Dificultad</button>
        ';
       }
       if($x==2){
        echo  '<button type="button" class="btn btn-secondary" style="width:270px;" onclick="location.href=\'perfil.php\'">
          <i class="icon ion-md-tv"></i>
          Visualizacion control</button>
      ';
       }
       if($x==2){
        echo  '<button type="button" class="btn btn-secondary" style="width:270px;" onclick="location.href=\'users.php?usu=9\';">
          <i class="icon ion-md-card"></i>
          Departamentos</button>
      ';
       }
       if($x==2){
        echo  '<button type="button" class="btn btn-secondary" style="width:270px;" onclick="location.href=\'users.php?usu=10\'">
          <i class="icon ion-md-folder"></i>
          Ciudades</button>
      ';
       }
             
            

        if($x==1||$x==2||$x==3){
          echo  '<button type="button" class="btn btn-secondary" onclick="location.href=\'modif_pro.php?no='.$_SESSION['id'].'&ver=2\'">
            <i class="icon ion-md-quote"></i>
            Cambio Contraseña</button>
          ';
         }
      //   if($x==1){
      //   echo  '<button type="button" class="btn btn-secondary" onclick="location.href=\'perfil.php\'">
      //     <i class="icon ion-md-settings"></i>
      //      Settings</button>
      //   ';
      //  }
               if($x==3){
        echo  '<button type="button" class="btn btn-secondary" onclick="location.href=\'users.php?usu=6\'">
          <i class="icon ion-md-wifi"></i>
          Instrumentos</button>
        ';
       }
       if($x==3){
        echo  '<button type="button" class="btn btn-secondary" onclick="location.href=\'users.php?usu=8\'">
          <i class="icon ion-md-compass"></i>
         Contenido Curso</button>
        ';
       }
       if($x==3){
        echo  '<button type="button" class="btn btn-secondary" onclick="location.href=\'users.php?usu=7\'">
          <i class="icon ion-md-cube"></i>
          Contenido</button>
        ';
       }
       if($x==1||$x==2|| $x==3){
        echo  '<button type="button" class="btn btn-secondary" onclick="location.href=\'eventos.php\'">
           <i class="icon ion-ios-play"></i>
           Eventos</button>
           </div>';
         }
?>
</div>
     <!-- Page Content -->
     <div id="page-content-wrapper" class="w-100 bg-light-blue">

<nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
  <div class="container">
    <button class="btn btn-primary text-primary" id="menu-toggle">Menu</button>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
        <li class="nav-item active">
          <li class="nav-item">
             <a class="nav-link" ><?php echo $_SESSION['nombre'];
                                        echo '<br>';
                                        if(isset($_SESSION['NOMBRE_ROL'])&& $_SESSION['NOMBRE_ROL'] == true){
                                        echo $_SESSION['NOMBRE_ROL'];} ?></a>
           
          </li>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link text-dark dropdown-toggle" href="#" id="navbarDropdown" role="button"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="modif_pro.php?no=<?php echo $_SESSION['id'];?>&ver=1">My profile</a>
            
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="logout.php">Sign off</a>
          </div>
        </li>
      </ul>
    </div>
    </div>
</nav>
