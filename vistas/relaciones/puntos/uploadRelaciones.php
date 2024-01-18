<?php
include("../../../conexion.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $idDepartamento = $_POST["id_departamento"];
    $idPunto = $_POST["id_punto"];
    $numPunto = $_POST["num_punto"];

    if (isset($_FILES["fileUploader"]) && $_FILES["fileUploader"]["error"] == 0) {
        $target_dir = "uploadRelaciones/"; 
        $target_file = $target_dir . basename($_FILES["fileUploader"]["name"]);
        $file_type_minuta  = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        $allowed_types = array(
            "jpg", "jpeg", "png", "gif", "pdf", "doc", "docx", "xls", "xlsx", "txt", "zip", "rar"
        );
        if (!in_array($file_type_minuta, $allowed_types)) {
            echo "Sorry, only JPG, JPEG, PNG, GIF, and PDF files are allowed.";
        } else {
        
            if (move_uploaded_file($_FILES["fileUploader"]["tmp_name"], $target_file)) {
                // File upload success, now store information in the database
                $nombre_archivo = $_FILES["fileUploader"]["name"];
                $tamano = $_FILES["fileUploader"]["size"];
                $tipo = $_FILES["fileUploader"]["type"];
                $upload = $target_file;

                  if ($conexion->connect_error) {
                      die("Connection failed: " . $conexion->connect_error);
                  }
                     $sql = "INSERT INTO archivos_relaciones (nombre_archivo, tamano, tipo, fecha_subido, num_punto, id_depa, id_punto) VALUES
                    ('$nombre_archivo', $tamano, '$tipo', NOW(), '$numPunto', '$idDepartamento', '$idPunto')";

                    if ($conexion->query($sql) === TRUE) {
                        $success_message = "El archivo se han subido correctamente!";
                    } else {
                        $error_message = "Lo sentimos, hubo un error al cargar su archivo y almacenar información en la base de datos.: " . $conn->error;
                    }      
                $conexion->close();
            } else {
                $error_message = "Lo sentimos, hubo un error al cargar su archivo.";
            }
        }
    } else {
        $error_message = "ningún archivo fue subido.";
    }
    if (!empty($error_message)) {
        echo "<script>alert('" . addslashes($error_message) . "'); window.location.replace('1_1.php');</script>";
    }
}
?>
