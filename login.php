<?php
$user = $_POST ["user"];
$pass = $_POST ["pass"];

 $usuario= "nombre";
 $contrasenia= "1234";
 if ($usuario == $user && $contrasenia == $pass) {
   header ("location: https://www.clarin.com/");
 } else {
   print ("location: http://www.estudiohbg.com.ar/");
 }
 ?>
