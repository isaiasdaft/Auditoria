<?php
session_start();
include("../conexion.php");
if (!isset($_SESSION['id'])) {
    header('Location: ../index.php');
    exit;
} else {
    $idd = $_SESSION['id'];
}
$tituloPagina = "Inicio";
?>

<?php include("headers/headerPrincipal.php"); ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>