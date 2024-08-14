<?php
include 'conexion.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

     $email = $_SESSION['email'];
     $nombre_cliente = $_SESSION['nombre'];
     $hora = $_POST['hora'];
     $fecha = $_POST['fecha'];
     $observaciones = $_POST['observaciones'];
     $tipo_servicio = $_POST['tipo_servicio'];
     
     $sql = "INSERT INTO citas (email, nombre_cliente, hora, fecha, observaciones, tipo_servicio) VALUES ('$email', '$nombre_cliente', '$hora', '$fecha', '$observaciones', '$tipo_servicio')";
     
     if ($conn->query($sql) === true) {
          echo true;
     } else {
          echo false;
     }
     
     $conn->close();
   
}
?>
