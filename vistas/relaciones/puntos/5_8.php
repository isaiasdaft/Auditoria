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
$tituloPagina = "Relaciones Laborales";
$consulta_texto = "SELECT observacion FROM observaciones WHERE num_punto = 5.8"; // Ajusta la consulta según tu estructura de base de datos
$resultado_texto = mysqli_query($conexion, $consulta_texto);

if ($fila_texto = mysqli_fetch_array($resultado_texto)) {
    $texto_modal = $fila_texto['observacion'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title><?php echo isset($tituloPagina) ? $tituloPagina : "Fuerza de Trabajo"; ?></title>
  <link rel="stylesheet" type="text/css" href="../../../librerias/bootstrap4/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../../../librerias/fontawesome/css/all.css">
  <link rel="stylesheet" type="text/css" href="../../../assets/css/nav.css">
  <link rel="stylesheet" type="text/css" href="../../../assets/css/newpuntos.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">

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
        <div class="col-xl-8 col-lg-8">
          <h2>Relaciones Laborales</h2>
          <h4>5.8</h4>
          <p></p>
          <button type="button" class="btn btn-info btn-lg btn-especificaciones" data-toggle="modal" data-target="#exampleModal">
            <span class="fa-solid fa-circle-info"></span>
          </button>

          <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Fuerza del Trabajo:</h5>

                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                <?php echo $texto_modal; ?>

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
            <input type="hidden" name="id_punto" value="5"> <!-- Reemplazar VALOR_DE_ID_PUNTO con el valor adecuado -->
            <input type="hidden" name="num_punto" value="5.8"> <!-- Reemplazar VALOR_DE_NUM_PUNTO con el valor adecuado -->
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
              <table class="table table-hover table-condensed" id="tablaFuerza">
                <thead style="background-color: #689477; color: white; font-weight: bold;">
                  <tr>
                    <td>ID</td>
                    <td>Nombre de archivo</td>
                    <td>Tamaño</td>
                    <td>Tipo</td>
                    <td>Fecha de subida</td>
                    <td>Descargar</td>
                  </tr>
                </thead>

                <tbody>
                <?php
                    $consulta = "SELECT archivos_relaciones.id, archivos_relaciones.nombre_archivo,
                    tamano, tipo, fecha_subido FROM archivos_relaciones 
                    WHERE CAST(num_punto AS DECIMAL(10, 2)) = 5.8;  ";
                    $ejecutar = mysqli_query($conexion, $consulta);
                    $i = 0;
                    while ( $fila = mysqli_fetch_array($ejecutar)) {
                        $ID = $fila['id'];
                        $name = $fila['nombre_archivo'];
                        $size = $fila['tamano'];
                        $type = $fila['tipo'];
                        $date = $fila['fecha_subido'];
                        $i++;
                    ?>
                  <tr>
                    <td><?php echo $ID; ?></td>
                    <td><?php echo $name; ?></td>
                    <td><?php echo $size; ?></td>
                    <td><?php echo $type; ?></td>
                    <td><?php echo $date; ?></td>
                    <td>
                       <a href="downloadRelaciones.php?file=<?php echo $name; ?>" >
                                <span class="btn btn-Primary btn-md"><span class="fas fa-download"></span> Descargar</span>
                                
                        </a>
                    </td>
                  </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
<p></p>
<br>
      <a href="../relacionesLab.php" class="btn-custom btn-lg">
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
            url: 'uploadRelaciones.php',
            type: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            success: function(response) {
                console.log(response);
                alert('Los archivos se han archivado correctamente!');
                 window.location.replace('5_8.php');
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