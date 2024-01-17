<?php
$matricula = $_POST['matricula'];
$departamento = $_POST['departamento'];
session_start();
$_SESSION['matricula'] = $matricula;
$conexion = mysqli_connect("localhost", "root", "", "auditoria");

try {
    if (filter_var($matricula)) {
        $consulta = "SELECT * FROM usuarios WHERE matricula=? AND departamento=?";
        $stmt = mysqli_prepare($conexion, $consulta);
        mysqli_stmt_bind_param($stmt, "ss", $matricula, $departamento);
        mysqli_stmt_execute($stmt);
        $resultado = mysqli_stmt_get_result($stmt);
        $c = mysqli_num_rows($resultado);
        if ($c > 0) {
            $filas = mysqli_fetch_assoc($resultado);
            if ($filas['departamento'] == 1) {
                $_SESSION['id'] = $filas['id'];
                $_SESSION['tipo_usuario'] = $filas['tipo_usuario']; 
                echo json_encode(["redirect" => "vistas/capacitacion.php"]);
            } elseif ($filas['departamento'] == 2) {
                $_SESSION['id'] = $filas['id'];
                $_SESSION['tipo_usuario'] = $filas['tipo_usuario']; 
                echo json_encode(["redirect" => "vistas/personal.php"]);
            } elseif ($filas['departamento'] == 3) {
                $_SESSION['id'] = $filas['id'];
                $_SESSION['tipo_usuario'] = $filas['tipo_usuario']; 
                echo json_encode(["redirect" => "vistas/relaciones.php"]);
            } elseif ($filas['departamento'] == 4) {
                $_SESSION['id'] = $filas['id'];
                $_SESSION['tipo_usuario'] = $filas['tipo_usuario']; 
                echo json_encode(["redirect" => "vistas/presupuesto.php"]);
            } else {
                echo json_encode(["error" => "Tipo de usuario no reconocido"]);
            }
        } else {
            echo json_encode(["error" => "Matrícula o departamento Incorrectos"]);
        }
    } else {
        echo json_encode(["error" => "Por favor ingresa tu Matrícula "]);
    }
} catch (Exception $e) {
    echo json_encode(["error" => "Ocurrió un error al iniciar sesión"]);
} finally {
    mysqli_close($conexion);
}
?>
