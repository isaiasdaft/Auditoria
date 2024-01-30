<?php
$matricula = $_POST['matricula'];
$departamento = $_POST['departamento'];
session_start();
$_SESSION['matricula'] = $matricula;
$conexion = mysqli_connect("localhost", "root", "", "auditoria");

try {
    if (filter_var($matricula)) {
        // Verificar autorización general primero
        $consulta_autoriza = "SELECT * FROM usuarios WHERE matricula=? AND autoriza=1";
        $stmt_autoriza = mysqli_prepare($conexion, $consulta_autoriza);
        mysqli_stmt_bind_param($stmt_autoriza, "s", $matricula);
        mysqli_stmt_execute($stmt_autoriza);
        $resultado_autoriza = mysqli_stmt_get_result($stmt_autoriza);
        $c_autoriza = mysqli_num_rows($resultado_autoriza);

        if ($c_autoriza > 0) {
            // Si el usuario tiene autorización general, redirige a la página principal o alguna vista común.
            echo json_encode(["redirect" => "vistas/capacitacion.php"]);

            exit();
        }

        // Si el usuario no tiene autorización general, verificar el departamento específico
        $consulta = "SELECT * FROM usuarios WHERE matricula=? AND departamento=?";
        $stmt = mysqli_prepare($conexion, $consulta);
        mysqli_stmt_bind_param($stmt, "ss", $matricula, $departamento);
        mysqli_stmt_execute($stmt);
        $resultado = mysqli_stmt_get_result($stmt);
        $c = mysqli_num_rows($resultado);

        if ($c > 0) {
            $filas = mysqli_fetch_assoc($resultado);
            // Redirigir según el departamento específico del usuario
            switch ($filas['departamento']) {
                case 1:
                    $_SESSION['id'] = $filas['id'];
                    $_SESSION['departamento'] = $filas['departamento'];
                    $_SESSION['tipo_usuario'] = $filas['tipo_usuario']; 
                    echo json_encode(["redirect" => "vistas/capacitacion.php"]);
                    break;
                case 2:
                    $_SESSION['id'] = $filas['id'];
                    $_SESSION['departamento'] = $filas['departamento'];
                    $_SESSION['tipo_usuario'] = $filas['tipo_usuario']; 
                    echo json_encode(["redirect" => "vistas/personal.php"]);
                    break;
                case 3:
                    $_SESSION['id'] = $filas['id'];
                    $_SESSION['departamento'] = $filas['departamento'];
                    $_SESSION['tipo_usuario'] = $filas['tipo_usuario']; 
                    echo json_encode(["redirect" => "vistas/relaciones.php"]);
                    break;
                case 4:
                    $_SESSION['id'] = $filas['id'];
                    $_SESSION['departamento'] = $filas['departamento'];
                    $_SESSION['tipo_usuario'] = $filas['tipo_usuario']; 
                    echo json_encode(["redirect" => "vistas/presupuesto.php"]);
                    break;
                default:
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
