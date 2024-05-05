<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="stylesheet" href="css/inicioSesionEstudiante.css">
    <title>Inicio Sesión</title>
</head>
<body>
    
<center class="mainForm">

<h2>Iniciar Sesión</h2><br><br><br>

<form class="singInForm" action="" method="POST">

  <label class="formLabel">Correo electrónico</label><br>
  <input class="formInput" type="text" name="email" id="email"><br>

  <label class="formLabel">Contraseña</label><br />
  <input class="formInput" type="password" name="password" id="password"><br>

  <a class="forgotPassword" href="#">¿Olvidaste tu Contraseña?</a><br><br>

  <input type="submit" value="Iniciar Sesión"><br><br>

  <a class='googleButton' href="#"><button>Google</button></a><br><br>

  <a href="#">¿No tienes una cuenta?</a><br>

  <a href="ingresoDatos.php"><strong>Regístrate</strong></a>
</form>
</center>

</body>
</html>