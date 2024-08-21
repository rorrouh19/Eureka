 <?php

 //LISTAR
 "select Codigo, Cliente, Nombre, Profesor from eureka"

 //AGREGAR
 "insert intro eureka (Codigo, Cliente, Nombre, Profesor)" values ('$_POST[Codigo]', '$_POST[Cliente]', '$_POST[Nombre]', '$_POST[Profesor]')

 //BORRAR
 "delete from eureka where ID=$_GET[ID]"

 //CONSULTAR
  "select ID, Codigo, Cliente, Nombre, Profesor from eureka where ID=$_GET[ID]"

  //MODIFICAR
  "udpate eureka set Codigo='$_POST[Codigo]',
                     Cliente='$_POST[Cliente]',
                     Nombre='$_POST[Nombre]',
                     Profesor='$_POST[Profesor]'
                     where ID=$_GET[ID]"
 ?>
