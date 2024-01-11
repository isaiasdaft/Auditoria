<!DOCTYPE html>
<html lang="en">

<head>
  <title><?php echo isset($tituloPagina) ? $tituloPagina : "Auditoría"; ?></title>
  <link rel="stylesheet" type="text/css" href="librerias/bootstrap4/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="librerias/fontawesome/css/all.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <link rel="stylesheet" href="path/to/remix-icons.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css">
  <link rel="stylesheet" href="path/to/otro-archivo-de-estilos.css">

  <style>
    body,
    html {
      margin: 0;
      padding: 0;
      height: 100%;
    }

    .logo a {
      color: #5E6160;
    }

    .nav-link {
      color: #5E6160;
    }

    .nav-link:hover {
      color: #007bff;
    }

    #hero {
      background-color: #545957;
      color: #00ff00;
      padding: 20px 0;
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

    }

    .icon-box h3 {
      font-size: 1.2em;
      margin-bottom: 0;
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

    #hero {
      margin-top: -57px;
    }

    .icon-box i {
      color: #fff;
      margin-right: 10px;
    }

    .btn-custom {
      background-color: #545957;
      color: #438c6b;
      border: none;
      padding: 25px 50px;
      border-radius: 45px;
      cursor: pointer;
      transition: background-color 0.3s ease-out, color 0.3s ease-out;
      font-size: 55px;
    }


    /* Estilo para el icono dentro del botón */
    .btn-custom .fa-reply {
      color: #438c6b;
      font-size: 54px;
      
      /* Ajusta el espacio entre el icono y el texto si es necesario */
    }


    @keyframes slide-left-fade-in {
      from {
        opacity: 0;
        transform: translateX(-20px);
      }

      to {
        opacity: 1;
        transform: translateX(0);
      }
    }

    /* Aplica la animación a la clase 'animate-in' */
    .animate-in {
      animation: slide-left-fade-in 1s ease-out;
    }
  </style>
</head>

<body>
  <!-- ======= Header ======= -->
  <?php include("headerprincipal.php"); ?>

  <section id="hero" class="d-flex align-items-center justify-content-center animate-in">

    <div class="container" data-aos="fade-up">
      <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
        <div class="col-xl-6 col-lg-8">
          <h2></h2>
        </div>
      </div>
      <p></p>
      <div class="row mt-1"> <!-- Reduje el espacio superior -->
        <div class="col-12 text-center"> <!-- Ocupa todo el ancho disponible y centrado -->
          <div class="icon-box">
            <h3>
              <i class="ri-user-line"></i>
              <a href="#" onclick="openPasswordModal('personal.php')">DEPARTAMENTO PERSONAL</a>
            </h3>
          </div>
        </div>

        <div class="col-12 text-center mt-1"> <!-- Ocupa todo el ancho disponible y centrado -->
          <div class="icon-box">
            <h3>
              <i class="fas fa-book"></i>
              <a href="#" onclick="openPasswordModal('capacitacion.php')">DEPARTAMENTO CAPACITACIÓN Y TRANSPARENCIA</a>
            </h3>
          </div>
        </div>

        <div class="col-12 text-center mt-1"> <!-- Ocupa todo el ancho disponible y centrado -->
          <div class="icon-box">
            <h3>
              <i class="fas fa-dollar-sign"></i>
              <a href="#" onclick="openPasswordModal('presupuesto.php')">DEPARTAMENTO PRESUPUESTO Y CONTROL DE GASTOS</a>
            </h3>
          </div>
        </div>

        <div class="col-12 text-center mt-1"> <!-- Ocupa todo el ancho disponible y centrado -->
          <div class="icon-box">
            <h3>
              <i class="fas fa-handshake"></i>
              <a href="#" onclick="openPasswordModal('relaciones.php')">DEPARTAMENTO RELACIONES LABORALES</a>
            </h3>

          </div>
        </div>
      </div>
      <br>
      <a href="../index.php" class="btn-custom btn-lg">
      <span class="fa-solid fa-reply"></span>
      </a>
      <br>
      <br>
      <br>
    </div>
  </section><!-- End Hero -->
  <!-- Modal para ingresar contraseña -->
  <div class="modal fade" id="passwordModal" tabindex="-1" role="dialog" aria-labelledby="passwordModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="passwordModalLabel">Ingrese la contraseña</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group">
              <label for="password">Contraseña:</label>
              <input type="password" class="form-control" id="password" required>
            </div>
            <button type="button" class="btn btn-primary" onclick="checkPassword()">Ingresar</button>
          </form>
        </div>
      </div>
    </div>
  </div>



</body>

<script src="../librerias/jquery-3.7.1.min.js"></script>
<script src="../librerias/bootstrap4/bootstrap.min.js"></script>
<script src="../librerias/bootstrap4/popper.min.js"></script>
<script src="../librerias/datatable/jquery.dataTables.min.js"></script>
<script src="../librerias/datatable/dataTables.bootstrap4.min.js"></script>

</html>
<script>
  function openPasswordModal(url) {
    $('#passwordModal').modal('show');
    $('#passwordModal').data('url', url);
  }

  function checkPassword() {
    // Aquí debes implementar la lógica para verificar la contraseña.
    // Puedes comparar el valor ingresado con una contraseña predefinida o
    // hacer una solicitud al servidor para validar la contraseña.

    // Por ahora, simplemente redireccionamos después de hacer clic en "Ingresar".
    var url = $('#passwordModal').data('url');
    window.location.href = url;
  }
</script>