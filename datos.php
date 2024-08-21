 <?php

 header('Content-Type: application/json');

 require("conexion.php");

 $conexion = retornarConexion();

 switch ($_GET['accion']) {
   case 'listar':
     $datos = mysqli_query($conexion, "select id, Codigo, Cliente, Nombre, Profesor from eureka");
     $resultado = mysqli_fetch_all($datos, MYSQLI_ASSOC);
     echo json_encode($resultado);
     break;

   case 'agregar':
     $respuesta = mysqli_query($conexion,"insert into eureka (Codigo, Cliente, Nombre, Profesor) values ('$_POST[Codigo]', '$_POST[Cliente]', '$_POST[Nombre]', '$_POST[Profesor]')" );
     echo json_encode($respuesta);
     break;

   case 'borrar':
     $respuesta = mysqli_query($conexion, "delete from eureka where id=$_GET[id]");
     echo json_encode($respuesta);
     break;

  case 'consultar':
     $datos = mysqli_query($conexion, "select id, Codigo, Cliente, Nombre, Profesor from eureka where id=$_GET[id]");
     $resultado = mysqli_fetch_all($datos, MYSQLI_ASSOC);
     echo json_encode($resultado);
     break;

 case 'modificar':
  $respuesta = mysqli_query($conexion, "update eureka set  Codigo='$_POST[Codigo]',
                                                           Cliente='$_POST[Cliente]',
                                                           Nombre='$_POST[Nombre]',
                                                           Profesor='$_POST[Profesor]'
                                                           where id=$_GET[id]");
      echo json_encode ($respuesta);
      break;

 }




 ?>
