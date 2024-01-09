<!DOCTYPE html>
<html lang="en">

<head>
  <title><?php echo isset($tituloPagina) ? $tituloPagina : "Auditoría"; ?></title>
  <link rel="stylesheet" type="text/css" href="librerias/bootstrap4/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="librerias/fontawesome/css/all.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <style>
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
      margin: 10px;
    }

    .icon-box:hover {
      background-color: #515353;
      color: #ffffff;
    }

    .icon-box i {
      font-size: 2em;
      margin-bottom: 5px;
      /* Reduzco el espaciado inferior de los íconos */
    }

    .icon-box h3 {
      font-size: 1.2em;
      margin-bottom: 0;
      /* Elimino el espaciado inferior del título de la caja de iconos */
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
      /* Cambia el color de fondo para la segunda fila */
      height: 150px;
      /* Ajusta la altura según tus necesidades
      
      le doy clic a los iconos pero yo quiero que sea al reves q al entrar en ese php ya esten iluminados los iconos y al darle clic se desiluminen*/
    }
  </style>
</head>

<body>
<?php include("headerprincipal.php"); ?>

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
          <h5>PRESUPUESTO Y GESTIÓN DEL GASTO​</h5>
        </div>
      </div>
      <br>
      <br>
      <center>

        <table>
          <tr>
            <th class="icon-box selected" onclick="toggleIcon(this)" >
              <i class="ri-store-line"></i>
              <h3><a href="8_1.php"> 8.1 </a></h3>
            </th>
            <th></th>
            <th class="icon-box selected" onclick="toggleIcon(this)">
              <i class="ri-store-line"></i>
              <h3><a href="#"> 8.2 </a></h3>
            </th>
            <th></th>
            <th class="icon-box selected" onclick="toggleIcon(this)">
              <i class="ri-store-line"></i>
              <h3><a href="#"> 8.3 </a></h3>
            </th>
          </tr>
          <tr>
            <td></td>
            <td class="icon-box selected" onclick="toggleIcon(this)">
              <i class="ri-store-line"></i>
              <h3><a href="#"> 8.4 </a></h3>
            </td>
            <td></td>
            <td class="icon-box selected" onclick="toggleIcon(this)">
              <i class="ri-store-line"></i>
              <h3><a href="#"> 8.5 </a></h3>
            </td>
          </tr>
          <tr>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td></td>
            <td></td>
            <td></td>
          </tr>
        </table>
      </center>

    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

  </section><!-- End Hero -->

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
