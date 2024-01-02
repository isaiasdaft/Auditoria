<?php
$usuario = $_POST['usuario'];
$contraseña = $_POST['contraseña'];
session_start();
$_SESSION['usuario'] = $usuario;

$conexion = mysqli_connect("localhost", "root", "", "auditoria");

try {
    if (filter_var($usuario)) {
        $consulta = "SELECT * FROM usuarios WHERE usuario=? AND contraseña=?";
        $stmt = mysqli_prepare($conexion, $consulta);
        mysqli_stmt_bind_param($stmt, "ss", $usuario, $contraseña);
        mysqli_stmt_execute($stmt);
        $resultado = mysqli_stmt_get_result($stmt);
        $c = mysqli_num_rows($resultado);

        if ($c > 0) {
            $filas = mysqli_fetch_assoc($resultado);
            if ($filas['tipo_usuario'] == 1) {
                $_SESSION['id'] = $filas['id'];
                $_SESSION['departamento'] = $filas['departamento'];
                $_SESSION['tipo_usuario'] = $filas['tipo_usuario']; // Agrega esta línea
                
                header("location:home.php");
                exit();
            } elseif ($filas['tipo_usuario'] == 2) {
                $_SESSION['id'] = $filas['id'];
                $_SESSION['departamento'] = $filas['departamento'];
                $_SESSION['tipo_usuario'] = $filas['tipo_usuario']; // Agrega esta línea
                
                header("location:home.php");
                exit();
            } else {
                echo "<script>alert('Tipo de usuario no reconocido')</script>";
            }
        } else {
            echo "<script>alert('Matricula y/o Contraseña Incorrectos')</script>";
        }
    } else {
        echo "<script>alert('Matricula y/o Contraseña Incorrectos')</script>";
    }
} catch (Exception $e) {
    echo "<script>alert('Ocurrió un error al iniciar sesión')</script>";
} finally {
    mysqli_close($conexion);
    echo "<script>window.location.href='index.php';</script>";
}
?>