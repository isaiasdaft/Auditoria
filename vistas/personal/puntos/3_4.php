<?php
session_start();
include("../../../conexion.php");
if (!isset($_SESSION['id'])) {
  header('Location: ../../../index.php');
  exit;
} else {
  $idd = $_SESSION['id'];
  $depa = $_SESSION['departamento'];
}
$tituloPagina = "Personal";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title><?php echo isset($tituloPagina) ? $tituloPagina : "Fuerza de Trabajo"; ?></title>
  <link rel="stylesheet" type="text/css" href="../../../librerias/bootstrap4/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../../../librerias/fontawesome/css/all.css">
  <link rel="stylesheet" type="text/css" href="../../../assets/css/nav.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    #hero {
      color: #1e1a1a;
      padding: 50px 0;
      text-align: center;
    }

    .modal-body {
      color: #000;
    }

    .modal-title {
      color: #2b6c42;
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
          <h2>Fuerza del trabajo</h2>
          <h4>3.4</h4>
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
                3.4 Sin observaciones
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
                <input type="file" class="form-control-file" name="fileUploader" id="fileUploader" style="display: none;">
              </label>
            </div>
            <div class="form-group">
              <span id="selectedFileLabel"></span>
            </div>
            <input type="hidden" name="id_depa" value="<?php echo $depa; ?>">
            <input type="hidden" name="id_punto" value="3"> <!-- Reemplazar VALOR_DE_ID_PUNTO con el valor adecuado -->
            <input type="hidden" name="num_punto" value="3.4"> <!-- Reemplazar VALOR_DE_NUM_PUNTO con el valor adecuado -->
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
      <a href="../prestacionesPersonal.php" class="btn-custom btn-lg">
        <span class="fa-solid fa-reply"></span>
      </a>
    </div>
    <br>
  </section>
</body>


<script>
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
<script>
  document.getElementById('fileUploader').addEventListener('change', function() {
    var fileName = this.files[0].name;
    document.getElementById('selectedFileLabel').innerText = 'Archivo seleccionado: ' + fileName;
  });
  function uploadFile() {
    var selectedFile = document.getElementById('fileUploader').files[0];
    if (selectedFile) {
        var idDepartamento = document.getElementsByName('id_depa')[0].value;
        var idPunto = document.getElementsByName('id_punto')[0].value;
        var numPunto = document.getElementsByName('num_punto')[0].value;

        var formData = new FormData();
        formData.append('fileUploader', selectedFile);
        formData.append('id_departamento', idDepartamento);
        formData.append('id_punto', idPunto);
        formData.append('num_punto', numPunto);
        $.ajax({
            url: 'uploadPresta.php',
            type: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            success: function(response) {
                console.log(response);
                alert('Los archivos se han archivado correctamente!');
                 window.location.replace('3_4.php');
            },
            error: function(xhr, status, error) {
                console.error(xhr.responseText);
            }
        });

    } else {
        alert('Por favor, selecciona un archivo antes de intentar subirlo.');
    }
}
</script>
</html>