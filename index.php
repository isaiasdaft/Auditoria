<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesión</title>
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <div class="box">
          <form action="validar.php" method="post">
            <h2 class="sr-only">Login </h2>
            <input type="text"  id="usuario" class="fadeIn second" name="usuario" placeholder="Username" required>
            <input type="password" id="contraseña" class="fadeIn third" name="contraseña"  placeholder="Password" required>
            <input type="submit" class="fadeIn fourth" value="Ingresar">
            <div class="group">
                <a href="portfolio-details.php">Forget Password</a>
                
            </div>
        </form>

    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
</body>

</html>
</html>