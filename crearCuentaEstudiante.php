<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/inicioSesionEstudiante.css">
    <title>Crear Cuenta</title>
</head>
<body>

<center class="mainForm">

<h2>Crear Cuenta</h2><br><br><br>

<form class="singInForm" action="completado.php" method="POST">

  <label class="formLabel">Nombre de usuario</label><br>
  <input class="formInput" type="text" name="username" id="username"><br>  

  <label class="formLabel">Correo electrónico</label><br>
  <input class="formInput" type="text" name="email" id="email"><br>

  <label class="formLabel">Contraseña</label><br />
  <input class="formInput" type="password" name="password" id="password"><br>

  <div>
    <input type="checkbox" name="privacyPolicy" id="privacyPolicy">
    <label for="privacyPolicy" class="checkBoxText">
    <a href="politicasDePrivacidad.php">Políticas de privacidad</a>
    </label>
  </div><br>

  <input type="submit" value="Regístrate"><br><br>

  <a class='googleButton' href="#"><button type="button">Google</button></a><br><br>
</form>
</center>

</body>
</html>
