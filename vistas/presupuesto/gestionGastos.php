<?php
session_start();
include("../../conexion.php");

if (!isset($_SESSION['id'])) {
    header('Location: ../../index.php');
    exit;
} else {
    $idd = $_SESSION['id'];
    $depa= $_SESSION['departamento'];
}

$tituloPagina = "Gestión de Gastos";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title><?php echo isset($tituloPagina) ? $tituloPagina : "Fuerza de Trabajo"; ?></title>
  <link rel="stylesheet" type="text/css" href="../../librerias/bootstrap4/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../../librerias/fontawesome/css/all.css">
  <link rel="stylesheet" type="text/css" href="../../assets/css/nav.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    #hero {
      background-color: #fff;
      color: #fff;
      padding: 60px 0;
      text-align: center;
    }
    #hero h1 {
      font-size: 3em;
      margin-bottom: 20px;
    }
    #hero h2 {
      font-size: 1.5em;
      margin-bottom: 40px;
    }
    #hero h4 {
      font-size: 2em;
      margin-bottom: 20px;
      color: #1a564d;
    }

    .point-list {
      list-style-type: none;
      padding: 0;
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 20px;
      margin-top: 30px;
    }

    .point-item {
      background-color: #5E6160;
      padding: 20px;
      border-radius: 10px;
      transition: background-color 0.3s, transform 0.3s;
      cursor: pointer;
      text-align: center;
      width: 120px;
    }
    .point-item:hover {
      background-color: #777878;
      transform: scale(1.15);
    }
    .point-item a {
      text-decoration: none;
      color: #ffffff;
      font-size: 1.1em;
    }

    .btn-custom {
      background-color: #fff;
      color: #438c6b;
      border: none;
      padding: 15px 20px;
      border-radius: 35px;
      cursor: pointer;
      transition: background-color 0.5s ease-out, color 0.5s ease-out;
      font-size: 55px;
      margin-top: 30px;
    }

    .btn-custom .fa-reply {
      color: #438c6b;
      font-size: 55px;
    }
  </style>
</head>
<body>
<?php include("headerPresupuesto.php"); ?>

  <section id="hero" class="d-flex align-items-center justify-content-center">
    <div class="container" data-aos="fade-up">
      <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="100">
        <div class="col-xl-6 col-lg-8">
          <h2>DEPARTAMENTO DE PRESUPUESTO Y CONTROL DEL GASTO</h2>
          <h4>Presupuesto y Gestión del Gasto</h4>
        </div>
      </div>
      <br>
      
      <ul class="point-list">
        <li class="point-item">
          <a href="puntos/8_1.php">8.1</a>
        </li>
        <li class="point-item">
          <a href="puntos/8_2.php">8.2</a>
        </li>
        <li class="point-item">
          <a href="puntos/8_3.php">8.3</a>
        </li>
        <li class="point-item">
          <a href="puntos/8_4.php">8.4</a>
        </li>
        <li class="point-item">
          <a href="puntos/8_5.php">8.4</a>
        </li>
       
      </ul>
      <p></p>
      <a href="../presupuesto.php" class="btn-custom btn-lg">
      <span class="fa-solid fa-reply"></span>
    </a>
    </div>
  </section>
  <script>
  document.addEventListener("DOMContentLoaded", function() {
    // Ilumina todos los elementos al cargar la página
    var iconBoxes = document.querySelectorAll('.icon-box');
    iconBoxes.forEach(function(box) {
      box.classList.add('selected');
    });
  });

  function toggleIcon(element) {
    // Desilumina el elemento clicado
    element.classList.remove('selected');
  }
</script>
</body>
</html>
