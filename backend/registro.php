<?php
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];
    $nombre = $_POST['nombre'];
    $direccion = $_POST['direccion'];

    $sql = "INSERT INTO usuarios (email, usuario, password, nombre, direccion) VALUES ('$email', '$usuario', '$password', '$nombre', '$direccion')";

    if ($conn->query($sql) === true) {
        echo "Registro exitoso";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
