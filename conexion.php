<?php

function retornarConexion (){
  $server="localhost";
  $usuario="root";
  $clave="";
  $base="base_aplicacionbd";
  $conexion=mysqli_connect($server,$usuario,$clave,$base) or die ("Error de conexion");
  mysqli_set_charset($conexion, 'utf8');
  return $conexion;
}

 ?>
