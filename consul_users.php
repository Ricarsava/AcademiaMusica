<?php

include 'conexion.php';
// $consulta="select * from USUARIO";
// $consul= "select * from USUARIO where ID_USUARIO = 4";
// $resulta = mysqli_query($conexion,$consulta);
// $resul = mysqli_query($conexion,$consul);
// $x = 0;
// $y = 0;
// $obtener = mysqli_fetch_array($resulta);
// $obten = mysqli_fetch_array($resul);
//  while($x<5){
//  echo 'Probando que funcione: '.$obtener[$x].'<br>' ;
//  $x ++;
//  }
//  while($y<5){
//     echo 'Probando que funcione: '.$obten[$y].'<br>' ;
//     $y ++;
//     }

// Obtenemos cuantos usuarios que tiene la tabla
$consul = "select count(*)from USUARIO";
$resul = mysqli_query($conexion,$consul);
$obten= mysqli_fetch_array($resul);
//lo guardamos aqui
 $llega =$obten[0];

 // El ID del primer usuario que aparece en la base de datos
 $consul1 = "select * from USUARIO";
 $resul1 = mysqli_query($conexion,$consul1);
 $obten1= mysqli_fetch_array($resul1);
 //Lo guardamos aqui
 $c = $obten1['ID_USUARIO'];
//inicializamos Dos variables que nos van ayudar a llevar la cuenta
 //La x nos va a ayudar con el inicio para el while
 $x= 0;
 //La p nos va a ayudar a escribir todo lo que tiene los usuarios en el segudno while
 $p = 1;
 
 
 //el primer while que va a funcionar de tal forma que pueda poner todos y cada uno de los usuarios
while($x<$llega){
 
    echo '<tr>';
    //definimos la consulta con el id del primer usuario "$c"
    $cons= "select * from USUARIO where ID_USUARIO =".$c;
    //Enviamos la consulta
    $res = mysqli_query($conexion,$cons);
    //Guardamos en un arreglo
    $ob = mysqli_fetch_array($res);
        //En el segundo while estamos escribiendo todo lo que obtuvo la consulta $cons
    while($p<4){
        echo '<td> '.$ob[$p].'</td>' ;
        $p++;
        }

        echo '<td><a href = "modif_pro.php"><button type="button" class = "btn btn-success">Modificar </button></a> </td>';
        
        echo '<td><a href = "elimi_pro.php"><button type="button" class = "btn btn-danger">Eliminar </button></a> </td>';
        
        echo '</tr>';   
    //Reiniciomos "p" para poder seguir usandolo despues
    $p=1;
    //Aumentamos $c para poder consultar el siguiente usuario
    $c++;
    //aumentamos X para que no alla repeticion infinita
    $x++;
    
}

?>