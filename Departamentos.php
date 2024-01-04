<!DOCTYPE html>
<html lang="en">

<head>
  <title><?php echo isset($tituloPagina) ? $tituloPagina : "Auditoría"; ?></title>
  <link rel="stylesheet" type="text/css" href="librerias/bootstrap4/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="librerias/fontawesome/css/all.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <!-- Asegúrate de proporcionar la ruta correcta al archivo CSS de Remix Icons -->
  <link rel="stylesheet" href="path/to/remix-icons.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css">

  <!-- Agrega otros estilos según sea necesario -->
  <link rel="stylesheet" href="path/to/otro-archivo-de-estilos.css">

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
      color: #00ff00;
      /* Color del texto de la sección del héroe */
      padding: 20px 0;
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

    .icon-box:hover a {
      color: #000000;
    }

    .nav-link:hover {
      color: #007bff;
    }

    /* Ajustes para reducir el espacio entre el encabezado y la sección del héroe */
    #hero {
      margin-top: -57px; /* Ajusta este valor según sea necesario */
    }
  </style>
</head>

<body>

  <!-- ======= Header ======= -->
  <?php include("headerprincipal.php"); ?>

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center justify-content-center">
    <div class="container" data-aos="fade-up">
      <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
        <div class="col-xl-6 col-lg-8">
          <h2></h2>
        </div>
      </div>
      <div class="row mt-1"> <!-- Reduje el espacio superior -->
        <div class="col-12 text-center"> <!-- Ocupa todo el ancho disponible y centrado -->
          <div class="icon-box">
            <i class="ri-user-line"></i>
            <h3><a href="#">DEPARTAMENTO PERSONAL​</a></h3>
          </div>
        </div>

        <div class="col-12 text-center mt-1"> <!-- Ocupa todo el ancho disponible y centrado -->
          <div class="icon-box">
            <i class="fas fa-book"></i>
            <h3><a href="#">DEPARTAMENTO CAPACITACIÓN Y TRANSPARENCIA​</a></h3>
          </div>
        </div>

        <div class="col-12 text-center mt-1"> <!-- Ocupa todo el ancho disponible y centrado -->
          <div class="icon-box">
            <!-- Icono de Presupuesto y Control del Gasto -->
            <i class="fas fa-dollar-sign"></i>
            <h3><a href="#">DEPARTAMENTO PRESUPUESTO Y CONTROL</a></h3>
          </div>
        </div>

        <div class="col-12 text-center mt-1"> <!-- Ocupa todo el ancho disponible y centrado -->
          <div class="icon-box">
            <i class="fas fa-handshake"></i>
            <h3><a href="#">DEPARTAMENTO RELACIONES LABORALES</a></h3>
          </div>
        </div>
      </div>
    </div>
  </section><!-- End Hero -->

</body>

</html>
