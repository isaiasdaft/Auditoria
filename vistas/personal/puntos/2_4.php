<?php
session_start();
include("../../../conexion.php");
if (!isset($_SESSION['id'])) {
  header('Location: ../../../index.php');
  exit;
} else {
  $idd = $_SESSION['id'];
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
      color: #1e1a1a;
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
      color: #1e1a1a;
      clip-path: polygon(50% 0%, 100% 25%, 100% 75%, 50% 100%, 0% 75%, 0% 25%);
      margin: 2px;
    }
    .icon-box:hover {
      background-color: #515353;
      color: #1e1a1a;
    }
    .icon-box i {
      font-size: 2em;
      margin-bottom: 1px;
    }
    .icon-box h3 {
      font-size: 1.2em;
      margin-bottom: 0;
    }
    .icon-box a {
      color: #1e1a1a;
    }
    .icon-box.selected {
      background-color: #007bff !important;
      color: #1e1a1a !important;
    }
    .nav-link:hover {
      color: #007bff;
    }
    .icon-container .second-row .icon-box {
      background-color: #e74c3c;
      height: 120px;
    }
    .modal-body {
      color: #000;
    }
    .modal-title {
      color: #333;
    }

    .btn-custom {
      color: #438c6b;
      border: none;
      padding: 15px 20px;
      border-radius: 35px;
      cursor: pointer;
      transition: background-color 0.3s ease-out, color 0.3s ease-out;
      font-size: 55px;
    }

    .btn-cus {
      color: #a3d6bd;
      border: none;
    }

    .btn-custom .fa-reply {
      color: #438c6b;
      font-size: 55px;
    }

    .btn-especificaciones {
      position: absolute;
      top: 0;
      right: 0;
      margin-top: 0.1px;
      margin-right: 30px;
    }
  </style>
</head>

<body>
  <?php include("header.php"); ?>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <!-- ... (tu contenido actual del encabezado) ... -->
  </header><!-- End Header -->

  <section id="hero" class="d-flex align-items-center justify-content-center">
    <div class="container" data-aos="fade-up">
      <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="100">
        <div class="col-xl-6 col-lg-8">
          <h2>Dotación de Recursos Humanos:</h2>
          <h4>2.4</h4>
          <p></p>
          <button type="button" class="btn btn-info btn-especificaciones" data-toggle="modal" data-target="#exampleModal">
            <span class="fa-solid fa-circle-info"></span>
          </button>

          <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Observaciones:</h5>

                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                2.4 Continuar impulsando  los mecanismos que consideré necesarias en coordinación con el Jefe de Departamento de Personal y la Jefatura de Servicios de Desarrollo de Personal, que le permitan continuar garantizando el cabal cumplimiento a los cinco días para designar candidatos, establecidos en el Reglamento para la Calificación y Selección de Puestos de Confianza “B”. 
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
          <p></p>
          <br>
          <br>
          <form id="uploadForm">
            <div class="form-group">
              <label for="fileUploader" class="btn btn-secondary">
                <i class="fas fa-cloud-upload-alt"></i> Seleccionar Archivo
                <input type="file" class="form-control-file" id="fileUploader" style="display: none;">
              </label>
            </div>
            <div class="form-group">
              <span id="selectedFileLabel"></span>
            </div>
            <div class="form-group">
              <button type="button" class="btn btn-success" onclick="uploadFile()">
                <i class="fas fa-upload"></i> Subir Archivo
              </button>
            </div>
          </form>

        </div>
      </div>
      <p></p>
      <br>
      <center>
        <h4>Archivos Subidos</h4>
      <br>
      <div class="row">
    <div class="col-sm-12">
        <div class="table-responsive">
            <table class="table table-striped table-hover" id="tablaFuerza">
                <thead class="thead-dark">
                    <tr>
                    <td class="d-none d-sm-table-cell">ID</td>
                        <td>Nombre de la supervisión</td>
                        <td>Unidad</td>
                        <td>Fecha de inicio</td>
                        <td>Fecha de finalización</td>
                        <td>Estatus</td>
        
                    </tr>
                </thead>
                <tbody>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td> 
                            <td></td>
                        </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<p></p>
<br>
      <a href="../DotacionRH.php" class="btn-custom btn-lg">
        <span class="fa-solid fa-reply"></span>
      </a>
    </div>
    <br>
  </section>
  <script>
    document.addEventListener("DOMContentLoaded", function() {
      var iconBoxes = document.querySelectorAll('.icon-box');
      iconBoxes.forEach(function(box) {
        box.classList.add('selected');
      });
    });

    function toggleIcon(element) {
      element.classList.remove('selected');
    }
  </script>

<script type="text/javascript">
    $(document).ready(function() {
        $('#tablaFuerza').DataTable();
    });
</script>
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
<script src="../../../librerias/jquery-3.7.1.min.js"></script>
<script src="../../../librerias/bootstrap4/popper.min.js"></script>
<script src="../../../librerias/bootstrap4/bootstrap.min.js"></script>
<script src="../../../librerias/datatable/jquery.dataTables.min.js"></script>
<script src="../../../librerias/datatable/dataTables.bootstrap4.min.js"></script>
</html>

<script>
  // Función para mostrar el nombre del archivo seleccionado
  document.getElementById('fileUploader').addEventListener('change', function() {
    var fileName = this.files[0].name;
    document.getElementById('selectedFileLabel').innerText = 'Archivo seleccionado: ' + fileName;
  });
  function uploadFile() {
    var selectedFile = document.getElementById('fileUploader').files[0];
    if (selectedFile) {
      console.log('Subiendo archivo:', selectedFile.name);
    } else {
      alert('Por favor, selecciona un archivo antes de intentar subirlo.');
    }
  }
</script>