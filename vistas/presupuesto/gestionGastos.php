
<!DOCTYPE html>
<html lang="en">

<head>
  <title><?php echo isset($tituloPagina) ? $tituloPagina : "Presupuesto y gstión del gasto"; ?></title>
  <link rel="stylesheet" type="text/css" href="../../librerias/bootstrap4/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../../librerias/fontawesome/css/all.css">
  <link rel="stylesheet" type="text/css" href="../../assets/css/nav.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  
  <!-- Vendor CSS Files -->
  <style>
    body {
      margin: 0;
      padding: 0;
      background-color: #545957;
      /* Color de fondo de la página */
    }

    /* Estilos del encabezado */
    .logo a {
      color: #5E6160;
      /* Color del texto del logo */
    }

    .nav-link {
      color: #5E6160;
      /* Color del texto del enlace de navegación */
    }

    .nav-link:hover {
      color: #007bff;
      /* Color del texto del enlace de navegación al pasar el ratón */
    }

    /* Estilos de la sección del héroe */
    #hero {
      background-color: #545957;
      /* Color de fondo de la sección del héroe */
      color: #fff;
      /* Color del texto de la sección del héroe */
      padding: 60px 0;
      /* Espaciado interno de la sección del héroe */
      text-align: center;
      /* Alineación del texto en el centro */
    }

    #hero h1 {
      font-size: 3em;
      /* Tamaño de fuente del título principal */
      margin-bottom: 20px;
      /* Espaciado inferior del título principal */
    }

    #hero h2 {
      font-size: 1.5em;
      /* Tamaño de fuente del subtítulo */
      margin-bottom: 40px;
      /* Espaciado inferior del subtítulo */
    }

    .icon-container {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
    }

    .icon-box {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      background-color: #5E6160;
      padding: 20px;
      border-radius: 10px;
      transition: 0.3s;
      border-width: 3px;
      border-style: solid;
      border-color: #347357;
      color: #ffffff;
      clip-path: polygon(50% 0%, 100% 25%, 100% 75%, 50% 100%, 0% 75%, 0% 25%);
      margin: 2px;
    }

    .icon-box:hover {
      background-color: #515353;
      color: #ffffff;
    }

    .icon-box i {
      font-size: 2em;
      margin-bottom: 1px;
      /* Reduzco el espaciado inferior de los íconos */
    }

    .icon-box h3 {
      font-size: 1.2em;
      margin-bottom: 0;
    }
    .icon-box a {
      color: #ffffff;
    }
    .icon-box.selected {
  background-color: #007bff !important;
  color: #ffffff !important;
}
    .nav-link:hover {
      color: #007bff;
    }
    .icon-container .second-row .icon-box {
      background-color: #e74c3c;
      height: 120px;
    }
    .btn-custom {
      background-color: #545957;
      color: #438c6b;
      border: none;
      padding: 15px 20px;
      border-radius: 35px;
      cursor: pointer;
      transition: background-color 0.3s ease-out, color 0.3s ease-out;
      font-size: 55px;
    }
    .btn-custom .fa-reply {
      color: #438c6b;
      font-size: 55px;
    }
  </style>
</head>

<body>
<?php include("headerPresupuesto.php"); ?>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <!-- ... (tu contenido actual del encabezado) ... -->
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center justify-content-center">
    <div class="container" data-aos="fade-up">
      <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="100">
        <div class="col-xl-6 col-lg-8">
          <h2>DEPARTAMENTO DE PRESUPUESTO Y CONTROL DEL GASTO</h2>
          <h4>Presupuesto y Gestión del Gasto</h4>
        </div>
      </div>
      <br>
      
      <center>
        <table>
          <tr>
            <th class="icon-box selected" onclick="toggleIcon(this)" >
              <i class="ri-store-line"></i>
              <h3><a href="puntos/8_1.php"> 8.1 </a></h3>
            </th>
            <th></th>
            <th class="icon-box selected" onclick="toggleIcon(this)">
              <i class="ri-store-line"></i>
              <h3><a href="puntos/8_2.php"> 8.2 </a></h3>
            </th>
            <th></th>
            <th class="icon-box selected" onclick="toggleIcon(this)">
              <i class="ri-store-line"></i>
              <h3><a href="puntos/8_3.php"> 8.3 </a></h3>
            </th>
          </tr>
          <tr>
            <td></td>
            <td class="icon-box selected" onclick="toggleIcon(this)">
              <i class="ri-store-line"></i>
              <h3><a href="puntos/8_4.php"> 8.4 </a></h3>
            </td>
            <td></td>
            <td class="icon-box selected" onclick="toggleIcon(this)">
              <i class="ri-store-line"></i>
              <h3><a href="puntos/8_5.php"> 8.5 </a></h3>
            </td>
          </tr>
        </table>
      </center>
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
