<?php

$nombre_form = $_POST['nombre'];
$apellido_form = $_POST['apellido'];
$correo_form = $_POST['correo'];
$mensaje_form = $_POST['mensaje'];

$cuerpo_mail =
    "Nombre: " . $nombre_form . "\r\n" .
    "Apellido: " . $apellido_form . "\r\n" .
    "Correo electronico: " . $correo_form . "\r\n" .
    "Mensaje: " . $mensaje_form . "\r\n";

    mail("tech@store.com", "Mensaje enviado desde el sitio", $cuerpo_mail);

//$conexion = mysqli_connect("localhost", "root", "", "pwi") or exit("Falló la conexion")
$conexion = mysqli_connect("localhost", "id20648103_essta", "1q-W23456", "id20648103_pwi") or exit("Falló la conexion");

//Consulta

mysqli_query($conexion, "INSERT INTO consultas VALUES (DEFAULT,'$nombre_form','$apellido_form', '$correo_form','$mensaje_form')");

mysqli_close($conexion);

header("Location:contacto.php?ok");
