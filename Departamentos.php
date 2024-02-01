<!DOCTYPE html>
<html lang="en">
<head>
  <title><?php echo isset($tituloPagina) ? $tituloPagina : "Auditoría"; ?></title>
  <link rel="stylesheet" type="text/css" href="librerias/bootstrap4/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="librerias/fontawesome/css/all.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="path/to/remix-icons.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css">
  <link rel="stylesheet" type="text/css" href="assets/css/depa.css">
</head>
<body>
  <?php include("header.php"); ?>
  <section id="hero" class="d-flex align-items-center justify-content-center">
    <div  id="hero-container" class="container" data-aos="fade-up">
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
              <a href="#" onclick="openPasswordModal('vistas/personal.php', 2)"  style="font-size: 32px;">DEPARTAMENTO PERSONAL</a>
            </h3>
          </div>
        </div>
        <div class="col-12 text-center mt-1"> <!-- Ocupa todo el ancho disponible y centrado -->
          <div class="icon-box">
            <h3>
              <i class="fas fa-handshake"></i>
              <a href="#" onclick="openPasswordModal('vistas/relaciones.php', 3)"  style="font-size: 32px;">DEPARTAMENTO RELACIONES LABORALES</a>
            </h3>
          </div>
        </div>
        <div class="col-12 text-center mt-1"> <!-- Ocupa todo el ancho disponible y centrado -->
          <div class="icon-box">
            <h3>
              <i class="fas fa-book"></i>
              <a href="#" onclick="openPasswordModal('vistas/capacitacion.php', 1)"  style="font-size: 32px;">DEPARTAMENTO CAPACITACIÓN Y TRANSPARENCIA</a>
            </h3>
          </div>
        </div>
        <div class="col-12 text-center mt-1"> <!-- Ocupa todo el ancho disponible y centrado -->
          <div class="icon-box">
            <h3>
              <i class="fas fa-dollar-sign"></i>
              <a href="#" onclick="openPasswordModal('vistas/presupuesto.php', 4)"  style="font-size: 32px;">DEPARTAMENTO PRESUPUESTO Y CONTROL DE GASTOS</a>
            </h3>
          </div>
        </div>
      </div>
      <p></p>
      <br>
    
      <a href="index.php" class="btn-custom btn-lg">
      <span class="fa-solid fa-reply"></span>
      </a>

<p></p>
      <a href="vistas/config.php" class="btn-config btn-lg">
      <span class="fa-solid fa-gear"></span>
      </a>
    </div>
  </section><!-- End Hero -->
  <!-- Modal para ingresar contraseña -->
  <div class="modal fade" id="passwordModal" tabindex="-1" role="dialog" aria-labelledby="passwordModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="passwordModalLabel">Ingrese su Matricula</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
         <form id="matriculaForm">
            <div class="form-group">
              <center>
              <input type="text" class="form-control" id="password" required>
              <input type="hidden" id="departamento" value="">
              </center>
            </div>
            <center>
            <input type="hidden" id="hiddenDepartamento" name="hiddenDepartamento" value="">
            <button type="button" class="btn btn-primary" onclick="checkPassword()">Ingresar</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>

<script src="librerias/jquery-3.7.1.min.js"></script>
<script src="librerias/bootstrap4/bootstrap.min.js"></script>
<script src="librerias/bootstrap4/popper.min.js"></script>
<script src="librerias/datatable/jquery.dataTables.min.js"></script>
<script src="librerias/datatable/dataTables.bootstrap4.min.js"></script>

<script>
function openPasswordModal(url, departamento) {
    $('#passwordModal').modal('show');
    $('#passwordModal').data('url', url);
    $('#departamento').val(departamento);
    $('#hiddenDepartamento').val(departamento);
    console.log("Departamento seleccionado:", departamento); 
    
      // Agregar controlador de eventos para el evento submit
    $('#matriculaForm').on('submit', function(event) {
        event.preventDefault(); // Evitar la acción predeterminada del formulario
        checkPassword();
    });
}

function checkPassword() {
    var url = $('#passwordModal').data('url');
    var matricula = $('#password').val();
    var departamento = $('#departamento').val();

    $.post('validar.php', { matricula: matricula, departamento: departamento }, function(response) {
        try {
            var result = JSON.parse(response);
            if (result.redirect) {
                // Redirigir si hay una URL de redirección
                window.location.href = result.redirect;
            } else if (result.error) {
                // Mostrar mensaje de error si lo hay
                alert(result.error);
            } else {
                // Manejar otros casos según sea necesario
                console.error("Respuesta inesperada del servidor:", result);
            }
        } catch (e) {
            console.error("Error al analizar la respuesta JSON:", e);
        }
    })
    .fail(function(jqXHR, textStatus, errorThrown) {
        // Manejar errores de la petición AJAX
        console.error("Error en la petición AJAX:", textStatus, errorThrown);
    });
}
</script>
</html>

<script>
  window.addEventListener('load', function() {
    // Espera a que la página se cargue completamente
    var heroContainer = document.getElementById('hero-container');
    heroContainer.classList.add('animate-in'); // Aplica la clase de animación
  });
</script>


