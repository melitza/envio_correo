<?php
   $correo=$_GET['correo'];
   $edad=$_GET['edad'];

   echo "se ha registrado ".$correo. "";

   if($edad>40)
   {
      echo " eres cuchit@ ";
   }else{
      echo "eres un(a) ni&ntilde;@ ";
    }

?>
