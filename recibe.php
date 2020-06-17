<?php

  $nombre = $_POST["nombre"];
  $email = $_POST["email"];
  $telefono = $_POST["telefono"];

  $para = "bautistamaty7@gmail.com";
  $asunto = "Nuevo mensaje de $nombre";

  $mensaje = "
    Nombre del remitente: ".$nombre."
    correo: ".$email."
    telefono: ".$telefono."
  ";

  mail($para,$asunto,utf8_decode($telefono));

  header ("location: index.html");


 ?>


 



