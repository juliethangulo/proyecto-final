<?php
session_start();
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];

    $sql = "SELECT email, nombre, direccion, password FROM usuarios WHERE usuario='$usuario'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (
            $password == $row['password']
        ) {
            $_SESSION['email'] = $row['email'];
            $_SESSION['usuario'] = $usuario;
            $_SESSION['nombre'] = $row['nombre'];
            $_SESSION['direccion'] = $row['direccion'];
            header('Location: ../index.php');
            exit();
        } else {
            echo "Contraseña incorrecta";
            echo "<a href='../login.php'>Volver</a>";
        }
    } else {
        header('Location: ../registro.html');
        exit();
    }

    $conn->close();
}
?>
