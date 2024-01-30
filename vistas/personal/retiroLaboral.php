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

$tituloPagina = "Personal";
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
      font-size: 4em;
      margin-bottom: 40px;
    }
    #hero h4 {
      font-size: 3.3em;
      margin-bottom: 20px;
      color: #1a564d;
    }

    .point-list {
      list-style-type: none;
      padding: 0;
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 40px;
      margin-top: 40px;
    }

    .point-item {
      background-color: #2e8c7e;
      padding: 35px;
      border-radius: 10px;
      transition: background-color 0.3s, transform 0.3s;
      cursor: pointer;
      text-align: center;
      width: 210px;
    }
    .point-item:hover {
      background-color: #1F6157;
      transform: scale(1.15);
    }
    .point-item a {
      text-decoration: none;
      color: #ffffff;
      font-size: 2em;
    }

    .btn-custom {
      background-color: #fff;
      color: #438c6b;
      border: none;
      padding: 15px 20px;
      border-radius: 55px;
      cursor: pointer;
      transition: background-color 0.5s ease-out, color 0.5s ease-out;
      font-size: 75px;
      margin-top: 30px;
    }

    .btn-custom .fa-reply {
      color: #438c6b;
      font-size: 80px;
    }
  </style>
</head>

<body>
<?php include("headerpersonal.php"); ?>
  <header id="header" class="fixed-top">
  </header><!-- End Header -->
  <section id="hero" class="d-flex align-items-center justify-content-center">
    <div class="container" data-aos="fade-up">
      <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="100">
        <div class="col-xl-12 col-lg-12">
          <h2>DEPARTAMENTO DE PERSONAL</h2>
          <h4>Retiro Laboral</h4>
        </div>
      </div>
      <br>
      
      <ul class="point-list">
        <li class="point-item">
          <a href="puntos/4_1.php">4.1</a>
        </li>
        <li class="point-item">
          <a href="puntos/4_2.php">4.2</a>
        </li>
        <li class="point-item">
          <a href="puntos/4_3.php">4.3</a>
        </li>
        <li class="point-item">
          <a href="puntos/4_4.php">4.4</a>
        </li>
        <li class="point-item">
          <a href="puntos/4_5.php">4.5</a>
        </li>
      </ul>
      <p></p>
      <br>
      <br>
      <a href="../personal.php" class="btn-custom btn-lg">
      <span class="fa-solid fa-reply"></span>
    </a>
      
    </div>
  </section><!-- End Hero -->
</body>

<script>
  // JavaScript para agregar clases al cerrar sesión
  function cerrarSesion() {
    setTimeout(function() {
      window.location.href = 'cerrar_sesion.php';
      setTimeout(function() {
        document.body.classList.remove('logged-out', 'logged-out-effect');
      }, 500);
    }, 500);
  }
</script>
<script src="../../librerias/jquery-3.7.1.min.js"></script>
<script src="../../librerias/bootstrap4/bootstrap.min.js"></script>
<script src="../../librerias/bootstrap4/popper.min.js"></script>
<script src="../../librerias/datatable/jquery.dataTables.min.js"></script>
<script src="../../librerias/datatable/dataTables.bootstrap4.min.js"></script>
</html>
